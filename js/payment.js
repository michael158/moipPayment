$(document).ready(function(){

    $(document).on('click', '.btn-payment', function () {
        var btn = $(this);
        var href = $(this).attr('data-href');
        var container = $(this).closest('.container-payment');
        $.ajax({
            type: 'POST',
            url: href,
            dataType: 'json',
            beforeSend: function () {
                btn.remove();
                container.html(btn.html('Processando pagamento...'))
            },
            success: function(response){
            },
            error: function(response){
                alert("Error:" + response);
            },
            complete: function (response) {
                container.html(btn.html('Pagar'))
                container.append('<a href="' + response.responseJSON + '" target="_blank" class="payment-link">finalizar pagamento</a>');
                $('.payment-link' , container).click();
            }
        });


    });

});