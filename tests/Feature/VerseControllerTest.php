<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Verse;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

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
        Verse::factory()->create([
            "version_id" => 1,
            "book_id" => 1,
            "chapter" => 1,
            "number" => 1,
            "text" => "No princípio, criou Deus os céus e a terra.",
        ]);

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
            ]
        ]);
    }
}
