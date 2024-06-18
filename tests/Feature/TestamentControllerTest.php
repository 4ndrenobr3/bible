<?php

namespace Tests\Feature;

use App\Models\Testament;
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
        Testament::factory()->create([
            'name' => 'Antigo Testamento', 
        ]);

        $response = $this->get('/api/testaments');

        $response->assertStatus(200);
        $response->assertJson([
            [
                "id" => 1,
                "name" => "Antigo Testamento",
            ]
        ]);
    }
}
