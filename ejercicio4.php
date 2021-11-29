<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h><u><b>Ingrese el número de 4 cifras</b></u></h><br/>
    <form method="post" action="" >
        <input type="text" name="numero">
        <input type="submit" name="Generar">
    </form>
</body>
</html>
<?php
$xnum=0;
if(isset($_POST['numero'])){
    $xnum=$_POST['numero'];
    }
    $xmil= intval($xnum / 1000);
    $xres = $xnum - ($xmil* 1000);
    $xcen = intval($xres / 100);
    $xres = $xres - ($xcen * 100);
    $xdec = intval($xres / 10);
    $xuni = $xres - ($xdec * 10);
    print 'NUMERO INGRESADO : ' . $xnum;
    print '<br>SU UNIDAD DE MIL : ' . $xmil;
    print '<br>SU CENTENA : ' . $xcen;
    print '<br>SU DECENA : ' . $xdec;
    print '<br> SU UNIDAD : ' . $xuni;
?>