<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Room>
 */
class RoomFactory extends Factory
{
    protected $model = Room::class;

    public function definition(): array
    {
        $name = fake()->unique()->randomElement([
            'Pine Dome',
            'Edelweiss',
            'Seruni',
        ]);

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => fake()->paragraphs(3, true),
            'price_per_night' => fake()->randomFloat(2, 650000, 1500000),
            'capacity' => fake()->numberBetween(2, 6),
            'size_sqm' => fake()->numberBetween(20, 60),
            'amenities' => ['AC', 'TV', 'WiFi', 'Kamar Mandi Dalam'],
            'is_available' => true,
            'is_featured' => fake()->boolean(70),
            'sort_order' => fake()->numberBetween(0, 10),
        ];
    }

    public function available(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_available' => true,
        ]);
    }

    public function featured(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_featured' => true,
        ]);
    }
}
