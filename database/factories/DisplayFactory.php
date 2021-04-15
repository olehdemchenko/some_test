<?php

namespace Database\Factories;

use App\Models\Display;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class DisplayFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Display::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $types = (new Display)->types;

        return [
            'type' => Arr::random($types, 1)[0],
            'serial_number' => Str::random(32),
            'file_path' => $this->faker->imageUrl()
        ];
    }
}
