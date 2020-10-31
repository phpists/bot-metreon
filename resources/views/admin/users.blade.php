@extends('admin.layouts.app')
@section('content')

  <main><style>
  tbody tr {
    cursor: pointer;
  }

  #nav-breadcrumb {
    position: relative;
  }

  #nav-breadcrumb-add {
    position: absolute;
    right: 1rem;
    top: 50%;
    transform: translateY(-50%);
  }
</style>

<nav id="nav-breadcrumb" class="breadcrumb-fixed" aria-label="breadcrumb">
  <ol class="breadcrumb m-0">
    <li class="breadcrumb-item active" aria-current="page">Клиенты</li>
  </ol>
  <button id="nav-breadcrumb-add" type="button" class="btn btn-primary btn-sm" onclick="showModalNewUser()">Создать
    клиента</button>
</nav>

<div class="container-fluid py-5 bg-light">
  <div class="container">

    <table class="table table-bordered table-striped table-hover">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Telegram ID</th>
          <th scope="col">Имя</th>
          <th scole="col">Доступ к боту</th>
          <th scope="col">Создан</th>
          <th scope="col">Был активен</th>
        </tr>
      </thead>
      <tbody id="usersTableBody">

        @foreach($users as $user)

        <tr onclick="clickUser({{ $user->id }})">
          <th scope="row">{{ $user->id }}</th>
          <td>{{ $user->chat_id }}</td>
          <td>{{ $user->user_name }}</td>
          <td class="text-success">Доступен</td>
          <td>{{ $user->created_at }}</td>
          <td>{{ $user->updated_at }}</td>
        </tr>


        @endforeach



      </tbody>
    </table>

  </div>
</div>

<div class="modal fade" id="modalNewUser" tabindex="-1" role="dialog" aria-labelledby="modalNewUserTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalNewUserTitle">Новый клиент</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">

        <form id="modalNewUserForm" novalidate="">
          <div class="form-group">
            <label for="inputTgID">Telegram ID</label>
            <input type="text" class="form-control" id="inputTgID" name="tgId" required="">
          </div>

          <div class="form-group">
            <label for="inputUserName">Имя</label>
            <input type="text" class="form-control" id="inputUserName" name="name" aria-describedby="nameHelp" required="">
            <small id="nameHelp" class="form-text text-muted">Имя для учета в админке, клиенту не показывается</small>
          </div>
        </form>

        <p class="text-danger" id="modalNewUserError"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="submitModalNewUser()" id="modalNewUserSubmit">Создать</button>
        <div class="spinner-border text-primary" id="modalNewUserSpinner" role="status">
          <span class="sr-only">Loading...</span>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="users_files/axios.js"></script>
<script>
  function clickUser(userId) {
    window.location = `/users/${userId}`;
  }

  function showModalNewUser() {
    $('#modalNewUserError').hide();
    $('#modalNewUserSubmit').show();
    $('#modalNewUserSpinner').hide();
    $('#modalNewUser').modal();
  }

  function submitModalNewUser() {
    if (!$('#modalNewUserForm')[0].checkValidity()) {
      return $('#modalNewUserForm').addClass('was-validated');
    }

    const tgId = $('#inputTgID').val();
    const name = $('#inputUserName').val();

    $('#modalNewUserSubmit').hide();
    $('#modalNewUserSpinner').show();
    $('#modalNewUserError').hide();

    axios.post(`/api/users`, { name, tgId }).then(result => {
      const user = result.data;
      $('#modalNewUser').modal('hide');
      $('#usersTableBody').append(`
        <tr onclick="clickUser(${user.id})">
          <th scope="row">${user.id}</th>
          <td>${user.tg_id}</td>
          <td>${user.name}</td>
          <td>${(new Date(user.created_at)).toLocaleString('ru-RU')}</td>
          <td>${(new Date(user.last_access)).toLocaleString('ru-RU')}</td>
        </tr>
      `);
    }).catch(err => {
      $('#modalNewUserError').text(err.message);
      $('#modalNewUserError').show();
      $('#modalNewUserSpinner').hide();
      $('#modalNewUserSubmit').show();
    });
  }
</script>


</main>

@endsection
