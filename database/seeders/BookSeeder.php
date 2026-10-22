<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Seed the database with books.
     */
    public function run(): void
    {
        Book::factory()
            ->count(20)
            ->create();
    }
}
