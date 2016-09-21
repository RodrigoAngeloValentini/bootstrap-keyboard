<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teclado</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="assets/js/jquery.2.1.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">

    <div class="row">
        <div class="col-xs-12 text-center">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-teclado">
                Open Modal
            </button>

        </div>
    </div>

</div>
</body>
</html>

<!-- Modal -->
<div class="modal fade" id="modal-teclado" tabindex="-1" role="dialog" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">

                <div id="teclado">

                    <div class="teclado-row">
                        <div class="col-xs-12">
                            <input type="password" class="form-control input-lg" id="teclado-input-result" readonly>
                        </div>
                    </div>

                    <div class="teclado-row">
                        <div class="col-xs-4">
                            <button class="btn btn-block btn-info btn-number" data-value="1">1</button>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block btn-info btn-number" data-value="2">2</button>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block btn-info btn-number" data-value="3">3</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="teclado-row">
                        <div class="col-xs-4">
                            <button class="btn btn-block btn-info btn-number" data-value="4">4</button>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block btn-info btn-number" data-value="5">5</button>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block btn-info btn-number" data-value="6">6</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="teclado-row">
                        <div class="col-xs-4">
                            <button class="btn btn-block btn-info btn-number" data-value="7">7</button>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block btn-info btn-number" data-value="8">8</button>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block btn-info btn-number" data-value="9">9</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="teclado-row">
                        <div class="col-xs-4">
                            <button class="btn btn-block btn-info" id="btn-delete">
                                <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block btn-info btn-number" data-value="0">0</button>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block btn-info" id="btn-save">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

<script>
    (function() {
        $(document).on('click','.btn-number',function(){
            var number = $(this).data('value');

            var senha = $("#teclado-input-result").val();
            senha = String(senha) + String(number);
            $("#teclado-input-result").val(senha);
        });

        $(document).on('click','#btn-delete',function(){
            var senha = $("#teclado-input-result").val();

            var tam = senha.length-1;

            if(tam>=0){
                var value = senha.substring(0,tam);
                $("#teclado-input-result").val(value);
            }
        });

        $(document).on('click','#btn-save',function(){
            $("#modal-teclado").modal('hide');
        });

    })();

    $('#modal-teclado').on('shown.bs.modal', function() {
        $("#teclado-input-result").val('');
    })
</script>