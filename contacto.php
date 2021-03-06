<?php

$pg = "contacto";

?>




<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">


</head>

<body id="Contacto">
    <?php include_once ("header.php"); ?>
                                                                                                
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Te invito a que te contactes enviándome un mensaje o bien por whatsapp</p>
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="post">
                    <div class="mb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Telefono/whatsapp" class="form-control">
                    </div>
                    <div class="mb-3">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe tu mensaje" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <button type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-blanco px-4 ">ENVIAR</button>
                    </div>

                </form>
            </div>

        </div>

    </main>
    <footer class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-3">
                <i class="fa-brands fa-github"></i>
                <i class="fa-brands fa-linkedin-in"></i>
            </div>
            <div class="col-12 col-sm-3">Sponsor <a href="https://depcduite.com">DePC Suite</a> </div>
            <div class="col-12 col-sm-3"> <a href="mailto:cojedaescudero@gmail.com">cojedaescudero@gmail.com</a></div>

        </div>

    </footer>
    <div class="whatsapp pt-3 pb-0 px-3">
        <a href="https://api.whatsapp.com/send?phone=3185779266">
            <i class="fa-brands fa-whatsapp"></i></a>

    </div>

</body>

</html>