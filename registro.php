<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">  
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Registro</title>
        
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/estilos.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-control="navbar">
                        <span class="sr-only">Este boton cambia la barra de navegacion</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Inicio</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <u1 class="nav navbar-nav">
                        <li><a href="Frutas y verduras.php">Verduras</a></li>
                        <li><a href="Frutas y verduras.php">Frutas</a></li>
                        <li><a href="Setas hierbas.php">Setas</a></li>
                        <li><a href="Setas hierbas.php">Hierbas</a></li>
                        <li><a href="Setas hierbas.php">Delicatessen</a></li>
                    </u1>
                    <u1 class="nav navbar-nav navbar-right">
                        <li><a href="inicioSesion.php">Iniciar Sesion</a></li>
                        <li><a href="registro.php">Registro</a></li>
                    </u1>
            </div>
        </nav>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js.js"></script>
    </body>
</html>



<html>
	<head>
		<title>Formulario</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body>
		<div class="form">
                    <center><h1>Registro fruterias RI</h1></center>
			<form action="guardar.php" method="POST">                              
				<p>Nombre</p>
				<input type="text" name="nombre" placeholder="Nombre" required>
                                <br>
                                <p>Correo</p>
				<input type="text" name="correo" placeholder="Correo" required>
                                <br>
                                <p>Contraseña</p>                              
				<input type="password" name="contraseña" placeholder="Contraseña" required>
				<p>Edad </p>
				<input type="text" name="edad" placeholder="Edad">
				<br>
				<p>Direccion </p>
				<input type="text" name="direccion" placeholder="Direccion" required>
				<br>
                                <p>Telefono</p>
                                <input type="text" name="telefono" placeholder="Telefono" required>
                                <br>
				<br>
				<input type="submit" value="Registrar">
                                <br>
                                <br>
			</form>
                        <form action="index.php" method="POST" style="display:inline">
                            <input type="submit" value="Volver">
                        </form>
		</div>
	</body>
</html>

<style>

    
    

    
    .form{
	position:relative;
	width:500px;
	height:700px;
	padding-left: 20px;
	padding-top: 15px;
	background-color:#32A43E;
	border-radius: 20px;
	margin:auto;
}

input[type=text],[type=edad],[type=direccion],[type=edad],[type=password]{
	width:470px;
	height:35px;
	font: 14px normal normal uppercase helvetica, arial, serif;  
}

input[type=submit]{
	position:relative;
	width:150px;
	height:40px;
	border-radius:20px;
	margin-left: 150px;
	border:0px;
	background-color:#848484;
	font: 14px normal normal uppercase helvetica, arial, serif;
}

p{

	font-size:24px;
}

