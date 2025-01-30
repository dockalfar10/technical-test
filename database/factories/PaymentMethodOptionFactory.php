<?php

namespace Database\Factories;

use App\Models\PaymentMethodOption;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentMethodOptionFactory extends Factory
{
    protected $model = PaymentMethodOption::class;
    
    public function definition(): array
    {

        return [
            'key' => $this->faker->word,
            'value' => $this->faker->word,
        ];
    }
}
