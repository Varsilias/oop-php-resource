<?php

abstract class Visa {
    public function visaPayment()
    {
        return 'Perform a transaction or payment';
    }
    abstract public function getPayment();
}