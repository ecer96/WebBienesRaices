<?php

require 'includes/funciones.php';
$inicio = true;
incluirTemplate('header', $inicio = true);
?>




    <main class="contenedor seccion">
        <h1>Mas Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Quisquam reiciendis voluptas quaerat, corporis magni consequuntur quasi
                     possimus dolor cum facere sint quibusdam? Voluptatum 
                    temporibus provident fugiat libero cupiditate, at neque!</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio">
                <h3>Dinero</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Quisquam reiciendis voluptas quaerat, corporis magni consequuntur quasi
                     possimus dolor cum facere sint quibusdam? Voluptatum 
                    temporibus provident fugiat libero cupiditate, at neque!</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Quisquam reiciendis voluptas quaerat, corporis magni consequuntur quasi
                     possimus dolor cum facere sint quibusdam? Voluptatum 
                    temporibus provident fugiat libero cupiditate, at neque!</p>
            </div>
        </div>
    </main>

    <section class="">
        <h2>Casas y Depas en Venta</h2>

   
        <?php
        $limite = 3;
        include 'includes/template/anuncios.php';
        ?>


        <div class="alinear-derecha">
            <a href="anuncios.php" class="boton-verde">Ver Todas</a>
        </div>
    </section>
 

    <section class="imagen-contacto">
        <h2>Encuentra La Casa de Tu Sueño</h2>
        <p>LLena el Formulario de Contacto y un asesor se pondra en contacto contigo a la brevedad</p>
        <a href="" class="boton-amarillo">Contactanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>

            <article class="entrada-blog">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
                </picture>

                            
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el <span>12/12/2022</span>por: <span>Admin</span></p>

                        <p>consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero</p>
                    </a>
                </div>

            </article>



            <article class="entrada-blog">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="Texto Entrada Blog">
                </picture>

                            
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Guia para la decoracion de tu hogar</h4>
                        <p class="informacion-meta">Escrito el <span>12/12/2022</span>por: <span>Admin</span></p>

                        <p>Maximiza el espacio de tu casa con esta guia. Aprende a combinar muebles y colores para darle vida a tu espacio.</p>
                    </a>
                </div>

            </article>
        </section>


        <section class="testimoniales">
            <h3>testimoniales</h3>

            <div class="testimonial">
                <blockquote>El personal se comporto excelente, my buena atencion, lo recomendamos.</blockquote>
                <p>Edwin Cervantes</p>
            </div>
        </section>
    </div>


    <?php incluirTemplate('footer'); ?>




    <script src="./build/js/bundle.js.min.map"></script>
    </body>
    </html>