<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VersionControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_list_all_versions()
    {
        $response = $this->get('/api/versions');

        $response->assertStatus(200);
        $response->assertJson([
            [
                "id"        => 1,
                "name"      => "1993 - Almeida Revisada e Atualizada",
                "created_at"=> null,
                "updated_at"=> null
            ]
        ]);
    }
}
