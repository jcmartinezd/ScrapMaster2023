<?php

// Conexión a la base de datos 
$host = 'localhost';
$usuario = 'postgres';
$contrasena = 'root';
$base_datos = 'scraping';

$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

if ($conexion->connect_error) {
    die('Error de conexión: ' . $conexion->connect_error);
}

// Obtener la consulta desde el formulario
$variable_marca = $_POST['marca'];
$variable_almacenamiento = $_POST['almacenamiento'];
$variable_precio = $_POST['precio'];
$variable_ram = $_POST['ram'];


// Haz algo con las variables, por ejemplo, imprimirlas
//echo "Variable 1: " . $variable_marca . "<br>";
//echo "Variable 2: " . $variable_almacenamiento . "<br>";
//echo "Variable 3: " . $variable_precio . "<br>";
//echo "Variable 4: " . $variable_ram . "<br>";


if (!empty($variable_marca) && !empty($variable_almacenamiento) && !empty($variable_precio) && !empty($variable_ram)) {


    //SAMSUNG
    //RAM
    if ($variable_marca == 'samsung' && $variable_almacenamiento == '32' && $variable_precio == '500' && $variable_ram == '4ram'){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios < 500 
                    AND Marca = 'samsung' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%Protector%' 
                    AND Modelo NOT LIKE '%estuche%' AND Modelo NOT LIKE '%CABEZOTE%'
                    AND Modelo NOT LIKE '%Tablet%'";
    }
    if( $variable_marca == 'samsung' && $variable_almacenamiento == '32' && $variable_precio == '500' && $variable_ram == '6ram'){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios < 500 
                    AND Marca = 'samsung' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%Protector%' 
                    AND Modelo NOT LIKE '%estuche%' AND Modelo NOT LIKE '%CABEZOTE%'";
    }
    if( $variable_marca == 'samsung' && $variable_almacenamiento == '32' && $variable_precio == '500' && $variable_ram == '8ram'){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios < 500 
                    AND Marca = 'samsung' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%Protector%' 
                    AND Modelo NOT LIKE '%estuche%' AND Modelo NOT LIKE '%CABEZOTE%'";
    }
    //PRECIO
    //1000
    if ($variable_marca == 'samsung' && $variable_almacenamiento == '32' && $variable_precio == '1000' && $variable_ram == '4ram'){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios >= 500 AND Precios <1000
                    AND Modelo LIKE '%32gb%'
                    AND Marca = 'samsung' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%Protector%' 
                    AND Modelo NOT LIKE '%estuche%' AND Modelo NOT LIKE '%CABEZOTE%'
                    AND Modelo NOT LIKE '%Tablet%'";
    }
    if ($variable_marca == 'samsung' && $variable_almacenamiento == '32' && $variable_precio == '1000' && $variable_ram == '6ram'){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios >= 500 AND Precios <1000
                    AND Modelo LIKE '%32gb%'
                    AND Marca = 'samsung' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%Protector%' 
                    AND Modelo NOT LIKE '%estuche%' AND Modelo NOT LIKE '%CABEZOTE%'
                    AND Modelo NOT LIKE '%Tablet%'";
    }
    if ($variable_marca == 'samsung' && $variable_almacenamiento == '32' && $variable_precio == '1000' && $variable_ram == '8ram'){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios >= 500 AND Precios <1000
                    AND Modelo LIKE '%32gb%'
                    AND Marca = 'samsung' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%Protector%' 
                    AND Modelo NOT LIKE '%estuche%' AND Modelo NOT LIKE '%CABEZOTE%'
                    AND Modelo NOT LIKE '%Tablet%'";
    }
    //1999 - 2000
    if ($variable_marca == 'samsung' && $variable_almacenamiento == '32' && ($variable_precio == '1999' or $variable_precio == '2000') && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios >= 1000
                    AND Modelo LIKE '%32gb%'
                    AND Marca = 'samsung' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%Protector%' 
                    AND Modelo NOT LIKE '%estuche%' AND Modelo NOT LIKE '%CABEZOTE%'
                    AND Modelo NOT LIKE '%Tablet%'";
    }
    //ALMACENAMIENTO
    //64
    if ($variable_marca == 'samsung' && $variable_almacenamiento == '64' && $variable_precio == '500' && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios <500
                    AND Marca = 'samsung'
                    AND Modelo LIKE '%64gb%' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%Protector%' 
                    AND Modelo NOT LIKE '%estuche%' AND Modelo NOT LIKE '%CABEZOTE%'
                    AND Modelo NOT LIKE '%Tablet%'";
    }
    if ($variable_marca == 'samsung' && $variable_almacenamiento == '64' && $variable_precio == '1000' && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios >= 500 AND Precios <1000
                    AND Marca = 'samsung'
                    AND (Modelo LIKE '%64gb%' OR Modelo LIKE '%64 GB%')
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%Protector%' 
                    AND Modelo NOT LIKE '%estuche%' AND Modelo NOT LIKE '%CABEZOTE%'
                    AND Modelo NOT LIKE '%Tablet%'";
    }
    if ($variable_marca == 'samsung' && $variable_almacenamiento == '64' && ($variable_precio == '1999' or $variable_precio =='2000') && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios >= 1000
                    AND Marca = 'samsung'
                    AND (Modelo LIKE '%64gb%' OR Modelo LIKE '%64 GB%')
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%Protector%' 
                    AND Modelo NOT LIKE '%estuche%' AND Modelo NOT LIKE '%CABEZOTE%'
                    AND Modelo NOT LIKE '%Tablet%'";
    }
    //128
    if ($variable_marca == 'samsung' && $variable_almacenamiento == '128' && $variable_precio == '500' && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios <500
                    AND Marca = 'samsung'
                    AND Modelo LIKE '%128gb%' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%Protector%' 
                    AND Modelo NOT LIKE '%estuche%' AND Modelo NOT LIKE '%CABEZOTE%'
                    AND Modelo NOT LIKE '%Tablet%'";
    }
    if ($variable_marca == 'samsung' && $variable_almacenamiento == '128' && $variable_precio == '1000' && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios >=500 AND Precios <=1000
                    AND Marca = 'samsung'
                    AND Modelo LIKE '%128gb%' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%Protector%' 
                    AND Modelo NOT LIKE '%estuche%' AND Modelo NOT LIKE '%CABEZOTE%'
                    AND Modelo NOT LIKE '%Tablet%'";
    }
    if ($variable_marca == 'samsung' && $variable_almacenamiento == '128' && $variable_precio == '1999' && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios >=1000 AND Precios <=1999
                    AND Marca = 'samsung'
                    AND Modelo LIKE '%128gb%' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%Protector%' 
                    AND Modelo NOT LIKE '%estuche%' AND Modelo NOT LIKE '%CABEZOTE%'
                    AND Modelo NOT LIKE '%Tablet%'";
    }
    if ($variable_marca == 'samsung' && $variable_almacenamiento == '128' && $variable_precio == '2000' && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios >=2000
                    AND Marca = 'samsung'
                    AND Modelo LIKE '%128gb%' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%Protector%' 
                    AND Modelo NOT LIKE '%estuche%' AND Modelo NOT LIKE '%CABEZOTE%'
                    AND Modelo NOT LIKE '%Tablet%'";
    }
    //512
    if ($variable_marca == 'samsung' && $variable_almacenamiento == '512' && ($variable_precio == '500' or $variable_precio == '1000' or $variable_precio == '1999') && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios <=1999
                    AND Marca = 'samsung'
                    AND Modelo LIKE '%512gb%' 
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%Protector%' 
                    AND Modelo NOT LIKE '%estuche%' AND Modelo NOT LIKE '%CABEZOTE%'
                    AND Modelo NOT LIKE '%Tablet%'";
    }
    if ($variable_marca == 'samsung' && $variable_almacenamiento == '512' && $variable_precio == '2000' && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios >=2000
                    AND Marca = 'samsung'
                    AND (Modelo LIKE '%512gb%' OR Modelo LIKE '%512 GB%')
                    AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%Protector%' 
                    AND Modelo NOT LIKE '%estuche%' AND Modelo NOT LIKE '%CABEZOTE%'
                    AND Modelo NOT LIKE '%Tablet%'";
    }
    //APPLE
    if ($variable_marca == 'apple' && ($variable_almacenamiento == '32' or $variable_almacenamiento == '64') && ($variable_precio == '500' or $variable_precio == '1000' or $variable_precio == '1999' or $variable_precio == '2000')  && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios<2000 
                    AND Marca = 'apple' 
                    AND Modelo NOT LIKE '%adaptador%' AND Modelo NOT LIKE '%carcasa%' 
                    AND Modelo NOT LIKE '%cable%'";
    }
    //128
    if ($variable_marca == 'apple' && $variable_almacenamiento == '128' && ($variable_precio == '500' or $variable_precio == '1000' or $variable_precio == '1999')  && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios<2000 
                    AND Marca = 'apple' 
                    AND Modelo NOT LIKE '%adaptador%' AND Modelo NOT LIKE '%carcasa%' 
                    AND Modelo NOT LIKE '%cable%'";
    }
    if ($variable_marca == 'apple' && $variable_almacenamiento == '128' && $variable_precio == '2000'  && $variable_ram == '4ram'){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios>2000 
                    AND Marca = 'apple'
                    AND (Modelo LIKE '%128gb%' OR Modelo LIKE '%128 GB%')
                    AND Memoria_RAM='4GB' 
                    AND Modelo NOT LIKE '%adaptador%' AND Modelo NOT LIKE '%carcasa%' 
                    AND Modelo NOT LIKE '%cable%'";
    }
    if ($variable_marca == 'apple' && $variable_almacenamiento == '128' && $variable_precio == '2000'  && ($variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios>2000 
                    AND Marca = 'apple'
                    AND (Modelo LIKE '%128gb%' OR Modelo LIKE '%128 GB%')
                    AND Memoria_RAM='6GB'
                    AND Modelo NOT LIKE '%adaptador%' AND Modelo NOT LIKE '%carcasa%' 
                    AND Modelo NOT LIKE '%cable%'";
    }
    //512
    if ($variable_marca == 'apple' && $variable_almacenamiento == '512' && ($variable_precio == '500' OR $variable_precio == '1000' or $variable_precio == '1999') && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios<2000 
                    AND Marca = 'apple'
                    AND Modelo NOT LIKE '%adaptador%' AND Modelo NOT LIKE '%carcasa%' 
                    AND Modelo NOT LIKE '%cable%'";
    }
    if ($variable_marca == 'apple' && $variable_almacenamiento == '512' && $variable_precio == '2000'  && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios>2000 
                    AND Marca = 'apple'
                    AND (Modelo LIKE '%512gb%' OR Modelo LIKE '%512 GB%')
                    AND Modelo NOT LIKE '%adaptador%' AND Modelo NOT LIKE '%carcasa%' 
                    AND Modelo NOT LIKE '%cable%'";
    }
    //MOTOROLA
    if ($variable_marca == 'motorola' && $variable_almacenamiento == '32' && ($variable_precio == '500' or $variable_precio == '1000' or $variable_precio == '1999' or $variable_precio == '2000')  && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios<2000
        AND Modelo LIKE '%32gb%'
        AND Marca = 'Motorola' 
        AND Modelo NOT LIKE '%cargador%'";
    }
    //64
    if ($variable_marca == 'motorola' && $variable_almacenamiento == '64' && $variable_precio == '500'  && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios<500
        AND Modelo LIKE '%64gb%'
        AND Marca = 'Motorola' 
        AND Modelo NOT LIKE '%cargador%'";
    }
    if ($variable_marca == 'motorola' && $variable_almacenamiento == '64' && $variable_precio == '1000'  && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios>=500 AND Precios <1000
        AND Modelo LIKE '%64gb%'
        AND Marca = 'Motorola' 
        AND Modelo NOT LIKE '%cargador%'";
    }
    if ($variable_marca == 'motorola' && $variable_almacenamiento == '64' && ($variable_precio == '1999' or $variable_precio == '2000') && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios>=1000
        AND Modelo LIKE '%64gb%'
        AND Marca = 'Motorola' 
        AND Modelo NOT LIKE '%cargador%'";
    }
    //128
    if ($variable_marca == 'motorola' && $variable_almacenamiento == '128' && $variable_precio == '500' && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios<500
        AND (Modelo LIKE '%128gb%' OR Modelo LIKE '%128 GB%')
        AND Marca = 'Motorola' 
        AND Modelo NOT LIKE '%cargador%'";
    }
    if ($variable_marca == 'motorola' && $variable_almacenamiento == '128' && $variable_precio == '1000' && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios>=500 AND Precios<1000
        AND (Modelo LIKE '%128gb%' OR Modelo LIKE '%128 GB%')
        AND Marca = 'Motorola' 
        AND Modelo NOT LIKE '%cargador%'";
    }
    if ($variable_marca == 'motorola' && $variable_almacenamiento == '128' && $variable_precio == '1999' && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios>=1000 AND Precios<2000
        AND (Modelo LIKE '%128gb%' OR Modelo LIKE '%128 GB%')
        AND Marca = 'Motorola' 
        AND Modelo NOT LIKE '%cargador%'";
    }
    if ($variable_marca == 'motorola' && $variable_almacenamiento == '128' && $variable_precio == '2000' && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios>=2000
        AND (Modelo LIKE '%128gb%' OR Modelo LIKE '%128 GB%')
        AND Marca = 'Motorola' 
        AND Modelo NOT LIKE '%cargador%'";
    }
    //512
    if ($variable_marca == 'motorola' && $variable_almacenamiento == '512' && ($variable_precio == '500' or $variable_precio == '1000' or $variable_precio == '1999' or $variable_precio == '2000') && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 
        WHERE (Modelo LIKE '%512gb%' OR Modelo LIKE '%512 GB%')
        AND Marca = 'Motorola' 
        AND Modelo NOT LIKE '%cargador%'";
    }
    //XIAOMI
    if ($variable_marca == 'xiaomi' && $variable_almacenamiento == '32' && $variable_precio == '500' && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios<500
        AND (Modelo LIKE '%32gb%' OR Modelo LIKE '%32 GB%')
        AND Marca = 'xiaomi' 
        AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%power%'
        AND Modelo NOT LIKE '%audifonos%'";
    }
    if ($variable_marca == 'xiaomi' && $variable_almacenamiento == '32' && ($variable_precio == '1000' or $variable_precio == '1999' or $variable_precio == '2000') && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios>=500
        AND (Modelo LIKE '%32gb%' OR Modelo LIKE '%32 GB%')
        AND Marca = 'xiaomi' 
        AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%power%'
        AND Modelo NOT LIKE '%audifonos%'";
    }
    //64
    if ($variable_marca == 'xiaomi' && $variable_almacenamiento == '64' && $variable_precio == '500' && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios<500
        AND (Modelo LIKE '%64gb%' OR Modelo LIKE '%64 GB%')
        AND Marca = 'xiaomi' 
        AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%power%'
        AND Modelo NOT LIKE '%audifonos%'";
    }
    if ($variable_marca == 'xiaomi' && $variable_almacenamiento == '64' && $variable_precio == '1000'  && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios>=500 AND Precios <1000
        AND (Modelo LIKE '%64gb%' OR Modelo LIKE '%64 GB%')
        AND Marca = 'xiaomi' 
        AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%bank%'
        AND Modelo NOT LIKE '%audifonos%'";
    }
    if ($variable_marca == 'xiaomi' && $variable_almacenamiento == '64' && ($variable_precio == '1999' or $variable_precio == '2000')  && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios>=1999
        AND (Modelo LIKE '%64gb%' OR Modelo LIKE '%64 GB%')
        AND Marca = 'xiaomi' 
        AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%power%'
        AND Modelo NOT LIKE '%audifonos%'";
    }
    //128
    if ($variable_marca == 'xiaomi' && $variable_almacenamiento == '128' && $variable_precio == '500'  && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios<500
        AND (Modelo LIKE '%128gb%' OR Modelo LIKE '%128 GB%')
        AND Marca = 'xiaomi' 
        AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%bank%'
        AND Modelo NOT LIKE '%audifonos%'";
    }
    if ($variable_marca == 'xiaomi' && $variable_almacenamiento == '128' && $variable_precio == '1000'  && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios>=500 AND Precios<1000
        AND (Modelo LIKE '%128gb%' OR Modelo LIKE '%128 GB%')
        AND Marca = 'xiaomi' 
        AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%bank%'
        AND Modelo NOT LIKE '%audifonos%'";
    }
    if ($variable_marca == 'xiaomi' && $variable_almacenamiento == '128' && $variable_precio == '1999'  && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios>=1000 AND Precios<1999
        AND (Modelo LIKE '%128gb%' OR Modelo LIKE '%128 GB%')
        AND Marca = 'xiaomi' 
        AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%bank%'
        AND Modelo NOT LIKE '%audifonos%'";
    }
    if ($variable_marca == 'xiaomi' && $variable_almacenamiento == '128' && $variable_precio == '2000'  && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 WHERE Precios>=2000
        AND (Modelo LIKE '%128gb%' OR Modelo LIKE '%128 GB%')
        AND Marca = 'xiaomi' 
        AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%bank%'
        AND Modelo NOT LIKE '%audifonos%'";
    }
    //512
    if ($variable_marca == 'xiaomi' && $variable_almacenamiento == '512' && ($variable_precio == '500' or $variable_precio == '1000' or $variable_precio == '1999' or $variable_precio == '2000') && ($variable_ram == '4ram' or $variable_ram == '6ram' or $variable_ram == '8ram')){

        $consulta="SELECT Modelo, Precios, Marca FROM celulares6 
        WHERE (Modelo LIKE '%512gb%' OR Modelo LIKE '%512 GB%')
        AND Marca = 'xiaomi' 
        AND Modelo NOT LIKE '%cargador%' AND Modelo NOT LIKE '%bank%'
        AND Modelo NOT LIKE '%audifonos%'";
    }

}else{
    echo "Datos incompletos";
}


// Realizar la consulta a la base de datos
$resultado = $conexion->query($consulta);


if ($resultado) {
    while ($row = $resultado->fetch_assoc()) {
                        $marca = $row['Marca'];
                        $modelo = $row['Modelo'];
                        $precio = $row['Precios'];
                        ?>
                    <div>
                        <b>Marca: </b> <?php echo $marca; ?> <br>
                        <b>Modelo: </b> <?php echo $modelo; ?> <br>
                        <b>Precio: </b> <?php echo $precio ?>.000 <br>
                    </div>
                    <?php
    }
} else {
    echo 'Error en la consulta: ' . $conexion->error;
}

$conexion->close();
?>
