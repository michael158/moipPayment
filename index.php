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
        <h1>Sistema de Pagamento MoIp - Michael Douglas </h1>

        <img src="https://moip.com.br/wp-content/uploads/2015/07/logo-moip1.png" alt>
    </div>

    <h3>Produtos</h3>
    <div class="row text-center" style="margin-top: 30px">
        <?php foreach (Product::instance()->getProducts() as $product): ?>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="<?php echo $product['image'] ?>" alt="<?php echo $product['description'] ?>">
                    <div class="caption">
                        <h3><?php echo $product['name'] ?></h3>
                        <p><?php echo $product['description'] ?></p>
                        <p style="color: green">Valor: R$ <?php echo $product['value'] ?></p>
                        <p class="container-payment"><a class="btn btn-primary"
                                                        href="app/controller/PaymentController.php?id=<?php echo $product['id'] ?>">Comprar</a>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>

    <div class="row text-center">
        <p> Copyright &copy; <a href="http://michaeldeveloper.com.br/">Michael Douglas.</a> Todos os Direitos Reservados - <?php echo date('Y') ?></p>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/payment.js"></script>
</body>
</html>