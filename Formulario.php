

<!--<html>-->
<!---->
<!--<head> Document</head>-->
<!---->
<!--<body>-->
<!--    <form action="validar.php" method="post">-->
<!--        <input type="text" name="nombre" placeholder="nombre">-->
<!--        <input type="email" name="correo" placeholder="correo">-->
<!---->
<!--        <input type="submit" name="submit">-->
<!--    </form>-->
<!--</body>-->
<!---->
<!--</html>-->
<!---->




<html>

<head> Document</head>

<body>
<form action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <input type="text" name="nombre" placeholder="nombre">
    <input type="email" name="correo" placeholder="correo">

    <input type="submit" name="submit">
</form>
</body>

</html>



<?php

    if(isset($_POST['submit'])){
        $nombre =$_POST['nombre'];
        $correo=$_POST['correo'];


        echo "Tu nombre es : $nombre <br/>";
        echo'Validación exitosa';
    }

?>
