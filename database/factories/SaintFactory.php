<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Santo>
 */
class SaintFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome' => fake() -> firstName(),
            'luogoNascita' => fake() -> city(),
            'dataBenedizione' => fake() -> date('Y_m_d'),
            "numeroMiracoli" => fake() -> numberBetween(1,1000),
        ];
    }
}
