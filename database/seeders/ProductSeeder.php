<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product; // Make sure to import the Product model

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Product::factory(10)->create(); // Use the correct namespace and factory method

        // You can adjust the number of products created (10 in this case).
    }
}
