<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $orders = Order::factory()->count(10)->make()->each(function($orders) use ($users) 
        {
          $orders->user_id = $users->random()->id;
          $orders->save();
        });
    }
}
