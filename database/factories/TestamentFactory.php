<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testament>
 */
class TestamentFactory extends Factory
{
    private array $testaments = [
        'Antigo Testamento',
        'Novo Testamento',
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'name' => $this->testaments[array_rand($this->testaments)],
        ];
    }
}
