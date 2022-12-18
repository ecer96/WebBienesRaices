<?php

require 'includes/funciones.php';
incluirTemplate('header');
?>


    <main class="contenedor seccion">
        <h1>Nuestro Blog</h1>

        
        <article class="entrada-blog">
            <picture>
                <source srcset="build/img/blog1.webp" type="image/webp">
                <source srcset="build/img/blog1.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
            </picture>

                        
            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Guia para la decoracion de tu hogar</h4>
                    <p>Escrito el <span>12/12/2022</span>por: <span>Admin</span></p>

                    <p>Maximiza el espacio de tu casa con esta guia. Aprende a combinar muebles y colores para darle vida a tu espacio.</p>
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
                    <p>Escrito el <span>12/12/2022</span>por: <span>Admin</span></p>

                    <p>Maximiza el espacio de tu casa con esta guia. Aprende a combinar muebles y colores para darle vida a tu espacio.</p>
                </a>
            </div>

        </article>

        
        <article class="entrada-blog">
            <picture>
                <source srcset="build/img/blog3.webp" type="image/webp">
                <source srcset="build/img/blog3.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/blog3.jpg" alt="Texto Entrada Blog">
            </picture>

                        
            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Guia para la decoracion de tu hogar</h4>
                    <p class="informacion-meta">Escrito el <span>12/12/2022</span>por: <span>Admin</span></p>

                    <p>Maximiza el espacio de tu casa con esta guia. Aprende a combinar muebles y colores para darle vida a tu espacio.</p>
                </a>
            </div>

        </article>

        
        <article class="entrada-blog">
            <picture>
                <source srcset="build/img/blog4.webp" type="image/webp">
                <source srcset="build/img/blog4.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/blog4.jpg" alt="Texto Entrada Blog">
            </picture>

                        
            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Guia para la decoracion de tu hogar</h4>
                    <p class="informacion-meta">Escrito el <span>12/12/2022</span>por: <span>Admin</span></p>

                    <p>Maximiza el espacio de tu casa con esta guia. Aprende a combinar muebles y colores para darle vida a tu espacio.</p>
                </a>
            </div>

        </article>
    </main>

    <?php incluirTemplate('footer'); ?>



    <script src="./build/js/bundle.js.min.map"></script>
</body>
</html>