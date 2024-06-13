<?php 
session_start(); 
require('../include/setings.php');
if (!isset($_SESSION["usr-new"])) 
	header("Location: ../");
?>
<head>
	<meta charset="UTF-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="shortcut icon" href="../assets/img/metronic.ico">
	<title>Multiuniverso Monitor Movimientos </title>
	<link href="../src/css/pluto-fonts.css" rel="stylesheet">
	<link href="../src/css/layout.css" rel="stylesheet">	
	<script type="text/javascript" src="../src/js/jquery-3.6.0.min.js"></script>	
	<script type="text/javascript" src="../src/js/run.js"></script>
	<script type="text/javascript" src="eliminar_registros.js"></script>
  <style>
      /* Estilo personalizado para el botón de eliminar */
      #eliminarBtnContainer button {
          background-color: #FF0000; /* Fondo rojo */
          color: #000000; /* Texto negro */
          padding: 4px 4px; /* Ajusta el relleno según sea necesario */
          border: 1px solid #000000; /* Borde negro */
          border-radius: 10px; /* Esquinas redondeadas */
          font-size: 15px; /* Tamaño de fuente */
          cursor: pointer;
      }
            body {
          background-image: url('../assets/img/fondo1-1024x459.png');
          background-size: cover;
          background-repeat: no-repeat;
          background-position: center;
          margin: 0;
          padding: 0;
          font-family: Arial, sans-serif;
      }
          .container {
          width: 100%;
          max-width: 1200px;
          margin: 0 auto;
          padding: 20px;
      }
  </style>

  
</head>
  
<body bgcolor="##000000">
	
		
			
		</div>
    
	</div>
  
	  <center>
  <div id="eliminarBtnContainer" style="position: center; top: 10px;">
    <button id="eliminarRegistrosBtn">Eliminar Registros</button>
  </div>
  <div style="width: 100%; text-align: center;">
  
	<div class="items-trans">		
		<?php get_items(); ?>		
	</div>
	<audio id="snd">
		<source src="../assets/snd/timbre.mp3" type="audio/mpeg">
	</audio>
	<audio id="sndOTP">
		<source src="../assets/snd/electrico.mp3" type="audio/mpeg">
  </body>
      <script type="text/javascript" src="../src/js/ready.js"></script>
      </script>
  </html>