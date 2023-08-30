<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Books extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'name' => 'Romeo and Juliet',
                'short_name' => 'R&J',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Romeo and Juliet 2',
                'short_name' => 'R&J 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Romeo and Juliet 3',
                'short_name' => 'R&J 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pride and Prejudice',
                'short_name' => 'P&P',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Adventures of Huckleberry Finn',
                'short_name' => 'Huck Finn',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
