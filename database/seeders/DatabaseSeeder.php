<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(Users::class);
        $this->call(Books::class);
        $this->call(Authors::class);

        $this->call(Orders::class);
        $this->call(AuthorBook::class);
        $this->call(Warehouse::class);
    }
}
