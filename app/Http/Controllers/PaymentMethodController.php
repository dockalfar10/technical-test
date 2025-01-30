<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    public function index(Request $request)
    {
        $page = $request->query('page', 1);
        $perPage = 2;

        $paymentMethods = PaymentMethod::withCount('options')->paginate($perPage, ['*'], 'page', $page);

        return response()->json($paymentMethods);
    }

    public function show($id)
    {
        $paymentMethod = PaymentMethod::with('options:id,key,value')
            ->find($id);

        if (!$paymentMethod) {
            return response()->json(['message' => 'Método de pago no encontrado'], 404);
        }

        return response()->json($paymentMethod);
    }
}
