<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Version;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class VersionControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_list_all_versions()
    {
        $version = Version::factory()->create([
            'name' => '1993 - Almeida Revisada e Atualizada',
        ]);
        
        $response = $this->get('/api/versions');

        $response->assertStatus(200);
        $response->assertJson([
            [
                "id"        => 1,
                "name"      => "1993 - Almeida Revisada e Atualizada",
            ]
        ]);
    }
}
