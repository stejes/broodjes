<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrdersController extends Controller
{
    //
    /**
     * Display a list of all orders
     * 
     * @return Response
     */
    public function index(){
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }
    
    /**
     * Show order edit form
     * 
     * @param Order $order
     * @return Response
     */
    public function edit(Order $order){
        return view('orders.show', compact('order'));
    }
    
    public function create(Order $order){
        return view('orders.create', compact('order'));
    }
    
    public function show(Order $order){
        return view('orders.show', compact('order'));
    }
}
