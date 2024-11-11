<?php

namespace Database\Factories;

use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'descricao' => $this->faker->sentence(),
            'capa' => $this->faker->imageUrl(640, 480, 'cats', true, 'Faker'),
            'autor' => $this->faker->name(),
            'preco' => $this->faker->randomFloat(2, 10, 1000),
        ];
    }
}
