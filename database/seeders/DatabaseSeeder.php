<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'username' => 'jscothserver',
            'name' => 'Juan C.',
            'lastname' => 'Torres',
            'email' => 'jscothserver@gmail.com',
        ]);
        Customer::factory(50)->create();
        Product::factory(50)->create();


    }
}
