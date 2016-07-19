<?php

require_once 'Product.php';

class Payment
{

    // Fazer um post para a url https://desenvolvedor.moip.com.br/sandbox/PagamentoMoIP.do

    // Parametros Básicos //--------------------------------------------------------------------------------------------
    //
    //  id_carteira:	fulano@loja.com.br  (o id da carteira que vai receber o pagamento)
    //  valor:      	4100	            (O valor a ser pago)
    //  nome	        Razão do pagamento  (O nome do pagamento)
    //
    // -----------------------------------------------------------------------------------------------------------------

    private $id = 'michael.dsa41@gmail.com';
    private $url = 'https://desenvolvedor.moip.com.br/sandbox/PagamentoMoIP.do';


    public function makePayment($productId)
    {
        $product = Product::instance()->getProduct($productId);

        $sendProduct = [
            'id_carteira' => $this->id,
            'valor' => $product['value'],
            'nome' => $product['name']
        ];

        $ch = curl_init( $this->url );
        curl_setopt( $ch, CURLOPT_POST, 1);
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $sendProduct);
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt( $ch, CURLOPT_HEADER, 0);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec( $ch );

        echo $response;
    }

    

}