<?php

require '../../includes/funciones.php';

$auth=estaAutenticado();

if(!$auth){
    header("location:/");
}



//validacion de id actualizar

$id=$_GET["id"];
$id=filter_var($id,FILTER_VALIDATE_INT);

if(!$id){
    header('Location:/admin?resultado=1');
}



//Db
require '../../includes/config/database.php';
$db=conectarDB();


$consulta="SELECT * FROM propiedades WHERE id=${id}";
$resultado=mysqli_query($db,$consulta);
$propiedad=mysqli_fetch_assoc($resultado);



$consulta="SELECT * FROM vendedores";
$resultado=mysqli_query($db,$consulta);

//Arreglo con mensajes de error:
$errores=[];

$titulo=$propiedad['titulo'];
$precio=$propiedad['precio'];
$descripcion=$propiedad['descripcion'];
$habitaciones=$propiedad['habitaciones'];
$wc=$propiedad['wc'];
$estacionamiento=$propiedad['estacionamiento'];
$vendedorId=$propiedad['id'];
$imagenPropiedad=$propiedad['imagen'];
$creado="";

//Ejecutar el codigo despues de validacion

if($_SERVER['REQUEST_METHOD']==='POST'){
//     echo '<pre>';
//     var_dump($_POST);
//     echo '</pre>';




    //obteniendo Valores de Post

    $titulo=mysqli_real_escape_string($db, $_POST['titulo']);
    $precio=mysqli_real_escape_string($db,$_POST['precio']);
    $descripcion=mysqli_real_escape_string($db,$_POST['descripcion']);
    $habitaciones=mysqli_real_escape_string($db,$_POST['habitaciones']);
    $wc=mysqli_real_escape_string($db,$_POST['wc']);
    $estacionamiento=mysqli_real_escape_string($db, $_POST['estacionamiento']);
    $vendedorId=mysqli_real_escape_string($db,$_POST['vendedor']);
    $imagen=$_FILES['imagen'];


    if(!$titulo){
        $errores[]="Debes añadir un Titulo de Propiedad";

    }

    
    if(!$precio){
        $errores[]="Debes añadir un Precio";

    }

    
    if(strlen($descripcion)<30){
        $errores[]="La Descripcion es Obligatoria y debe contener al menos 50 caracteres";

    }

    
    if(!$habitaciones){
        $errores[]="Debes añadir un Numero de Habitaciones";

    }

    
    if(!$wc){
        $errores[]="Debes añadir un Numero de Baños";

    }

    
    if(!$estacionamiento){
        $errores[]="Debes añadir un Numero de Estacionamientos";

    }

    
    if(!$vendedorId){
        $errores[]="Elige un vendedor";

    }

 
    //1mb
    $medida=1000*1000;

    if($imagen['size']>$medida){
        $errores[]='La imagen es muy pesada';
    }

    // echo '<pre>';
    // var_dump($errores);
    // echo '</pre>';

    //revisar que no exista algun error
    if(empty($errores)){
 
        // //crear carpeta
         $carpetaImagenes='../../imagenes';
        // //revisamos si existe la carpeta , si no se crea
         if(!is_dir($carpetaImagenes)){
         mkdir($carpetaImagenes);
         }

         $nombreImagen='';


         if($imagen['name']){
            
            unlink($carpetaImagenes.$propiedad['imagen']);  

            //generar nombre unico para imagenes
         $nombreImagen=md5(uniqid(rand(),true));


         //subir la imagen
         move_uploaded_file($imagen['tmp_name'],$carpetaImagenes."/".$nombreImagen);
         }else{
            $nombreImagen=$propiedad['imagen'];
         }
        
        



            //insertar en Db
         $query="UPDATE propiedades SET titulo='${titulo}',precio='${precio}',imagen='${nombreImagen}',descripcion='${descripcion}',habitaciones=${habitaciones},
         wc=${wc},estacionamiento=${estacionamiento},vendedores_id=${vendedorId} WHERE id=${id}" ; 

        
   
  
          //echo $query;
         $resultado=mysqli_query($db,$query);


        if($resultado){
          header('Location:/admin?resultado=2');
         }


    }




}




incluirTemplate('header');

?>


    <main class="contenedor seccion">
        <h1>Actualizar Propiedad</h1>



        <a href="/admin" class="boton boton-verde">Volver</a>
        <?php foreach($errores as $error):?>
        <div class="alert error">
            <?php echo $error; ?>
        </div>
        <?php endforeach ?>





        <form action="" class="formulario" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>informacion General</legend>
                <label for="titulo">Titulo</label>
                <input type="text" id="titulo" placeholder="Propiedad" name="titulo" value="<?php echo $titulo; ?>">

                <label for="precio">Precio</label>
                <input type="number" id="precio" placeholder="Precio Propiedad" name="precio" value="<?php echo $precio; ?>">

                <label for="imagen">Imagen</label>
                <input type="file"  id="imagen" accept="image/jpeg, image/png" name="imagen">
               
                <img src="/imagenes/<?php echo $imagenPropiedad ?>" alt="">
                

                <label for="Descripcion">
                    <textarea name="descripcion" id="descripcion" cols="30" rows="10">
                    <?php echo $descripcion; ?>
                    </textarea>

                </label>


            </fieldset>

            <fieldset>
                <legend>informacion de La Propiedad</legend>

                <label for="habitaciones">Numero De Habitaciones</label>
                <input type="number" id="habitaciones" placeholder="No.Habitaciones" min="1" name="habitaciones" value="<?php echo $habitaciones; ?>">

                <label for="wc">Numero De Baños</label>
                <input type="number" id="wc" placeholder="No.Baños" min="1" name="wc" value="<?php echo $wc; ?>">

                <label for="estacionamiento">Numero De Estacionamientos</label>
                <input type="number" id="estacionamiento" placeholder="No.Estacionamientos" min="1" name="estacionamiento" value="<?php echo $estacionamiento; ?>">



            </fieldset>


            <fieldset>
                <legend>Vendedor</legend>

                <select name="vendedor">
                    <option value="">--Seleccione--</option>
                    <?php while($vendedor=mysqli_fetch_assoc($resultado)): ?>
                        <option  <?php echo $vendedorId===$vendedor['id'] ? 'selected' :'';  ?> value="<?php echo $vendedor['id']; ?>">
                            <?php echo $vendedor['nombre']." ".$vendedor['apellido']; ?>
                    </option>
                     <?php endwhile; ?>
                    

                </select>
            </fieldset>

            <input type="submit" value="Crear Propiedad" class="boton boton-verde">

        </form>
    </main>
 
    <?php

incluirTemplate('footer');

    ?>
