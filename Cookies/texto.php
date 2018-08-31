<?php
/**
 * Created by PhpStorm.
 * User: ledin
 * Date: 8/18/2018
 * Time: 5:53 PM
 */
if (isset($_COOKIE['font-size'])){
    $tam = $_COOKIE['font-size'];
}else{
    $tam='40px';
}

//$tam=$_COOKIE['font-size'];
?>

<html>
<head>
    <style>
        p{
            font-size: <?php echo $tam; ?>;
        }
    </style>
</head>
<body>
<p>Lore</p>
</body>
</html>
