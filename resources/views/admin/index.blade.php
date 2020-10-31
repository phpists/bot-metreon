@extends('admin.layouts.app')
@section('content')



<style>
  .card-columns {
    column-count: 2;
  }

  tbody tr {
    cursor: pointer;
  }
</style>

<nav id="nav-breadcrumb" class="breadcrumb-fixed" aria-label="breadcrumb">
  <ol class="breadcrumb m-0">
    <li class="breadcrumb-item active" aria-current="page">Дашборд</li>
  </ol>
</nav>

<div class="container-fluid py-5 bg-light">
  <div class="container">
    <div class="card-columns">

      <div class="card">
        <h5 class="card-header">📦 Последние заказы</h5>
        <div class="card-body">
          <table class="table table-bordered table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Клиент</th>
                <th scope="col">Статус</th>
                <th scope="col">Сумма</th>
              </tr>
            </thead>
            <tbody>
              <tr onclick="clickOrder(72)">
                <th scope="row">72</th>
                <td>Дима</td>
                <td>⏳ У поставщика</td>
                <td>893800.00</td>
              </tr>
              <tr onclick="clickOrder(71)">
                <th scope="row">71</th>
                <td>Дима</td>
                <td>⏳ У поставщика</td>
                <td>893800.00</td>
              </tr>
              <tr onclick="clickOrder(70)">
                <th scope="row">70</th>
                <td>Дима</td>
                <td>⏳ У поставщика</td>
                <td>893800.00</td>
              </tr>
              <tr onclick="clickOrder(69)">
                <th scope="row">69</th>
                <td>Дима</td>
                <td>⏳ У поставщика</td>
                <td>893800.00</td>
              </tr>
              <tr onclick="clickOrder(68)">
                <th scope="row">68</th>
                <td>Дима</td>
                <td>⏳ У поставщика</td>
                <td>893800.00</td>
              </tr>
              <tr onclick="clickOrder(67)">
                <th scope="row">67</th>
                <td>Дима</td>
                <td>⏳ У поставщика</td>
                <td>893800.00</td>
              </tr>
              <tr onclick="clickOrder(66)">
                <th scope="row">66</th>
                <td>Дима</td>
                <td>⏳ У поставщика</td>
                <td>893800.00</td>
              </tr>
              <tr onclick="clickOrder(65)">
                <th scope="row">65</th>
                <td>Дима</td>
                <td>⏳ У поставщика</td>
                <td>372800.00</td>
              </tr>
              <tr onclick="clickOrder(64)">
                <th scope="row">64</th>
                <td>Дима</td>
                <td>✅ Выдан</td>
                <td>372800.00</td>
              </tr>
              <tr onclick="clickOrder(63)">
                <th scope="row">63</th>
                <td>Дима</td>
                <td>🚫 Отменен</td>
                <td>372800.00</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="card">
        <h5 class="card-header">👨‍👨‍👦‍👦 Последние активные клиенты</h5>
        <div class="card-body">
          <table class="table table-bordered table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Telegram ID</th>
                <th scope="col">Имя</th>
              </tr>
            </thead>
            <tbody>
              <tr onclick="clickUser(8)">
                <th scope="row">8</th>
                <td>597085030</td>
                <td>Andrew!</td>
              </tr>
              <tr onclick="clickUser(15)">
                <th scope="row">15</th>
                <td>177793905</td>
                <td>Misha Shpir</td>
              </tr>
              <tr onclick="clickUser(10)">
                <th scope="row">10</th>
                <td>972672471</td>
                <td>Дима</td>
              </tr>
              <tr onclick="clickUser(1)">
                <th scope="row">1</th>
                <td>998366</td>
                <td>Vitaly Berg</td>
              </tr>
              <tr onclick="clickUser(11)">
                <th scope="row">11</th>
                <td>316858975</td>
                <td>Деня</td>
              </tr>
              <tr onclick="clickUser(14)">
                <th scope="row">14</th>
                <td>168068096</td>
                <td>Аня</td>
              </tr>
              <tr onclick="clickUser(13)">
                <th scope="row">13</th>
                <td>389138257</td>
                <td>Puls </td>
              </tr>
              <tr onclick="clickUser(9)">
                <th scope="row">9</th>
                <td>95173483</td>
                <td>Sirtell</td>
              </tr>
              <tr onclick="clickUser(12)">
                <th scope="row">12</th>
                <td>618737505</td>
                <td>Alexey Малой</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="card">
        <h5 class="card-header">🕵️ Последние гости</h5>
        <div class="card-body">

          <table class="table table-bordered table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Telegram ID</th>
                <th scope="col">Ник</th>
                <th scope="col">Имя</th>
              </tr>
            </thead>
            <tbody>
              <tr onclick="clickGuest(20)">
                <th scope="row">20</th>
                <td>488075125</td>
                <td>softdeal</td>
                <td>Юрий Чопей</td>
              </tr>
              <tr onclick="clickGuest(19)">
                <th scope="row">19</th>
                <td>739748459</td>
                <td></td>
                <td>Дима</td>
              </tr>
              <tr onclick="clickGuest(18)">
                <th scope="row">18</th>
                <td>177793905</td>
                <td>m_shpir</td>
                <td>Misha Shpir</td>
              </tr>
              <tr onclick="clickGuest(17)">
                <th scope="row">17</th>
                <td>168068096</td>
                <td>anna_annet</td>
                <td>💚💚💚Аня💚💚💚</td>
              </tr>
              <tr onclick="clickGuest(16)">
                <th scope="row">16</th>
                <td>389138257</td>
                <td>sasha_pulse</td>
                <td>Sasha Sasha</td>
              </tr>
              <tr onclick="clickGuest(3)">
                <th scope="row">3</th>
                <td>882251032</td>
                <td></td>
                <td>Хуй Песда</td>
              </tr>
              <tr onclick="clickGuest(14)">
                <th scope="row">14</th>
                <td>618737505</td>
                <td>alexey98721</td>
                <td>Alexey</td>
              </tr>
              <tr onclick="clickGuest(13)">
                <th scope="row">13</th>
                <td>316858975</td>
                <td>Craf4ty</td>
                <td>Деня</td>
              </tr>
              <tr onclick="clickGuest(12)">
                <th scope="row">12</th>
                <td>972672471</td>
                <td>DDtrade</td>
                <td>DD</td>
              </tr>
              <tr onclick="clickGuest(9)">
                <th scope="row">9</th>
                <td>95173483</td>
                <td>Sirtell</td>
                <td>Sir-tell</td>
              </tr>
            </tbody>
          </table>

        </div>
      </div>

    </div>

  </div>
</div>


@endsection

