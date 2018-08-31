<?php
/**
 * Created by PhpStorm.
 * User: ledin
 * Date: 6/19/2018
 * Time: 9:23 AM
 */
//validando si un formulario ha sido enviado,útil cuando tenemos solo un formulario.

//if($_SERVER ['REQUEST_METHOD']== 'POST'){
//    echo "se enviaron por POST";
//}else{
//    echo "se enviaron por GET";
//}



//esta forma es útil cuando tenemos dos o mas formularios en una misma página
if (isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $correo =$_POST['correo'];

    if (!empty($nombre)){
        $nombre = trim($nombre);
        $nombre = htmlspecialchars($nombre);
        $nombre =stripcslashes($nombre);

        echo "Tu nombre es : $nombre ";

    }
        echo "Tu correo es: $correo ";

}

?>