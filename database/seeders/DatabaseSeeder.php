<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Table Manufacturer
        DB::table('manufacturers')->insert([
            [
                'manu_name' => 'Adidas',
            ],
            [
                'manu_name' => 'Nike',
            ],
            [
                'manu_name' => 'Dior',
            ],
            [
                'manu_name' => 'LouisVuiton',
            ],
        ]);
    }
}
