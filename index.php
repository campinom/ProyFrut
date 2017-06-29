<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">  
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Inicio</title>
        
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/estilos.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only"></span>
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
        
        <div class="container">
            <div class="jumbotron">
                <h1> Fruterias Ri </h1>
                <p>
                    Ventas de frutas y verduras a domicilio
                </p>
            </div> 
        </div>
        
        <div class="container">
            <div class="row" >
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3>
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Busqueda fruta o verdura
                                    </h3>
                                </div>
                                <div class="panel panel-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Busqueda">
                                </div>
                                    <button class="form-control">Buscar</button>
                                </div>
                            </div>
                         </div>
                    </div>  
                </div>
                <div class="col-md-8">
                    <div class="panel panel-default">
                                <div class="panel-heading">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span> Ahorre tiempo
                                </div>
                                <div class="panel panel-body">
                                    <p> • Servimos al Baix Maresme y a Barcelona</p>
                                    <p> • Para cualquier población fuera de ruta, llamar al móvil: 629707712</p>
                            </div>
                    </div>
            </div>
                <div class="col-md-8">
                    <div class="panel panel-default">
                                <div class="panel-heading">
                                    <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> Con toda seguridad
                                </div>
                                <div class="panel panel-body">
                                    <p> • Le cobramos al entregar la compra para que no tenga que pagar por Internet.</p>
                                    <p> • Su satisfacción está garantizada.</>
                                    <p> • No cobramos gastos de entrega.</p>
                                    <p> • Puede pagar con tarjeta de crédito en la entrega de la compra.</p>
                                </div>
                    </div>
            </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js.js"></script>
    </body>
</html>
