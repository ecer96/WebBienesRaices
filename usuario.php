<?php

require './includes/config/database.php';
$db=conectarDB();

//crear email y pass
$email="correo@gmail.com";
$password="123456";
$passwordHash=password_hash($password,PASSWORD_BCRYPT);

//query para crear usuario
$query="INSERT INTO usuarios(email,password)VALUES('${email}','${passwordHash}');";



$respuesta=mysqli_query($db,$query);


//agregar ala db