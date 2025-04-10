<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'name' => $this->faker->company,
            'email' => $this->faker->unique()->safeEmail,
            'address' => $this->faker->address,
            'phone' => $this->faker->unique()->phoneNumber,
            'deadline' => $this->faker->date(),
            'number_of_working_hours' => $this->faker->randomFloat(2, 0, 24), // Number of working hours (float)
            'number_of_workers_working' => $this->faker->numberBetween(1, 100), // Workers count
           // 'images' => $this->faker->imageUrl(),
            'notes' => $this->faker->text(),
            'appointment' => $this->faker->dateTimeBetween('+1 week', '+1 month'), // Random appointment date
            'status' => $this->faker->randomElement(['pending', 'confirmed', 'completed', 'cancelled']),
            'category_id'=>fake()->randomElement(Category::pluck('id')),


        ];
    }
}
