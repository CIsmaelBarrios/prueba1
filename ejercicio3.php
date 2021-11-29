<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
        <h3 align="center"><b><u>Ingrese un Número</u></b></h3>
            <form action="" method="post" align="center">
                <input type="text" name="cifra">
                <input type="submit" value="Aceptar">
            </form>
            <br/>
        </body>
</html>
<?php
$cifra=0;

if(isset($_POST['num']))
    {
    $cifra=$_POST['num'];
    }
    function basico($numero) {
        $valor = array ('uno','dos','tres','cuatro','cinco','seis','siete','ocho',
        'nueve');
        return $valor[$numero - 1];
        }
        
        
        function convertir($n) {
        if( $n >= 1 && $n <= 29) {
         return basico($n);
        
        }
        }
        
        $html ='';
        if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
        $html = "
        <p align=center>".$_POST['cifra'].' se escribe ';
        $html.= '<b>'.ucfirst(convertir($_POST['cifra'])).'</b>
        ';
        echo $html;
        }
?>
