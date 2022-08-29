<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        ### The first method
//        $persianFaker = \Faker\Factory::create('fa_IR');
//        return [
//            'name' => $persianFaker->name(),
//            'url' => $this->faker->imageUrl(446, 240, 'animals', true),
//            'length' => $this->faker->randomNumber(3),
//            'slug' => $this->faker->slug(),
//            'description' => $persianFaker->realText()
//        ];

        ### The second method
        // config/app.php --->>> change faker_locale to 'fa_IR'
        return [
            'name' => $this->faker->name(),
            'url' => $this->faker->imageUrl(446, 240, 'animals', true),
            'length' => $this->faker->randomNumber(3),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->realText()
        ];
    }
}
