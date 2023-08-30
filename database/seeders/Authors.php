<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Authors extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('authors')->insert([
            [
                'name' => 'William Shakespeare',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Austen',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mark Twain',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Alex Filin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
