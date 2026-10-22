<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Seed reviews for every book in the database.
     */
    public function run(): void
    {
        Book::all()->each(function (Book $book) {
            Review::factory(rand(1, 5))->create([
                'book_id' => $book->id,
            ]);
        });
    }
}
