<?php 

require "./includes/config/database.php";
$db = conectarDB();

$errores = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = mysqli_real_escape_string(
        $db,
        filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)
    );
    $password = mysqli_real_escape_string($db, $_POST["password"]);

    if (!$email) {
        $errores[] = "El Email es obligatorio o No es Valido";
    }

    if (!$password) {
        $errores[] = "El Password es Obligatorio";
    }

    if(empty($errores)){
        $query="SELECT * FROM usuarios WHERE email='${email}'";
        $resultado=mysqli_query($db,$query);
       

        if($resultado->num_rows){
            //revisar si el pass es correcto

            $usuario=mysqli_fetch_assoc($resultado);

            //revisar si el pass es correcto
            $auth=password_verify($password,$usuario['password']);

            if($auth){
                //El Usuario realizo autenticacion correcta
                session_start();

                $_SESSION['usuario']=$usuario['email'];
                $_SESSION['login']=true;

                header('location:/admin/index.php');


            }else{
                $errores[]="El Password es Incorrecto";
            }

        }else{
            $errores[]="El Usuario no Existe";
        }
    }


}

require "includes/funciones.php";
incluirTemplate("header");
?>


    <main class="contenedor seccion contenido-centrado">
        <h1>Iniciar Sesion</h1>

        <?php foreach ($errores as $error): ?>
            <div class="alert error">
                <?php echo $error; ?>
            </div>

        <?php endforeach; ?>


        <form  method="POST" class="formulario">
        <fieldset>
                    <legend>Email y Password</legend>
                    
                    <label for="email">E-mail</label>
                    <input type="email" name="email" placeholder="Escribe tu E-mail" id="email" >

                    <label for="password">Password</label>
                    <input type="password"  name="password" placeholder="Escribe tu Password" id="password" >
                    
                  
                </fieldset>
                <input type="submit" value="Iniciar Sesion" class="boton boton-verde">

        </form>
    </main>
 
    <?php incluirTemplate("footer"); ?>



    <script src="./build/js/bundle.js.min.map"></script>
</body>
</html>