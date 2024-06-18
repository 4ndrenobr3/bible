<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VerseControllerTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_show_verse_of_book()
    {
        $response = $this->get('/api/verses/1');

        $response->assertStatus(200);
        $response->assertJson([
            [
                "id" => 1,
                "version_id" => 1,
                "book_id" => 1,
                "chapter" => 1,
                "number" => 1,
                "text" => "No princípio, criou Deus os céus e a terra.",
                "created_at" => null,
                "updated_at" => null
            ]
        ]);
    }
}
