<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('admin_data/bootstrap.css') }}">

    <title>Бот админка</title>

    <style>

    </style>
</head>

<body>
<header class="navbar sticky-top navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand" href="{{route('index')}}">Бот админка</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav">
            <li class="nav-item {{ Request::is('admin/users')? 'active': '' }}">
                <a class="nav-link" href="{{route('users')}}">Клиенты</a>
            </li>
            <li class="nav-item {{ Request::is('admin/orders')? 'active': '' }}">
                <a class="nav-link" href="{{route('orders')}}">Заказы</a>
            </li>
            <li class="nav-item {{ Request::is('admin/goods')? 'active': '' }}">
                <a class="nav-link" href="{{route('goods')}}">Товары</a>
            </li>
            <li class="nav-item {{ Request::is('admin/catalog')? 'active': '' }}">
                <a class="nav-link" href="{{route('catalog')}}">Каталог</a>
            </li>
            <li class="nav-item {{ Request::is('admin/guests')? 'active': '' }}">
                <a class="nav-link" href="{{route('guests')}}">Гости</a>
            </li>

            <li class="nav-item pull-right">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Выход</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>

        </ul>
    </div>
</header>


<main>

    @yield('content')


  <script src="{{ asset('admin_data/jquery-3.js') }}"></script>
  <script src="{{ asset('admin_data/popper.js') }}"></script>
  <script src="{{ asset('admin_data/bootstrap.js') }}"></script>


</main>
</body>
</html>