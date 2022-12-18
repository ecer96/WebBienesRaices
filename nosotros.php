<?php

require 'includes/funciones.php';
incluirTemplate('header');
?>


    <main class="contenedor seccion">
        <h1>Conoce Sobre Nosotros</h1>
        <div class="contenido-nosotros">
            <div class="image">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
              <blockquote>
                25 años de experiencia
              </blockquote>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nam iusto facere praesentium 
                distinctio dolorem est modi minus. Quod, dolor. Voluptates ipsa adipisci quaerat, delectus repellat at error iusto fuga.
                </p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non itaque illum deserunt fuga, 
                    libero adipisci magnam magni debitis officia aspernatur recusandae perferendis, voluptatum beatae! Porro autem natus fuga doloribus dolor.
                </p>

            </div>
        </div>
    </main>



    <section class="contenedor seccion">
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
    </section   >


    <?php incluirTemplate('footer'); ?>



    <script src="./build/js/bundle.js.min.map"></script>
</body>
</html>