<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
        <h3 align="center"><b><u>Ingrese un número para saber si es primo o no</u></b></h3>
            <form action="" method="post" align="center">
                <input type="text" name="num">
                <input type="submit" value="Aceptar">
            </form>
            <br/>
        </body>
</html>
<?php
$valor=0;

if(isset($_POST['num']))
    {
    $valor=$_POST['num'];
    }
        if(primo($valor))
        {
        numerosprimos($valor);
        }
        else
        {
        echo "<div align=center style=color:red;font-weight:bold;> $valor no es un numero primo";
        }

function primo($num)
    {
        $c=0;
        for($i=1;$i<=$num;$i++)
        {
            if($num%$i==0)
            {
                $c++;
            }
        }
        if($c==2)
        {
            return true;
        }
        return false;
    }

function numerosprimos($num)
        {
            $flowers=[];
            $i=0;
            while(count($flowers, COUNT_RECURSIVE) <=15)
                {
                    if(primo($num))
                        {
                            array_push($flowers,$num);
                        }
                    $num++;
                    $i++;
                }
            $j=0;
            echo "<table border=1 cellspacing=0 align=center linecolor=green width=200 heigth=200>";
                    while($j<=15)
                        {
                            echo "<tr>";
                            echo "<td>";
                            print_r($flowers[$j]);
                            echo "</td>";
                            $j++;
                            echo "<td>";
                            print_r($flowers[$j]);
                            echo "</td>";
                            $j++;
                            echo "<td>";
                            print_r($flowers[$j]);
                            echo "</td>";
                            $j++;
                            echo "<td>";
                            print_r($flowers[$j]);
                            echo "</td>";
                            $j++;
                            echo "</tr>";
                        }
            echo "</table>";
        }
        ?>

