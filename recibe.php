<?php
/**
 * Created by PhpStorm.
 * User: ledin
 * Date: 6/17/2018
 * Time: 10:30 PM
 */

//print_r($_POST);
//

//+-+-++-+-+-+-+--metodo POST
if(!$_POST){
    header('Location: http://localhost/Aprendiendo/vista.php');


}

$nomb =$_POST['nombre'];
$gen = $_POST['genero'];
$ye =$_POST['year'];
$termin = $_POST['terminos'];

echo 'Hola '.$nomb.' eres '.$gen;
//
//


//Metodo get
//
//$nombre = $_GET['nombre'];
//echo htmlspecialchars($nombre);


////print_r($_GET);
//
//if(!$_GET){
//    header('Location: http://localhost/Aprendiendo/vista.php');
//
//}
//
//$nomb =$_GET['nombre'];
//$gen = $_GET['genero'];
//$year =$_GET['year'];
//$termin = $_GET['terminos'];
//
//echo 'Hola '.$nomb.' eres '.$gen;
//



?>