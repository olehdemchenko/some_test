<?php

namespace Database\Factories;

use App\Models\Reseller;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ResellerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reseller::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'reseller_number' => Str::random(32)
        ];
    }
}
