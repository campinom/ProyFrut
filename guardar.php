<?php
	//conectamos Con el servidor
	$conectar=@mysql_connect('localhost','root','');
	//verificamos la conexion
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	}else{

		$base=mysql_select_db('registro');
		if(!$base){
			echo "No Se Encontro La Base De Datos";			
		}
	}
	//recuperar las variables
	$nombre=$_POST['nombre'];
        $correo=$_POST['correo'];
        $password=$_POST['password'];
	$edad=$_POST['edad'];        
	$direccion=$_POST['direccion'];
        $telefono=$_POST['telefono'];
	//hacemos la sentencia de sql
	$sql="INSERT INTO datos VALUES('$nombre',
                                       '$correo',  
                                       '$password,
                                       '$edad',
				       '$direccion',
                                       '$telefono')";
	//ejecutamos la sentencia de sql
	$ejecutar=mysql_query($sql);
	//verificamos la ejecucion
	if(!$ejecutar){
		echo "Hubo Algun Error";
	}else{
		echo "Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
	}
?>