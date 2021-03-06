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
    <li class="breadcrumb-item active" aria-current="page">Заказы</li>
  </ol>

  <a class="btn btn-primary btn-sm" id="nav-breadcrumb-add" href="http://206.189.146.82/export" role="button">Экспорт</a>
</nav>

<div class="container-fluid py-5 bg-light">
  <div class="container">
    <table class="table table-bordered table-striped table-hover">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Клиент</th>
          <th scope="col">Статус</th>
          <th scope="col">Сумма</th>
          <th scope="col">Создан</th>
        </tr>
      </thead>
      <tbody>

        @foreach($orders as $order)

        <tr onclick="clickUser({{ $order->id }})">
          <th scope="row">{{ $order->id }}</th>
          <td>{{ $order->user_id }}</td>
          <td>{{ $order->status }}</td>
          <td class="text-success">Доступен</td>
          <td>{{ $order->created_at }}</td>
        </tr>


        @endforeach

        <tr onclick="clickOrder(72)">
          <th scope="row">72</th>
          <td>Дима</td>
          <td>⏳ У поставщика</td>
          <td>893800.00</td>
          <td>23.09.2020, 12:47:00</td>
        </tr>
        <tr onclick="clickOrder(71)">
          <th scope="row">71</th>
          <td>Дима</td>
          <td>⏳ У поставщика</td>
          <td>893800.00</td>
          <td>23.09.2020, 12:47:00</td>
        </tr>
        <tr onclick="clickOrder(70)">
          <th scope="row">70</th>
          <td>Дима</td>
          <td>⏳ У поставщика</td>
          <td>893800.00</td>
          <td>23.09.2020, 12:47:00</td>
        </tr>
        <tr onclick="clickOrder(69)">
          <th scope="row">69</th>
          <td>Дима</td>
          <td>⏳ У поставщика</td>
          <td>893800.00</td>
          <td>23.09.2020, 12:46:59</td>
        </tr>
        <tr onclick="clickOrder(68)">
          <th scope="row">68</th>
          <td>Дима</td>
          <td>⏳ У поставщика</td>
          <td>893800.00</td>
          <td>23.09.2020, 12:46:59</td>
        </tr>
        <tr onclick="clickOrder(67)">
          <th scope="row">67</th>
          <td>Дима</td>
          <td>⏳ У поставщика</td>
          <td>893800.00</td>
          <td>23.09.2020, 12:46:48</td>
        </tr>
        <tr onclick="clickOrder(66)">
          <th scope="row">66</th>
          <td>Дима</td>
          <td>⏳ У поставщика</td>
          <td>893800.00</td>
          <td>23.09.2020, 12:46:41</td>
        </tr>
        <tr onclick="clickOrder(65)">
          <th scope="row">65</th>
          <td>Дима</td>
          <td>⏳ У поставщика</td>
          <td>372800.00</td>
          <td>23.09.2020, 12:43:00</td>
        </tr>
        <tr onclick="clickOrder(64)">
          <th scope="row">64</th>
          <td>Дима</td>
          <td>✅ Выдан</td>
          <td>372800.00</td>
          <td>23.09.2020, 12:42:34</td>
        </tr>
        <tr onclick="clickOrder(63)">
          <th scope="row">63</th>
          <td>Дима</td>
          <td>🚫 Отменен</td>
          <td>372800.00</td>
          <td>23.09.2020, 12:30:53</td>
        </tr>
        <tr onclick="clickOrder(62)">
          <th scope="row">62</th>
          <td>Misha Shpir</td>
          <td>⏳ У поставщика</td>
          <td>123400.00</td>
          <td>23.09.2020, 12:30:28</td>
        </tr>
        <tr onclick="clickOrder(61)">
          <th scope="row">61</th>
          <td>Andrew!</td>
          <td>✅ Выдан</td>
          <td>18257.14</td>
          <td>20.09.2020, 19:31:02</td>
        </tr>
        <tr onclick="clickOrder(60)">
          <th scope="row">60</th>
          <td>Vitaly Berg</td>
          <td>✅ Выдан</td>
          <td>90166.74</td>
          <td>29.08.2020, 08:25:47</td>
        </tr>
        <tr onclick="clickOrder(59)">
          <th scope="row">59</th>
          <td>Vitaly Berg</td>
          <td>✅ Выдан</td>
          <td>85200.00</td>
          <td>29.08.2020, 08:24:56</td>
        </tr>
        <tr onclick="clickOrder(58)">
          <th scope="row">58</th>
          <td>Andrew!</td>
          <td>✅ Выдан</td>
          <td>325260.26</td>
          <td>03.08.2020, 10:58:20</td>
        </tr>
        <tr onclick="clickOrder(57)">
          <th scope="row">57</th>
          <td>Дима</td>
          <td>✅ Выдан</td>
          <td>5886.83</td>
          <td>03.08.2020, 10:48:17</td>
        </tr>
        <tr onclick="clickOrder(56)">
          <th scope="row">56</th>
          <td>Дима</td>
          <td>✅ Выдан</td>
          <td>2314239.29</td>
          <td>03.08.2020, 10:43:29</td>
        </tr>
        <tr onclick="clickOrder(55)">
          <th scope="row">55</th>
          <td>Дима</td>
          <td>⏳ У поставщика</td>
          <td>330860.34</td>
          <td>30.07.2020, 13:20:15</td>
        </tr>
        <tr onclick="clickOrder(54)">
          <th scope="row">54</th>
          <td>Puls </td>
          <td>⏳ У поставщика</td>
          <td>2689488.68</td>
          <td>30.07.2020, 10:30:33</td>
        </tr>
        <tr onclick="clickOrder(53)">
          <th scope="row">53</th>
          <td>Дима</td>
          <td>🚛 Готов к выдачи</td>
          <td>606327.48</td>
          <td>30.07.2020, 10:23:50</td>
        </tr>
        <tr onclick="clickOrder(52)">
          <th scope="row">52</th>
          <td>Дима</td>
          <td>⏳ У поставщика</td>
          <td>258951.00</td>
          <td>30.07.2020, 10:02:23</td>
        </tr>
        <tr onclick="clickOrder(51)">
          <th scope="row">51</th>
          <td>Andrew!</td>
          <td>🚫 Отменен</td>
          <td>626943.72</td>
          <td>29.07.2020, 18:21:56</td>
        </tr>
        <tr onclick="clickOrder(50)">
          <th scope="row">50</th>
          <td>Andrew!</td>
          <td>🚫 Отменен</td>
          <td>38001.16</td>
          <td>29.07.2020, 11:06:41</td>
        </tr>
        <tr onclick="clickOrder(49)">
          <th scope="row">49</th>
          <td>Vitaly Berg</td>
          <td>⏳ У поставщика</td>
          <td>315.69</td>
          <td>28.07.2020, 16:20:31</td>
        </tr>
        <tr onclick="clickOrder(48)">
          <th scope="row">48</th>
          <td>Vitaly Berg</td>
          <td>✅ Выдан</td>
          <td>9056.46</td>
          <td>21.07.2020, 04:08:03</td>
        </tr>
        <tr onclick="clickOrder(47)">
          <th scope="row">47</th>
          <td>Vitaly Berg</td>
          <td>⏳ У поставщика</td>
          <td>172000.00</td>
          <td>19.07.2020, 17:33:17</td>
        </tr>
        <tr onclick="clickOrder(46)">
          <th scope="row">46</th>
          <td>Andrew!</td>
          <td>🚫 Отменен</td>
          <td>35796.00</td>
          <td>10.06.2020, 07:14:21</td>
        </tr>
        <tr onclick="clickOrder(45)">
          <th scope="row">45</th>
          <td>Дима</td>
          <td>⏳ У поставщика</td>
          <td>52463.05</td>
          <td>03.06.2020, 07:49:05</td>
        </tr>
        <tr onclick="clickOrder(44)">
          <th scope="row">44</th>
          <td>Sirtell</td>
          <td>⏳ У поставщика</td>
          <td>48871.08</td>
          <td>01.06.2020, 18:56:03</td>
        </tr>
        <tr onclick="clickOrder(43)">
          <th scope="row">43</th>
          <td>Дима</td>
          <td>🚫 Отменен</td>
          <td>37197.00</td>
          <td>01.06.2020, 09:31:17</td>
        </tr>
        <tr onclick="clickOrder(42)">
          <th scope="row">42</th>
          <td>Sirtell</td>
          <td>🛫 Вылетел</td>
          <td>9529.33</td>
          <td>31.05.2020, 11:20:23</td>
        </tr>
        <tr onclick="clickOrder(41)">
          <th scope="row">41</th>
          <td>Puls </td>
          <td>🛬 Прибыл</td>
          <td>1076.60</td>
          <td>31.05.2020, 09:18:16</td>
        </tr>
        <tr onclick="clickOrder(40)">
          <th scope="row">40</th>
          <td>Puls </td>
          <td>🛬 Прибыл</td>
          <td>35096.62</td>
          <td>31.05.2020, 09:17:35</td>
        </tr>
        <tr onclick="clickOrder(39)">
          <th scope="row">39</th>
          <td>Деня</td>
          <td>🛫 Вылетел</td>
          <td>36478.02</td>
          <td>31.05.2020, 09:01:53</td>
        </tr>
        <tr onclick="clickOrder(38)">
          <th scope="row">38</th>
          <td>Vitaly Berg</td>
          <td>🚛 Готов к выдачи</td>
          <td>19911.20</td>
          <td>30.05.2020, 12:38:30</td>
        </tr>
        <tr onclick="clickOrder(37)">
          <th scope="row">37</th>
          <td>Alexey Малой</td>
          <td>🛫 Вылетел</td>
          <td>385275.00</td>
          <td>30.05.2020, 09:39:30</td>
        </tr>
        <tr onclick="clickOrder(36)">
          <th scope="row">36</th>
          <td>Alexey Малой</td>
          <td>🛫 Вылетел</td>
          <td>24529.50</td>
          <td>30.05.2020, 09:33:24</td>
        </tr>
        <tr onclick="clickOrder(35)">
          <th scope="row">35</th>
          <td>Sirtell</td>
          <td>⏳ У поставщика</td>
          <td>29597.88</td>
          <td>30.05.2020, 08:55:32</td>
        </tr>
        <tr onclick="clickOrder(34)">
          <th scope="row">34</th>
          <td>Sirtell</td>
          <td>⏳ У поставщика</td>
          <td>16683.92</td>
          <td>30.05.2020, 08:54:26</td>
        </tr>
        <tr onclick="clickOrder(33)">
          <th scope="row">33</th>
          <td>Sirtell</td>
          <td>⏳ У поставщика</td>
          <td>2376.80</td>
          <td>30.05.2020, 08:52:09</td>
        </tr>
        <tr onclick="clickOrder(32)">
          <th scope="row">32</th>
          <td>Sirtell</td>
          <td>⏳ У поставщика</td>
          <td>809.14</td>
          <td>30.05.2020, 08:47:39</td>
        </tr>
        <tr onclick="clickOrder(31)">
          <th scope="row">31</th>
          <td>Sirtell</td>
          <td>🛫 Вылетел</td>
          <td>22452.00</td>
          <td>30.05.2020, 08:46:21</td>
        </tr>
        <tr onclick="clickOrder(30)">
          <th scope="row">30</th>
          <td>Andrew!</td>
          <td>🛫 Вылетел</td>
          <td>15545.85</td>
          <td>29.05.2020, 20:17:23</td>
        </tr>
        <tr onclick="clickOrder(28)">
          <th scope="row">28</th>
          <td>Andrew!</td>
          <td>⏳ У поставщика</td>
          <td>4289.60</td>
          <td>29.05.2020, 17:00:56</td>
        </tr>
        <tr onclick="clickOrder(27)">
          <th scope="row">27</th>
          <td>Деня</td>
          <td>✅ Выдан</td>
          <td>36768.00</td>
          <td>29.05.2020, 16:42:56</td>
        </tr>
        <tr onclick="clickOrder(26)">
          <th scope="row">26</th>
          <td>Vitaly Berg</td>
          <td>⏳ У поставщика</td>
          <td>22579.60</td>
          <td>29.05.2020, 16:37:48</td>
        </tr>
        <tr onclick="clickOrder(25)">
          <th scope="row">25</th>
          <td>Деня</td>
          <td>⏳ У поставщика</td>
          <td>36768.00</td>
          <td>29.05.2020, 16:36:19</td>
        </tr>
        <tr onclick="clickOrder(24)">
          <th scope="row">24</th>
          <td>Vitaly Berg</td>
          <td>⏳ У поставщика</td>
          <td>6068.00</td>
          <td>29.05.2020, 16:25:33</td>
        </tr>
        <tr onclick="clickOrder(23)">
          <th scope="row">23</th>
          <td>Vitaly Berg</td>
          <td>⏳ У поставщика</td>
          <td>768.00</td>
          <td>29.05.2020, 16:23:22</td>
        </tr>
        <tr onclick="clickOrder(22)">
          <th scope="row">22</th>
          <td>Andrew!</td>
          <td></td>
          <td>5109.60</td>
          <td>29.05.2020, 16:22:45</td>
        </tr>
        <tr onclick="clickOrder(21)">
          <th scope="row">21</th>
          <td>Andrew!</td>
          <td></td>
          <td>29298.80</td>
          <td>29.05.2020, 08:43:40</td>
        </tr>
        <tr onclick="clickOrder(20)">
          <th scope="row">20</th>
          <td>Andrew!</td>
          <td>🛫 Вылетел</td>
          <td>23476.00</td>
          <td>28.05.2020, 14:32:11</td>
        </tr>
        <tr onclick="clickOrder(18)">
          <th scope="row">18</th>
          <td>Деня</td>
          <td>⏳ У поставщика</td>
          <td>4443195.90</td>
          <td>27.05.2020, 15:53:23</td>
        </tr>
        <tr onclick="clickOrder(17)">
          <th scope="row">17</th>
          <td>Alexey Малой</td>
          <td>⏳ У поставщика</td>
          <td>29430.00</td>
          <td>27.05.2020, 15:53:06</td>
        </tr>
        <tr onclick="clickOrder(16)">
          <th scope="row">16</th>
          <td>Деня</td>
          <td>⏳ У поставщика</td>
          <td>19330.00</td>
          <td>27.05.2020, 15:51:59</td>
        </tr>
        <tr onclick="clickOrder(15)">
          <th scope="row">15</th>
          <td>Alexey Малой</td>
          <td>⏳ У поставщика</td>
          <td>14723000000.00</td>
          <td>27.05.2020, 15:51:45</td>
        </tr>
        <tr onclick="clickOrder(14)">
          <th scope="row">14</th>
          <td>Sirtell</td>
          <td>⏳ У поставщика</td>
          <td>16348.00</td>
          <td>27.05.2020, 15:41:38</td>
        </tr>
        <tr onclick="clickOrder(9)">
          <th scope="row">9</th>
          <td>Vitaly Berg</td>
          <td>✅ Выдан</td>
          <td>11136.00</td>
          <td>27.05.2020, 13:11:25</td>
        </tr>
        <tr onclick="clickOrder(8)">
          <th scope="row">8</th>
          <td>Деня</td>
          <td>🛫 Вылетел</td>
          <td>34296.60</td>
          <td>27.05.2020, 12:06:03</td>
        </tr>
        <tr onclick="clickOrder(7)">
          <th scope="row">7</th>
          <td>Дима</td>
          <td>✅ Выдан</td>
          <td>7496063.10</td>
          <td>27.05.2020, 10:12:15</td>
        </tr>
        <tr onclick="clickOrder(6)">
          <th scope="row">6</th>
          <td>Andrew!</td>
          <td>⏳ У поставщика</td>
          <td>7853.47</td>
          <td>27.05.2020, 09:20:16</td>
        </tr>
        <tr onclick="clickOrder(5)">
          <th scope="row">5</th>
          <td>Andrew!</td>
          <td>✅ Выдан</td>
          <td>13281.60</td>
          <td>27.05.2020, 09:05:27</td>
        </tr>
        <tr onclick="clickOrder(4)">
          <th scope="row">4</th>
          <td>Vitaly Berg</td>
          <td>🚛 Готов к выдачи</td>
          <td>14062.00</td>
          <td>27.05.2020, 09:05:25</td>
        </tr>
        <tr onclick="clickOrder(3)">
          <th scope="row">3</th>
          <td>Vitaly Berg</td>
          <td>🛫 Вылетел</td>
          <td>18697.00</td>
          <td>27.05.2020, 08:42:38</td>
        </tr>
        <tr onclick="clickOrder(1)">
          <th scope="row">1</th>
          <td>Vitaly Berg</td>
          <td>⏳ У поставщика</td>
          <td>30203</td>
          <td>22.05.2020, 17:10:12</td>
        </tr>
      </tbody>
    </table>

  </div>
</div>

@endsection