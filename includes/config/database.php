<?php

function conectarDB():mysqli{
    $db=mysqli_connect('localhost','root','2217055','bienesraices_crud');

    if(!$db){
        echo "Error no se Pudo Conectar";
        exit;
    }
    return $db;
    
}