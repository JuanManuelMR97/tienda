<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cesta | R-Shop</title>
        <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/img/home/simbolo.png"> 
        <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/css/prettyPhoto.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/css/price-range.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/css/animate.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/css/main.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/css/responsive.css" rel="stylesheet">  
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    </head>

    <body>
        <?php $this->load->view('plantilla/encabezado'); ?>

        <section id="cart_items">
            <div class="container">
                <?php if ($carrito = $this->cart->contents()): ?>
                    <div class="table-responsive cart_info">
                        <table class="table table-condensed">
                            <thead>
                                <tr class="cart_menu">
                                    <td class="image">Artículo</td>
                                    <td class="description">Descripción</td>
                                    <td class="price">Precio</td>
                                    <td class="quantity">Cantidad</td>
                                    <td class="total">Total</td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($carrito as $item): ?>
                                    <tr>
                                        <td class="cart_product">
                                            <a href=""><img src="<?= base_url() . $item['img'] ?>" alt="" height="110" width="110"></a>
                                        </td>
                                        <td class="cart_description">
                                            <h4><a href=""><?= $item['name'] ?></a></h4>
                                            <p>Código: <?= $item['cod'] ?></p>
                                        </td>
                                        <td class="cart_price">
                                            <p><?= $item['price'] ?> €</p>
                                        </td>
                                        <td class="cart_quantity">
                                            <div class="cart_quantity_button">
                                                <a class="cart_quantity_up" href=""> + </a>
                                                <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                                <a class="cart_quantity_down" href=""> - </a>
                                            </div>
                                        </td>
                                        <td class="cart_total">
                                            <p class="cart_total_price"><?= $item['price'] ?> €</p>
                                        </td>
                                        <td class="cart_delete">
                                            <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
        </section> <!--/#cart_items-->

        <section id="do_action">
            <div class="container">
                <div class="heading">
                    <h3>What would you like to do next?</h3>
                    <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="chose_area">
                            <ul class="user_option">
                                <li>
                                    <input type="checkbox">
                                    <label>Use Coupon Code</label>
                                </li>
                                <li>
                                    <input type="checkbox">
                                    <label>Use Gift Voucher</label>
                                </li>
                                <li>
                                    <input type="checkbox">
                                    <label>Estimate Shipping & Taxes</label>
                                </li>
                            </ul>
                            <ul class="user_info">
                                <li class="single_field">
                                    <label>Country:</label>
                                    <select>
                                        <option>United States</option>
                                        <option>Bangladesh</option>
                                        <option>UK</option>
                                        <option>India</option>
                                        <option>Pakistan</option>
                                        <option>Ucrane</option>
                                        <option>Canada</option>
                                        <option>Dubai</option>
                                    </select>

                                </li>
                                <li class="single_field">
                                    <label>Region / State:</label>
                                    <select>
                                        <option>Select</option>
                                        <option>Dhaka</option>
                                        <option>London</option>
                                        <option>Dillih</option>
                                        <option>Lahore</option>
                                        <option>Alaska</option>
                                        <option>Canada</option>
                                        <option>Dubai</option>
                                    </select>

                                </li>
                                <li class="single_field zip-field">
                                    <label>Zip Code:</label>
                                    <input type="text">
                                </li>
                            </ul>
                            <a class="btn btn-default update" href="">Get Quotes</a>
                            <a class="btn btn-default check_out" href="">Continue</a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="total_area">
                            <ul>
                                <li>Cart Sub Total <span>$59</span></li>
                                <li>Eco Tax <span>$2</span></li>
                                <li>Shipping Cost <span>Free</span></li>
                                <li>Total <span>$61</span></li>
                            </ul>
                            <a class="btn btn-default update" href="">Update</a>
                            <a class="btn btn-default check_out" href="">Check Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/#do_action-->

        <?php $this->load->view('plantilla/pie'); ?>


        <script src="<?= base_url(); ?>assets/js/jquery.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/jquery.scrollUp.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/jquery.prettyPhoto.js"></script>
        <script src="<?= base_url(); ?>assets/js/main.js"></script>
    </body>
</html>