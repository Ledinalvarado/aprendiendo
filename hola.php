<!---->
<!---->
<?php
//    echo '+++++++++Hola soy Ledin++++++++++';
//    // este es un comentario
///*
// para hacer comentarios
// */
//
//?>
<!---->
<!---->
<!--<!Doctype html>-->
<!--<html>-->
<!---->
<!--</html>-->
<!---->
<!---->
<!---->
<!---->
<?php
//variables
//$nombre = 'Ledin';
//
//echo " Hola $nombre  ";
//echo '    hola '. $nombre;
//?>
<!---->
<!---->
<!---->
<?php
//  CONSTANTES
////lo mejor es nombrar las constantes en mayúsculas
//define('Pi', 3.14);
//
//echo Pi;
//
//?>
<!---->
<!---->
<?php
//arreglos
//
//$semana = array('lunes','martes','miercoles','jueves','viernes','sabado','domingo');
//echo $semana[3];
//
//?>
<!---->


<?php
////Arreglos asociativos
//
//$informacion = array('Nombre' => 'Ledin' ,'Apellido' => 'Alvarado' ,'Edad' => '20' ,'Direccion' =>'Siempre Viva' );
//
//echo 'Nombre: ' .$informacion['Nombre'] . '<br />' ;
//echo 'Apellido: '. $informacion['Apellido'] . '<br/>' ;
//echo  'Edad: '.$informacion['Edad'] . '<br/>';
//echo  'Direccion: '.$informacion['Direccion'] . '<br/>' ;
//
//?>



<?php
//////Arreglos Multidimensionales
//
//$amigos = array(array('Ledin',20,array('alvarado',18,100),array('led',97631006)),//==>aqui comienza el [1]del array original
//    array('Gustavo',19),array('pasamos'));
//
//echo $amigos[0][2][2].'<br/>'; //de esta manera estoy accediendo primero al indice [0] y tambien le pido el índice[1] que sería el '18'
//echo $amigos[1][0]."<br/>";
//echo $amigos[2][0];
//
//?>

<!---->
<?php
//////Algunas funciones para trabajar con arreglos
////
//$amigos = array(array('Ledin',20,array('alvarado'),array('led',97631006)),
//    array('Gustavo',19));
//
//echo count($amigos[0][2]) .'<br/>'; //aquí estoy contando cuantos indices tiene el índice 2 del índice 0, en este caso sería solo 1 = 'alvarado'
//echo $amigos[0][2][0]."<br/>";
//echo count($amigos).'<br/>';
//
//
//$meses = array('enero','febrero','marzo','abril','mayo','junio',
//    'julio','agosto','septiembre','octubre','noviembre','diciembre');
//
//$medio_mes = (count($meses) / 2) -1; //lo que hago es un conteo total de arreglo $meses y esa cantidad la divido entre 2 que seria 6 pero como se empieza a contar desde 0 le resto 1 para que quede en la posicion 5 que sería junio
//echo $meses[$medio_mes];
//
//?>
<!---->
<!---->
<!---->







<!---->
<?php
////uso de FOREACH
//
//$meses = array('enero','febrero','marzo','abril','mayo','junio',
//    'julio','agosto','septiembre','octubre','noviembre','diciembre');
//
//?>
<!---->
<!---->
<!---->
<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head >-->
<!--    <meta charset="UTF-8">-->
<!--    <title> Meses del Año</title>-->
<!--</head>-->
<!---->
<!--<body>-->
<!--    <h1>Meses del Año</h1>-->
<!--    <ul>-->
<!--                --><?php
//                    foreach ($meses as $mes){
//                           echo '<li>' . $mes .'</li>';
//                    }
//                ?>
<!---->
<!--    </ul>-->
<!--</body>-->
<!---->
<!--</html>-->



