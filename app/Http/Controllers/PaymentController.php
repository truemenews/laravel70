<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\PaymentGateway;

class PaymentController extends Controller
{
    protected $paymentGateway;

    public function __construct(PaymentGateway $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function charge()
    {
        if ($charged = $this->paymentGateway->charge(100000))
            var_dump($charged);

        return false;
    }

    public function refund()
    {
        if ($refunded = $this->paymentGateway->refund('transaction123'));
            var_dump($refunded);

        return false;
    }
}
