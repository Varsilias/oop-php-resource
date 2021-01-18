<?php

interface PaymentInterface {

    public function payNow();
}

interface LoginInterface {
    public function loginFirst();

}
// Interfaces
class Paypal implements PaymentInterface, LoginInterface {
    public function payNow() {}
    public function loginFirst() {}
    public function paymentProcess(){
        $this->loginFirst();
        $this->payNow();
    }

}

class BankTransfer implements PaymentInterface, LoginInterface {
    public function payNow() {}
    public function loginFirst() {}
    public function paymentProcess(){
        $this->loginFirst();
        $this->payNow();
    }

}

class Visa implements PaymentInterface {
    public function payNow() {}
    public function paymentProcess(){
        $this->payNow();
    }
}

class Cash implements PaymentInterface {
    public function payNow() {}
    public function paymentProcess(){
        $this->payNow();
    }
}

class BuyProduct {
    public function pay(PaymentInterface $paymentType)
    {
        $paymentType->payNow();
    }

    public function onlinePay()
    {
        # code...
    }
}

$paymentType = new Paypal();
$buyProduct = new BuyProduct();
$buyProduct->pay($paymentType);