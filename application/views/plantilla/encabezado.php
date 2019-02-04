<header id="header">
    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="<?= site_url('Inicio'); ?>"><img src="<?= base_url(); ?>assets/img/home/logo.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <?php if (!$this->session->userdata('login')): ?>
                                <li><a href="<?= site_url('Carrito'); ?>"><i class="fa fa-shopping-cart"></i> Cesta</a></li>
                                <li><a href="<?= site_url('Login'); ?>"><i class="fa fa-sign-in"></i> Iniciar sesión</a></li>
                            <?php else: ?>
                                <li><a href="#"><i class="fa fa-user"></i> <?= $this->session->userdata('nombre_usuario'); ?></a></li>
                                <li><a href="<?= site_url('Carrito'); ?>"><i class="fa fa-shopping-cart"></i> Cesta</a></li>
                                <li><a href="<?= site_url('Login/logout'); ?>"><i class="fa fa-sign-out"></i> Cerrar sesión</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="<?= site_url('Inicio'); ?>">Inicio</a></li>
                            <li class="dropdown"><a href="#">Tienda<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="shop.html">Zapatillas</a></li>
                                    <li><a href="product-details.html">Detalles zapatillas</a></li> 
                                </ul>
                            </li>
                            <li><a href="contact-us.html">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->