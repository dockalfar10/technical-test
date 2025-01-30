<?php

namespace Database\Seeders;

use Database\Factories\PaymentMethodOptionsFactory;
use Illuminate\Database\Seeder;

class payment_method_options extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaymentMethodOptionsFactory::new()->count(5)->create();
    }
}
