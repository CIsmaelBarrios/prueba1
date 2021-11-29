<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Primos</title>
</head>
<body align="center">
    <h><u><b>Ingrese el numero para convertirlo en Decimal y Hexadecimal</b></u></h><br/>
    <form method="post" action="" >
        <input type="text" name="valor">
        <input type="submit" name="Generar">
    </form>
</body>
</html>
<?php
$xnum=0;
if(isset($_POST['valor'])){
    $xnum=$_POST['valor'];
    }
  $hex = dechex(bindec($xnum)); 
    echo "Numero binario: . $xnum . conversión a hexadecimal: $hex <br/>";

$dec = bindec($xnum); 
echo "Numero binario: . $xnum . conversión a decimal: $dec <br/>";
    ?>