<?php
$servidor="bocanegraangel";
$usuario="root";
$contra="";
$bd="datosV";

$conexion=mysqli_connect($servidor,$usuario,$contra,$bd)or die("<h1>ERROR DE CONEXION</h1>");

$p1=$_POST['p1'];

$ingresar="INSERT INTO Resultados VALUES('$p1')";

$resultado=mysqli_query($conexion,$ingresar)or die("<h1>Error al Insertar datos</h1>");

mysqli_close($conexion);

echo"<h1>Tu registro ha sido registrado</h1>"

?>