<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Inventory;

class InventorySeeder extends Seeder
{
    public function run(): void
    {
        // CREATE A USER FIRST
        $user = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password')
        ]);

        // Now create inventory items
        Inventory::factory()->count(20)->create();
    }
}