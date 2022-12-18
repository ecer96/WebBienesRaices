<?php

require 'includes/funciones.php';
incluirTemplate('header');

?>


    <main class="contenedor seccion">
        <h2>Casas y Depas en Venta</h2>

    
        <?php echo $limite=10;
        include 'includes/template/anuncios.php'
        ?>
        
    </main>
    
    <?php

    incluirTemplate('footer');

    ?>






    <script src="./build/js/bundle.js.min.map"></script>
</body>
</html>