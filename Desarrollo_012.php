<!DOCTYPE html>
<!--A12:   Realizar un juego para adivinar un número. Para ello pedir un número N, y luego ir pidiendo números indicando “mayor” o “menor” según sea mayor o menor con respecto a N. El proceso termina cuando el usuario acierta.-->
 <center>
 <h4>JUEGO DE NUMEROS </h4> 
 
  <form method='POST' > 
         INGRESAR NUMERO: 
		 <input name = 'num' type='text'/> </br>
<input name='numero' type='submit' value='JUGAR' />
</br>
                 
                 
                 </form>

<?php
$numero = -12345;
if(isset($_REQUEST['numero'])){
    
    $a = $_POST['num'];
    
    if($a == $numero){ echo"MUY BIEN ADIVINASTE ";
        
    }else if($a > $numero){ echo "EL NUMERO ES MENOR QUE  $a";
        
    }else if($a < $numero){ echo "EL NUMERO ESMAYOR QUE $a";}
}
?>