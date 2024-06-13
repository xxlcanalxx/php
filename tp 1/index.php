<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Practico</title>
    <link rel="stylesheet" href="./stylestp.css">
</head>

<body>
    <div class="row align-items-center hero">
        <header class="titlex">

            <h1>Bienvenidos a nuestro sitio web</h1>

        </header>
        <div class="menu">
            <ul>
                <li><a href="index.php"> Inicio</a></li>
                <li><a href="#"> Tienda</a></li>
                <li><a href="#"> Contacto</a></li>
            </ul>
        </div>

        <?php
        //ingresos anual año 2023
        $nombretienda1 = "TiendaMia";
        $tienda1 = 43446467.50;

        $nombretienda2 = "Mexx";
        $tienda2 = 20605636.72;

        $nombretienda3 = "Gezatek";
        $tienda3 = 15609555.25;

        $nombretienda4 = "Proyecto Color";
        $tienda4 = 17869583.93;

        $nombretienda5 = "Punto Digital";
        $tienda5 = 25985839.25;

        $nombretienda6 = "Mercado Libre";
        $tienda6 = 240563982.15;

        $nombretienda7 = "Brubank";
        $tienda7 = 215792925.87;

        $fac_anual = $tienda1 + $tienda2 + $tienda3 + $tienda4 + $tienda5 + $tienda6 + $tienda7
        ?>

        <section class="tiendas">
            <h2>Tiendas que confian en nosotros</h2>
            <div class="lista">
           
                <p><?php print $nombretienda1 ?></p>
                <p><?php print $nombretienda2 ?></p>
                <p><?php print $nombretienda3 ?></p>
                <p><?php print $nombretienda4 ?></p>
                <p><?php print $nombretienda5 ?></p>
                <p><?php print $nombretienda6 ?></p>
                <p><?php print $nombretienda7 ?></p>            
            </div>
        </section>

        <div class="facturacion">
            <h2>Facturacion 2023 con nuestros sistemas</h2>
            <div class="promedio">

                <h3> $ <?php print round($fac_anual) ?></h3>
                <br></br>
            </div>
        </div>
        <div class="direccionamiento">
        <p>Utilizando nuestros sitemas de automatizacion de ventas con ia se potencian las ganancias, que esperas para usar nuestros sitemas!. Clickea <a href="#">aqui</a> para ser parte!</p>
        </div>
       
    </div>
    <footer>
            <p>Derechos reservados &copy; 2024</p>
        </footer>

</body>

</html>