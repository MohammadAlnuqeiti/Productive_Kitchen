<?php

namespace App\Http\Controllers\Kitchen;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Http\Request;

class KitchenOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kitchen_id = Auth()->user()->id;
        $orders = Order::where('kitchen_id', $kitchen_id)
                            ->get();
        // return pending orders
        $pendingOrders = Order::where('kitchen_id',$kitchen_id)->where('status','pending')->get();

        return view('kitchenDashboard.orders.show', ['orders'=>$orders,'pendingOrders'=>$pendingOrders]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orders = OrderDetails::where('order_id', $id)->get();

        $order_no = Order::where('id', $id)->first();

        $kitchen_id = auth()->user()->id;
        $pendingOrders = Order::where('kitchen_id',$kitchen_id)->where('status','pending')->get();

        return view('kitchenDashboard.orders.orderDetails',['orders' => $orders , 'order_no' => $order_no , 'pendingOrders' => $pendingOrders , 'pendingOrders'=>$pendingOrders ]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
