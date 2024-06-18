<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Book;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookControllerTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_list_all_books()
    {
        $book = Book::factory()->create([
            "name"          => "Gênesis",
            "abbreviation"  => "gn",
            "position"      => 1,
            "testament_id"  => 1
        ]);

        $response = $this->get('/api/books');

        $response->assertStatus(200);
        $response->assertJson([
            [
                "id"            => 1,
                "testament_id"  => 1,
                "position"      => 1,
                "name"          => "Gênesis",
                "abbreviation"  => "gn",
            ]
        ]);
    }
}
