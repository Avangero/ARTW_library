<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Warehouse extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('warehouse')->insert([
            [
                'book_id' => 1,
                'count_books' => 3,
            ],
            [
                'book_id' => 2,
                'count_books' => 8,
            ],
            [
                'book_id' => 3,
                'count_books' => 3,
            ],
            [
                'book_id' => 4,
                'count_books' => 12,
            ],
            [
                'book_id' => 5,
                'count_books' => 1,
            ],
        ]);
    }
}
