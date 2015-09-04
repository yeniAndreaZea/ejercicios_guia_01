<!DOCTYPE html>

 <!-- A01: Realizar un algoritmo que pida los coeficientes de una ecuación de 2º grado, y de las posibles soluciones reales. Si no existen reales, debe indicarlo. -->
<html>
    <head>
        <meta charset="UTF-8">
        </head>
    <body>
	<center>
        <form method="GET">
        
        <h2>POR FAVOR INGRESAR LOS COEFICIENTES </h2> <br>
		<label> VARI A:  <input type='text' name='a' ></label><br>
        <label> VARI B:  <input type='text' name='b' ></label><br>
        <label> VARI C:  <input type='text' name='c' ></label><br>
        <input type='submit' name='ENVIAR'>
                </form>
        
        <?php
        $d1 = $_GET ['a'] * 2;
        $a1 = $_GET ['b'];
        $a2 = $_GET ['c'];
        $d2 = ($a1 * $a2);
        $d3 = 4 * $d2;
       $x = sqrt($d3);
      
		$d4= $d1 - $x;
        $d5 = $_GET ['b']+ $d4;
        $d6 = $d5 / (2*$a1);
        echo "<br>";
        echo "EL RESULTADO DA: ". $d6;
        
        ?>
    </body>
</html>


