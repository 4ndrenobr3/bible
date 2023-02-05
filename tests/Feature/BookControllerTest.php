<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BookControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_list_all_books()
    {
        $response = $this->get('/api/books');

        $response->assertStatus(200);
        $response->assertJson([
            [
                "id"            => 1,
                "testament_id"  => 1,
                "position"      => 1,
                "name"          => "Gênesis",
                "abbreviation"  => "gn",
                "created_at"    => null,
                "updated_at"    => null
            ]
        ]);
    }
}
