<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flight>
 */
class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->name,
            'description'=> $this->faker->text, 
            'company'=> $this->faker->company, 
            'address'=> $this->faker->city, 
            'mobile'=> $this->faker->numerify('#####-######'),
        ];
    }
}



// composer dump-autoload
// php artisan tinker
// Models::factory()->count(100)->create()

// this three comand use for fake data create 