<?php 
require __DIR__.'/../config/database.php';
$db=conectarDB();

$query="SELECT * FROM propiedades LIMIT ${limite}";

$resultado=mysqli_query($db,$query);



?>


<div class="contenedor-anuncios">
    <?php while ($propiedadades = mysqli_fetch_assoc($resultado)): ?>
    <div class="anuncio">
    <img loading="lazy" src="/imagenes/<?php echo $propiedadades['imagen']; ?>" alt="anuncio">    


        <div class="contenido-anuncio">
            <h3><?php echo $propiedadades['titulo'];?></h3>
            <p><?php echo $propiedadades['descripcion'];?></p>
            <p class="precio"><?php echo $propiedadades['precio'];?></p>

            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" src="build/img/icono_wc.svg" alt="icono wc" />
                    <p><?php echo $propiedadades['wc'];?></p>
                </li>

                <li>
                    <img class="icono" src="build/img/icono_estacionamiento.svg" alt="estacionamiento" />
                    <p><?php echo $propiedadades['estacionamiento'];?></p>
                </li>

                <li>
                    <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono recamara" />
                    <p><?php echo $propiedadades['habitaciones'];?></p>
                </li>
            </ul>

            <a href="/anuncio.php?id=<?php echo $propiedadades['id']; ?>"  class="boton-amarillo-block">Ver Propiedad</a>
        </div>
       
    </div>
    <?php endwhile; ?>
    
</div>