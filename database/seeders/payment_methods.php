<?php

namespace Database\Seeders;

use Database\Factories\PaymentMethodFactory;
use Illuminate\Database\Seeder;

class payment_methods extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaymentMethodFactory::new()->count(10)->create();
    }
}
