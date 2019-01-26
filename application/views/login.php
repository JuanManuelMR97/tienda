<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Iniciar sesión | R-Shop</title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/prettyPhoto.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/price-range.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet">  
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    </head>

    <body>
        <?php $this->load->view('plantilla/encabezado'); ?>

        <section id="form"><!--form-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-1">
                        <div class="login-form"><!--login form-->
                            <h2>Ingrese su cuenta</h2>
                            <?= form_open(site_url('Login/login')) ?>
                                <input type="text" name="nombre_usuario" placeholder="Nombre de usuario" />
                                <input type="password" name="contraseña" placeholder="Contraseña" />
                                <button type="submit" class="btn btn-default">Iniciar sesión</button>
                            <?= form_close() ?>
                        </div><!--/login form-->
                    </div>
                    <div class="col-sm-1">
                        <h2 class="or">O</h2>
                    </div>
                    <div class="col-sm-4">
                        <div class="signup-form"><!--sign up form-->
                            <h2>Date de alta</h2>
                            <form action="#">
                                <input type="text" name="nombre" placeholder="Nombre"/>
                                <input type="text" name="apellidos" placeholder="Apellidos"/>
                                <input type="text" name="dni" placeholder="DNI"/>
                                <input type="text" name="direccion" placeholder="Dirección"/>
                                <input type="text" name="cp" placeholder="Código postal"/>
                                <input type="text" name="provincia" placeholder="Provincia"/>
                                <input type="text" name="email" placeholder="Correo electrónico"/>
                                <input type="text" name="nombre_usuario" placeholder="Nombre de usuario" />
                                <input type="password" name="contraseña" placeholder="Contraseña" />
                                <button type="submit" class="btn btn-default">Registrarse</button>
                            </form>
                        </div><!--/sign up form-->
                    </div>
                </div>
            </div>
        </section><!--/form-->
        
        <?php $this->load->view('plantilla/pie'); ?>
        

        <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/price-range.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.scrollUp.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.prettyPhoto.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
    </body>
</html>