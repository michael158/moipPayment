<?php
require '../model/Payment.php';

try {
    $payment = new Payment();
    $payment->makePayment($_GET['id']);
} catch (Exception $e) {
    echo $e;
}
