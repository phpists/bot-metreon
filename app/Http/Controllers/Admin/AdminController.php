<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.layouts.login');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function users()
    {
        $users = DB::table('users')->get();
        return view('admin.users', ['users' => $users]);
        //return view('admin.users');
    }

    public function orders()
    {
        //$orders = DB::table('orders')->get();
        $orders = DB::table('orders')
            ->leftJoin('users', 'users.id', '=', 'orders.user_id')
            ->select('orders.*', 'users.first_name')
            ->get();

        return view('admin.orders', ['orders' => $orders]);
    }

    public function goods()
    {
        return view('admin.goods');
    }

    public function catalog()
    {
        return view('admin.catalog');
    }

    public function guests()
    {
        return view('admin.guests');
    }




}
