@extends('admin.layouts.app')
@section('content')

<style>
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
    <li class="breadcrumb-item active" aria-current="page">Гости</li>
  </ol>
</nav>

<div class="container-fluid py-5 bg-light">
  <div class="container">

    <p>Незарегистрированные люди которые зашли в бот.</p>

    <table class="table table-bordered table-striped table-hover">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Telegram ID</th>
          <th scope="col">Ник</th>
          <th scope="col">Имя</th>
          <th scope="col">Создан</th>
          <th scope="col">Был активен</th>
        </tr>
      </thead>
      <tbody>
        <tr onclick="clickGuest(20)">
          <th scope="row">20</th>
          <td>488075125</td>
          <td>softdeal</td>
          <td>Юрий Чопей</td>
          <td>09.10.2020, 09:30:39</td>
          <td>09.10.2020, 09:30:39</td>
        </tr>
        <tr onclick="clickGuest(19)">
          <th scope="row">19</th>
          <td>739748459</td>
          <td></td>
          <td>Дима</td>
          <td>21.09.2020, 10:55:19</td>
          <td>21.09.2020, 10:55:19</td>
        </tr>
        <tr onclick="clickGuest(18)">
          <th scope="row">18</th>
          <td>177793905</td>
          <td>m_shpir</td>
          <td>Misha Shpir</td>
          <td>21.09.2020, 10:54:16</td>
          <td>21.09.2020, 10:54:16</td>
        </tr>
        <tr onclick="clickGuest(17)">
          <th scope="row">17</th>
          <td>168068096</td>
          <td>anna_annet</td>
          <td>💚💚💚Аня💚💚💚</td>
          <td>03.08.2020, 12:25:10</td>
          <td>03.08.2020, 12:25:10</td>
        </tr>
        <tr onclick="clickGuest(16)">
          <th scope="row">16</th>
          <td>389138257</td>
          <td>sasha_pulse</td>
          <td>Sasha Sasha</td>
          <td>28.05.2020, 14:38:58</td>
          <td>28.05.2020, 14:38:58</td>
        </tr>
        <tr onclick="clickGuest(14)">
          <th scope="row">14</th>
          <td>618737505</td>
          <td>alexey98721</td>
          <td>Alexey</td>
          <td>27.05.2020, 15:30:56</td>
          <td>27.05.2020, 15:30:56</td>
        </tr>
        <tr onclick="clickGuest(13)">
          <th scope="row">13</th>
          <td>316858975</td>
          <td>Craf4ty</td>
          <td>Деня</td>
          <td>27.05.2020, 12:00:59</td>
          <td>27.05.2020, 12:00:59</td>
        </tr>
        <tr onclick="clickGuest(12)">
          <th scope="row">12</th>
          <td>972672471</td>
          <td>DDtrade</td>
          <td>DD</td>
          <td>27.05.2020, 10:08:11</td>
          <td>27.05.2020, 10:08:11</td>
        </tr>
        <tr onclick="clickGuest(9)">
          <th scope="row">9</th>
          <td>95173483</td>
          <td>Sirtell</td>
          <td>Sir-tell</td>
          <td>27.05.2020, 09:37:41</td>
          <td>27.05.2020, 09:39:19</td>
        </tr>
        <tr onclick="clickGuest(8)">
          <th scope="row">8</th>
          <td>597085030</td>
          <td>ddllsgsggs</td>
          <td>Andrew</td>
          <td>27.05.2020, 08:53:33</td>
          <td>27.05.2020, 08:53:33</td>
        </tr>
        <tr onclick="clickGuest(3)">
          <th scope="row">3</th>
          <td>882251032</td>
          <td></td>
          <td>Хуй Песда</td>
          <td>26.05.2020, 16:56:26</td>
          <td>27.05.2020, 16:34:13</td>
        </tr>
        <tr onclick="clickGuest(1)">
          <th scope="row">1</th>
          <td>998366</td>
          <td>bergusman</td>
          <td>Vitaly Berg</td>
          <td>20.05.2020, 07:19:43</td>
          <td>20.05.2020, 07:22:10</td>
        </tr>
      </tbody>
    </table>

  </div>
</div>

@endsection