<!---->
<?php
////uso de ciclos
//
//$meses = array('enero','febrero','marzo','abril','mayo','junio',
//    'julio','agosto','septiembre','octubre','noviembre','diciembre');
//
//$numeros = array(1,45,8,3,254,25,100);
//
////sort($meses); // ordena de A-Z
////rsort($meses);
//
//rsort($numeros);
//
//?>
<!---->
<!---->
<!---->
<!---->
<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head >-->
<!--    <meta charset="UTF-8">-->
<!--    <title> Meses del Año</title>-->
<!--</head>-->
<!---->
<!--<body>-->
<!--    <h1>Numeros</h1>-->
<!--    <ul>-->
<!--                --><?php
//                    foreach ($numeros as $numero){
//                           echo '<li>' . $numero .'</li>';
//                    }
//                ?>
<!---->
<!--    </ul>-->
<!--</body>-->
<!---->
<!--</html>-->




<!---->
<!---->
<?php
//
//$edad = 18;
//$nombre = 'Ledin';
//if($edad >= 17 and $nombre = 'Ledin'){
//    echo '<h1/>'.'Es mayor o igual'.'<h1/>';
//}
//
//?>





<?php
////Switch
//
//$mes = 'feb';
//
//switch ($mes){
//    case 'Diciembre':
//        echo ' feliz navidad';
//    break;
//    case 'Enero':
//        echo 'happy new year';
//    break;
//
//    default:
//        echo 'en este mes no se celebra nada';
//}
//
//?>




<!---->
<?php
////acortar condicional if
//$edad = (isset($edad)) ? $edad : 'Elusuario no ha ingresado su edad' ;
//echo 'edad:'. $edad; //para verificar si una variable tiene un valor o esta vacío
//
//?>



<!---->
<?php
////ciclo for
//
//for ($i = 1; $i <= 100 ; $i = $i + 5){
//    echo $i,'<br/>';
//    
//}
//
//?>
<!---->


<!---->
<?php
////ciclo while
//
//$x=1;
//
//while($x <= 10){  // se repite mientras la condicion sea verdarera  0
//    echo $x.'<br/>';
//    $x++;
//}
//?>
<!---->
<!---->




<?php
////recorrer arreglos con for y while
//
//$meses = array('enero','febrero','marzo','abril','mayo','junio',
//    'julio','agosto','septiembre','octubre','noviembre','diciembre');
//
////for ($i = 0; $i < count($meses); $i++){
////    echo $meses[$i],'<br/>';
////}
//
//
//$contador = 2;
//
//while ($contador< count($meses)){
//    echo $meses[$contador].'<br/>';
//
//    $contador++;
//}


?>

<!---->
<?php
////permite saber que version de XAMPP estoy utilizando
//
//phpinfo();
//
//?>






<?php
//
//
////Sentencias break y continue
//
//$paises = array(
//        'Honduras','España','Colombia','Suiza',
//
//);
//
////
////foreach ($paises as $pais){
////    echo $pais.'<br/>';
////
////    if($pais == 'Colombia'){
////        break;
////    }
////}
//
//echo 'PAISES AMERICANOS'.'<br/>';
//
//foreach ($paises as $pais){
//     if($pais == 'Suiza'){
//        continue;
//     }
//
//     echo $pais. '<br/>';
//}
//
//?>



<!---->
<?php
////var_dump
////  permite saber el tipo de dato y su informacion
//
///* etiqueta <pre> </pre>
//    sirve para mostrar el codigo fuente*/
//
//
//
//$nombre = 'ledin';
//$numero =  '100';
//$arreglo = array('ledin','gustavo');
//$arreglo_asociativo = array('nombre' => 'ledin', 'edad' =>'100');
//$booleano = false;
//
//echo '<pre>';
//var_dump($booleano);
//echo '</pre>';
//
//
//?>




<!---->
<?php
////print_r
////a igual que var_dump muestra la informacino es solo que print_r no lo desglosa
//
//$nombres= array('nombre'=>'ledin');
//
//print_r($nombres);
//?>



<?php
////funciones
//$nombre='ledin';
//function saludo($nombre){
//    echo "saludo, $nombre";
//}
//
//saludo($nombre);

//
//function suma($n1,$n2){
//    $sumar = $n1 + $n2;
//    return $sumar;
//
//}
//
//$sumar=suma(1,2);
//
//echo $sumar;



?>






<?php
//$nombre ="Ledeini";
////muestra la posicion de un caracter , pero muestra el primero que encuentra
////echo strpos($nombre,"i");
////echo strtoupper($nombre);
////echo strtolower($nombre);
////include  'vista.php';
//require 'vista.php';
//
//?>