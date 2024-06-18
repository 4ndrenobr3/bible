<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TestamentControllerTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_show_all_testaments()
    {
        $response = $this->get('/api/testaments');

        $response->assertStatus(200);
        $response->assertJson([
            [
                "id" => 1,
                "name" => "Antigo Testamento",
                "created_at" => null,
                "updated_at" => null
            ]
        ]);
    }
}
