<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Version>
 */
class VersionFactory extends Factory
{
    private array $versions = [
        ['name' => '1993 - Almeida Revisada e Atualizada']
    ];
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $version = $this->versions[array_rand($this->versions)];
        return [
            'name'      => $version['name'],
        ];
    }
}
