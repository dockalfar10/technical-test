<?php

namespace Database\Factories;

use App\Models\PaymentMethodOption;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PaymentMethodOption>
 */
class PaymentMethodOptionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'payment_method_id' => PaymentMethodOption::payOptions()->randomElement()->id,
            'key' => $this->ramdomElement(['Comisión', 'Cargo', 'Descuento', 'Impuesto']),
            'value' => $this->faker->randomFloat(2, 0, 50),
        ];
    }
}
