<?php

require 'includes/funciones.php';
incluirTemplate('header');
?>


    <main class="contenedor seccion">
        <h1>Contacto</h1>


        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img  loading="lazy" src="build/img//destacada3.jpg" alt="imagen contacto">
        </picture>

        <h2>Llene el formulario de contacto</h2>

        <form action="" class="formulario">
            <fieldset>
                <legend>Informacion Personal</legend>
                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Escribe tu Nombre" id="nombre">

                <label for="email">E-mail</label>
                <input type="email" placeholder="Escribe tu E-mail" id="email">

                <label for="telefono">Telefono</label>
                <input type="tel" placeholder="Escribe tu Telefono" id="telefono">

                
                <label for="mensaje">Mensaje</label>
                <textarea  id="mensaje"></textarea>

            </fieldset>

            <fieldset>
                <legend>Informacion Sobre la Propiedad</legend>
                <label for="opciones">Vende o Compra</label>
                <select id="opciones">
                    <option value="" disabled selected>--Seleccione--</option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>

                <label for="presupuesto">Precio o Presupuesto</label>
                <input type="number" placeholder="Escribe tu Precio" id="email">
            </fieldset>

            <fieldset>
                <legend></legend>
                <P>Como desea ser contactado</P>
                <div class="contacto">
                    <label for="contactar-telefono">Telefono</label>
                    <input name="contacto" type="radio" value="telefono" id="contactar-telefono">

                    <label for="contactar-email">Email</label>
                    <input name="contacto" type="radio" value="email" id="contactar-email">
                </div>

                <p>Si Eligio Telefono,Favor de Escoger Fecha y Hora de Contacto</p>

                <label for="fecha">Fecha</label>
                <input type="date"  id="fecha">
                
                <label for="hora">Hora</label>
                <input type="time"  id="hora" min="09:00" max="18:00">
            </fieldset>

            <input type="submit" value="Enviar" class="boton-verde">


        </form>
    </main>
    
    <?php incluirTemplate('footer'); ?>




    <script src="./build/js/bundle.js.min.map"></script>
</body>
</html>