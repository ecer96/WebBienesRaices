<?php

$id=$_GET['id'];
$id=filter_var($id,FILTER_VALIDATE_INT);

if(!$id){
    header('Location:/');
}

//importar db
require './includes/config/database.php';
$db = conectarDB();
//query
$query = "SELECT * FROM propiedades  WHERE id=${id}";

//consulta a db
$resultado = mysqli_query($db, $query);

if($resultado->num_rows===0){
    header('Location:/');
}

$propiedades=mysqli_fetch_assoc($resultado);



require 'includes/funciones.php';
incluirTemplate('header');

?>

    <main class="contenedor seccion contenido-centrado">
       <h1><?php echo $propiedades['titulo'];  ?></h1>

    
        <img loading="lazy" src="./imagenes/<?php echo $propiedades['imagen'];?>" alt="imagen de la propiedad">
       

       <div class="resumen-propiedad">
        <p class="precio">$<?php echo $propiedades['precio']; ?></p>
        
        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono" src="build/img/icono_wc.svg" alt="icono wc">
                <p><?php echo $propiedades['wc']; ?></p>
            </li>

            <li>
                <img class="icono" src="build/img/icono_estacionamiento.svg" alt="estacionamiento">
                <p><?php echo $propiedades['estacionamiento']; ?></p>
            </li>

            <li>
                <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono recamara">
                <p><?php echo $propiedades['habitaciones']; ?></p>
            </li>

        </ul>

        <?php echo $propiedades['descripcion']; ?>

       </div>


    </main>

    <?php
        mysqli_close($db);
        incluirTemplate('footer');
    

    ?>




<script src="./build/js/bundle.js.min.map"></script>
</body>
</html>