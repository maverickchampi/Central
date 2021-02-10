<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Tags requeridos -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Central</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Css -->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/central-estilo.css">
    <link rel="shorcut icon" href="assets/images/logo.ico">
</head>

<body>
    <?php include("structure/header.php") ?>
    <script type="text/javascript">
        var elemento = document.getElementsByClassName("menu-link");
        elemento[3].className += " active";
    </script>
    <!-- MiniBanner -->
    <section class="minibanner">
        <div class="minibanner-container">
            <div class="minibanner-container-content">
                <h2>Contactanos</h2>
                <div class="minibanner-group">
                    <a href="index.php" class="active">Inicio</a> <i class="fa fa-chevron-right mx-2" aria-hidden="true"></i> <span>Contactanos</span>
                </div>
            </div>
        </div>
    </section>
    <!-- //MiniBanner -->
    <!-- FormContact -->
    <section class="formcontact">
        <div class="formcontact-container">
            <div class="formcontact-container-title">
                <h1>PÓNGASE EN CONTACTO</h1>
            </div>
            <form class="frmContact" action="#">
                <div class="frmContact-content">
                    <div class="frmContact-content-one">
                        <div class="frmContact-item">
                            <label for="txtFirstName">Nombre</label> <input type="text" name="txtFirstName" id="txtFirstName" placeholder="Ingrese nombre" required>
                        </div>
                        <div class="frmContact-item">
                            <label for="txtLastName">Apellido</label> <input type="text" name="txtLastName" id="txtLastName" placeholder="Ingrese apellido" required>
                        </div>
                        <div class="frmContact-item">
                            <label for="txtEmail">Correo</label> <input type="email" name="txtEmail" id="txtEmail" placeholder="Ingrese correo" required>
                        </div>
                    </div>
                    <div class="frmContact-content-two">
                        <div class="frmContact-item">
                            <label for="txtMessage">Escriba su mensaje</label>
                            <textarea name="txtMessage" id="txtMessage" placeholder="Ingrese su consulta o reclamo" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="frmContact-buttons">
                    <button type="submit" value="send" name="btn">Enviar
                        ahora</button>
                </div>
            </form>
        </div>
    </section>
    <!-- //FormContact -->
    <!-- Map -->
    <section class="map">
        <div class="map-container">
            <div class="map-container-content">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62405.768178876664!2d-76.99457809343336!3d-12.155841188861592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b8f71b53ab49%3A0xdd8cbd3088d235f0!2sSan%20Juan%20de%20Miraflores!5e0!3m2!1ses-419!2spe!4v1608157080656!5m2!1ses-419!2spe"></iframe>
            </div>
        </div>
    </section>
    <!-- //Map -->
    <?php include("structure/footer.php"); ?>


    <!-- Js scripts -->
    <script src="https://kit.fontawesome.com/905fa6d085.js"></script>
    <script src="assets/js/function.js"></script>
    <script src="assets/js/function-login.js"></script>
    <!-- //Js scripts -->
</body>

</html>