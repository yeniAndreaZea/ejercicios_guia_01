<!DOCTYPE html>
<!--A04:  Pedir un número entre 0 y 9.999 y mostrarlo con las cifras al revés.  -->
<html>
<head>

        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
	<center>
       
      <form method='POST'>
	  <h2>CONVERTIDOR DE NUMEROS AL REVES DESDE 0 HASTA 9.999</h2>
       INGRESAR UN NUMERO: <input name = '#' type='number' min='1' max ='9999' > 
       <br> <input type='submit' value='ENVIAR'/>
        </form>
       <?php 
        if(isset($_REQUEST['#'])){
        $resul=  $_POST['#'];
        echo "<br>RESULTADO ".strrev($resul);
        }
        
        ?>
    </body>
</html>