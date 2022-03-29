<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storeorder_itemRequest;
use App\Http\Requests\Updateorder_itemRequest;
use App\Models\order_item;

class OrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\Storeorder_itemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeorder_itemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\order_item  $order_item
     * @return \Illuminate\Http\Response
     */
    public function show(order_item $order_item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\order_item  $order_item
     * @return \Illuminate\Http\Response
     */
    public function edit(order_item $order_item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateorder_itemRequest  $request
     * @param  \App\Models\order_item  $order_item
     * @return \Illuminate\Http\Response
     */
    public function update(Updateorder_itemRequest $request, order_item $order_item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order_item  $order_item
     * @return \Illuminate\Http\Response
     */
    public function destroy(order_item $order_item)
    {
        //
    }
}
