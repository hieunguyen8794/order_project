<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Auth;
class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getList () {
        return view('admin.order.list');
    }
    public function getAdd () {
        return view('admin.order.add');
    }
    public function postAdd () {
    }
}
