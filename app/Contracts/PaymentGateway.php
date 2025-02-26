<?php namespace App\Contracts;

interface PaymentGateway
{
    public function charge($amount);
    public function refund($transactionId);
}
