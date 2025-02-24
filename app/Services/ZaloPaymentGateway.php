<?php namespace App\Services;

use App\Contracts\PaymentGateway;

class ZaloPaymentGateway implements PaymentGateway
{
    public function charge($amount)
    {
        return (object) [
            'provider' => 'Zalo',
            'service' => 'charge',
            'amount' => number_format($amount) . ' vnd',
            'fee' => '0 vnd',
            'message' => 'Success'
        ];
    }

    public function refund($transactionId)
    {
        return (object) [
            'provider' => 'Zalo',
            'service' => 'charge',
            'amount' => '100.000 vnd',
            'fee' => '0 vnd',
            'message' => 'Success'
        ];
    }
}