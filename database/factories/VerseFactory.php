<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Version;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Verse>
 */
class VerseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'version_id' => Version::factory()->create()->id,
            'book_id' => Book::factory()->create()->id,
            'chapter' => 1,
            'number' => 1,
            'text' => "No princípio, criou Deus os céus e a terra.",
        ];
    }
}
