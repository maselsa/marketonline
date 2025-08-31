<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory {

public function unverified(): static
{
    return $this->state(fn (array $attributes) => [
        'email_verified_at' => null,
    ]);
}

public function configure(): static
{
    return $this->afterCreating(function (Produk $produk) {
        //
    });
}
public function definition(): array
{
    return [
        'nama' => $this->faker->word(),
        'deskripsi' => $this->faker->sentence(),
        'harga' => $this->faker->numberBetween(10000, 500000),
    ];
}

}