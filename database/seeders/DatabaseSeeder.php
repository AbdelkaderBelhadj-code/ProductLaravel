<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ProductSeeder;
use App\Models\User; // Make sure to import the User model

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create(); // Use the correct namespace and factory method
            $this->call(ProductSeeder::class);
        // You can also seed other tables here if needed.
    }
}
