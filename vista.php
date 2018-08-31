


<html style="text-align: center">

<body>
    <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']); ?>" method="post">
        <input type="text" placeholder="Nombre: " name="nombre">
        <br>


        <label for="hombre"> Hombre </label>
        <input type="radio" name="genero" value="hombre" id="hombre">

        <label for="mujer"> Mujer </label>
        <input type="radio" name="genero" value="Mujer" id="mujer">


        <select name="year" id="NOlouso">
            <option value="2000">2000</option>
            <option value="2100">2100</option>
        </select>
        <br>

        <label for="termino"> Acepta los terminos?</label>
        <input type="checkbox" name="terminos" id="terminos" value="ok" >

        <br>
        <input type="submit" value="Enviar">

    </form>
</body>

</html>




<?php

if($_POST){
    echo $_POST['nombre'];

}

?>