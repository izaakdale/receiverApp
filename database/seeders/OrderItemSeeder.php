<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orders = Order::all();
        $products = Product::all();
        $orderItem = OrderItem::factory()->count(100)->make()->each(function($orderItem) use ($orders, $products)
        {
          $orderItem->order_id = $orders->random()->id;
          $orderItem->product_id = $products->random()->id;
          $orderItem->save();
        });
    }
}
