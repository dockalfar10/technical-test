<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use App\Models\PaymentMethodOption;
use Illuminate\Database\Seeder;

class PaymentMethodOptionsTableSeeder extends Seeder
{
    public function run(): void
    {
        PaymentMethod::all()->each(function (PaymentMethod $paymentMethod) {
            PaymentMethodOption::factory(rand(1, 5))->create([
                'payment_method_id' => $paymentMethod->id,
            ]);
        });
    }
}
