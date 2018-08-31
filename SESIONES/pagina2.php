<?php
/**
 * Created by PhpStorm.
 * User: ledin
 * Date: 8/18/2018
 * Time: 5:32 PM
 */


session_start();



if ($_SESSION){
    $nombre=$_SESSION['nombre'];
    echo "<h1> hola, $nombre</h1>";

}else{

header('Location:index.php');
    echo "No has iniciado sesion";
}
?>




<html>
<head>

</head>

<body>

<a href="cerrar.php"> cerrar sesion</a>
</body>
</html>
