<?php namespace App\Services;

use App\Contracts\PaymentGateway;

class MomoPaymentGateway implements PaymentGateway
{
    public function charge($amount)
    {
        return (object) [
            'provider' => 'Momo',
            'service' => 'charge',
            'amount' => number_format($amount + 1000) . ' vnd',
            'fee' => '1.000 vnd',
            'message' => 'Success'
        ];
    }

    public function refund($transactionId)
    {
        return (object) [
            'provider' => 'Momo',
            'service' => 'charge',
            'amount' => '99.000 vnd',
            'fee' => '1.000 vnd',
            'message' => 'Success'
        ];
    }
}