<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Mi tienda online</title>
    </head>
    <body>
        <?php foreach ($destacados->result() as $producto): ?>
            <p><?= $producto->nombre ?></p>
            <img src="<?= $producto->imagen ?>" height="100" width="100">
            <span><?= $producto->precio_venta ?></span>
        <?php endforeach; ?>
    </body>
</html>