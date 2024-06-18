<?php

namespace Database\Factories;

use App\Models\Testament;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    private array $books = [
        ['name' => 'Gênesis', 'position' => 1, 'abbreviation' => 'gn', 'testament_id' => 1],
        ['name' => 'Êxodo', 'position' => 2, 'abbreviation' => 'ex', 'testament_id' => 1],
        ['name' => 'Levítico', 'position' => 3, 'abbreviation' => 'lv', 'testament_id' => 1],
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $book = $this->books[array_rand($this->books)];
        return [
            'testament_id'  => Testament::factory()->create()->id,
            'position'      => $book['position'],
            'name'          => $book['name'],
            'abbreviation'  => $book['abbreviation'],
        ];
    }
}
