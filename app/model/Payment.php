<?php

require_once 'Product.php';
include_once '../autoload.inc.php';

class Payment
{

    // Parametros Básicos //--------------------------------------------------------------------------------------------
    //
    //  token
    //  key:
    //
    // -----------------------------------------------------------------------------------------------------------------

    private $token = 'YPXRVPMO9LTFJNC03TTGEGR82GKWT4ZK';
    private $key = 'VPOV5UK5H3KIJQDLGTBLHQT6V4PSDVNXTM2OTO5E';

    public function makePayment($productId)
    {
        $product = Product::instance()->getProduct($productId);

        $moip = new Moip();
        $moip->setEnvironment('test');
        $moip->setCredential(array(
            'key' =>  $this->key,
            'token' => $this->token
        ));

        $moip->setUniqueID(false);
        $moip->setValue($product['value']);
        $moip->setReason($product['name']);

        $moip->validate('Basic');

        $moip->send();

        echo json_encode($moip->getAnswer()->payment_url);
    }

    

}