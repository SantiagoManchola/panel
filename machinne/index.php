<html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="assets/img/metronic.ico">
	<title>C4sh S1st3m 1.4 AS Edition</title>
	<link href="src/css/pluto-fonts.css" rel="stylesheet">
	<link href="src/css/layout.css" rel="stylesheet">
	<script type="text/javascript" src="src/js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="src/js/run.js"></script>
	<style type="text/css">
		section {
			width: 100%;
			text-align: center;
		}

		.fondo {
			width: 100%; /* Esto hará que la imagen ocupe el 100% del ancho de su contenedor (section) */
			margin-top: 10px; /* Ajusta el valor según sea necesario */
		}
	</style>
</head>
<body>
	<table border="0" cellpadding="0" cellspacing="0" class="inicio">
		<tr>
			<td class="portada">
				<div class="fondo-incial"></div>
			</td>
			<td class="login" align="center">
				<div style="max-width: 600px;">
					<input name="pantallafull" id="pantallafull" type="hidden" value="1" />
					<div class="input-container">
						<input name="inp-usuario" id="inp-usuario" type="text" placeholder="Escribe tu Usuario" />
						<label for="inp-usuario">Usuario</label>
					</div>
					<br>
					<div class="input-container">
						<input name="inp-pass" id="inp-pass" type="password" placeholder="Escribe tu Contraseña" />
						<label for="inp-pass">Contraseña</label>
					</div>
					<br>
					<button class="btn btn-azul" type="button" id="btn-ingresar">Ingresar</button>
					<br>
				</div>
			</td>
		</tr>
	</table>

	<script type="text/javascript">
		$(document).ready(function() {
			$("#btn-ingresar").click(function(evento) {
				if ($("#inp-usuario").val().length > 0) {
					if ($("#inp-pass").val().length > 0) {
						iniciar_sesion($("#inp-usuario").val(), $("#inp-pass").val());
					} else {
						alert("Ingrese su contraseña");
					}
				} else {
					alert("Ingrese un nombre de usuario");
				}
			});
		});
	</script>
</body>
</html>
