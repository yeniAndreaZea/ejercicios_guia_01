<!DOCTYPE html>
<!--A07: Solicitar al usuario el total de kilómetros que recorre su automóvil si con un litro se recorre 16.4 kilómetros, y desplegar cuantos litros de gasolina gastará, redondear el resultado para que no muestre decimales.-->
 <center>
<h4>INGRESAR EL TOTAL DE KILOMETROS QUE RECORRE SU AUTOMOVIL </h4>            
<form method='POST' > 
KILOMETROS RECORRIDOS DE SU AUTOMOVIL :
<input name = 'km' type='text'/> 
</br>
<input name='enviar' type='submit' value='ENVIAR' />
</br></form>
<?php
if(isset($_REQUEST['enviar'])){
    $km = $_POST['km'];
  $gastara = $km * 16.4;
    $total = number_format($gastara, 0, '.', ''); 
  echo "EL VEHICULO GASTARA  ".$total. " LTRS ";
    
    
}
?>
