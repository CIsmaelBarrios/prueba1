
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>Tablas de multiplicar.</title>
</head>
<body align="center">
<h1>Tablas de multiplicar</h1>
<h3>Escribe un número del 1 al 9 y yo te diré la tabla de multiplicar.</h3>
<form action="" method="post" requerido>
   <p>Escribe aquí el número: </p>
   <input type="text" name="number" maxlength="2" size="2" />
   <input type="submit" value="Ver tabla de multiplicar." />
</form>

</body>
</html>
<?php
$numero="";
if(isset($_POST['number'])){
$numero=$_POST['number'];

}

if ($numero<1 or $numero>10) {
    echo "no has escrito un nůmero entre el 1 y el 9.";
    }
else {
   echo"<table border=1 cellspacing=0 align=center>";
     echo "<h4>Tabla del $numero:</h4>";
     $i=0;
     while ($i<=10) {
      echo "<tr>";
      echo "<td>";
      echo "$numero x $i = ".$numero*$i."<br/>";
      echo "</td>";
      echo "</tr>";
      $i++;
           }
           
      echo "</table>";
     }
?>