<?php

include("funciones.php");

$config = obtenerConfiguracion();

$result_ciudades = ObtenerTodasLasCiudades();

$result_tipos = obtenerTodosLosTipos();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REBOD</title>
    <link rel="icon" type="image" href="../inmobiliaria/img/rebod-logo-12.png" />
    <link rel="stylesheet" href="estilo.css">
</head>

<body class="home" id="home">
    <div class="container">
        <?php include("header.php");?>
        <center>
        <div class="masthead-heading text-uppercase"><img src="../inmobiliaria/img/rebod-logo-122.png" width="9%" alt=""></div>
        </center>

        <h2>Almacenes, Bodegas y Naves Industriales <br>
        Al mejor precio.</h2>

       

        <div class="box-buscar-propiedades pos-inferior">
            <div class="box-interior">
                <p>Encuentra la propiedad que busca</p>
                <form action="busqueda.php" method="get">
                    <select name="ciudad" id="">
                        <option value="">Seleccione Ciudad</option>
                        <?php while ($row = mysqli_fetch_assoc($result_ciudades)) : ?>
                            <option value="<?php echo $row['id'] ?>">
                                <?php echo $row['nombre_ciudad'] ?>
                            </option>
                        <?php endwhile ?>
                    </select>
                    <select name="tipo" id="">
                        <option value="">Tipo de Propiedad</option>
                        <?php while ($row = mysqli_fetch_assoc($result_tipos)) : ?>
                            <option value="<?php echo $row['id'] ?>">
                                <?php echo $row['nombre_tipo'] ?>
                            </option>
                        <?php endwhile ?>
                    </select>
                    <div class="estado">
                        <span>
                            <input type="radio" value="Alquiler" name="estado" checked  ="true"> Alquiler
                        </span>
                        <span>
                            <input type="radio" value="Venta" name="estado"> Venta
                        </span>
                    </div>

                    <input type="submit" value="Buscar" name="buscar">
                </form>
            </div>
        </div>
        
        <footer class="inferior">
            <?php include("contenido-footer.php")?>
        </footer>
    </div>
</body>

<script src="script.js"></script>

</html>