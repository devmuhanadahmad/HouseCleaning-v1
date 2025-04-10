<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function index(){

        $orders=Order::with('category')->where('status','pending')->latest()->take(5)->get();
        return view('dashboard.index',compact('orders'));
    }
}
