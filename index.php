<?php require 'app/model/Product.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Moip - Pagamentos</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="text-center">
        <h1>Sistema de Pagamento MoIp</h1>

        <div class="row">
        <?php foreach (Product::instance()->getProducts() as $product): ?>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="http://placehold.it/350x350" alt="...">
                    <div class="caption">
                        <h3><?php echo $product['name'] ?></h3>
                        <p><?php echo $product['description'] ?></p>
                        <p>Valor: R$ <?php echo $product['value'] ?></p>
                        <p class="container-payment"><a class="btn btn-primary btn-payment" data-href="app/controller/PaymentController.php?id=<?php echo $product['id'] ?>">Pagar</a></p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
        </div>

    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/payment.js"></script>
</body>
</html>