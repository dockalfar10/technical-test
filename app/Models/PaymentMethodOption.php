<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PaymentMethodOption extends Model
{
    public static function payOptions()
    {
        return DB::table('payment_methods')->select('*')->get();
    }
}
