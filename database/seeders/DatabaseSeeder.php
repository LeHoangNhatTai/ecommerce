<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //\App\Models\User::factory(10)->create();
        \App\Models\Brand::factory(20)->create();
        \App\Models\Category::factory(20)->create();
        \App\Models\Customer::factory(15)->create();
        \App\Models\Product::factory(100)->create();
        \App\Models\Order::factory(20)->create();
        \App\Models\Media::factory(20)->create();
        \App\Models\OrderDetail::factory(20)->create();    
    }
}
