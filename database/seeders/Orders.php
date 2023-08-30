<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Orders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
            [
                'user_id' => 1,
                'book_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'state' => 'pending',
                'return_at' => null,
            ],
            [
                'user_id' => 2,
                'book_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
                'state' => 'returned',
                'return_at' => now(),
            ],
            [
                'user_id' => 2,
                'book_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'state' => 'pending',
                'return_at' => null,
            ],
            [
                'user_id' => 2,
                'book_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
                'state' => 'pending',
                'return_at' => null,
            ],
        ]);
    }
}
