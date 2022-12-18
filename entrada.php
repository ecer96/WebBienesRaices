<?php

require 'includes/funciones.php';
incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
       <h1>Decoracion de tu hogar</h1>
     

       <picture>
        <source srcset="build/img/destacada3.webp" type="image*webp">
        <source srcset="build/img/destacada3.jpg" type="image*jpeg">
        <img loading="lazy" src="build/img/destacada3.jpg" alt="imagen de la propiedad">
       </picture>

       <p class="informacion-meta">Escrito el: <span>20/10/2022 </span> por: <span>Admin</span></p>
    
    

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad necessitatibus nemo dolorem repellat eos 
            expedita asperiores eius placeat, recusandae dolores non, veritatis obcaecati, quibusdam itaque rem deserunt fuga consequatur a!</p>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod nihil error hic! Mollitia obcaecati impedit sint, tenetur quae ad porro illum a reiciendis,
             accusamus pariatur deleniti delectus vitae rerum quisquam.</p>

       </div>


    </main>
    <?php incluirTemplate('footer'); ?>





    <script src="./build/js/bundle.js.min.map"></script>
</body>
</html>