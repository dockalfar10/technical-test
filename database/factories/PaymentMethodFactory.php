<?php

namespace Database\Factories;

use App\Models\PaymentMethod;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentMethodFactory extends Factory
{
    protected $model = PaymentMethod::class;

    public function definition(): array
    {
        return [
            'name' => fake()->randomElement(['Tarjeta de crédito', 'PayPal', 'Transferencia bancaria', 'Tarjeta Débito', 'Pago en efectivo']),
            'description' => fake()->optional()->sentence(),
        ];
    }
}
