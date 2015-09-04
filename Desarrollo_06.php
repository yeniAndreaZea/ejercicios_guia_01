<!DOCTYPE html>
<!--A06:Pedir un número entre 0 y 9.999, decir si es capicúa. -->
<html>

    <head>

    </head>
    

<body>

<center>
<h4>DIGITAR UN NUMERO PARA COMPROBAR SI ES CAPICUO</h4>

<form method='POST'>
  INGRESAR UN NUMERO: 
    <input type='number' name='capicuo' required/>
<br>
<input name='suma' type='submit' value='ENVIAR' />
</br>
<?php
if(isset($_REQUEST['suma'] )){
     $num = $_POST['capicuo'];
    $cap = strrev($num);
    if($num == $cap) echo "EL NUMERO $num ES CAPICUO";
    else echo "EL NUMERO $num NO ES CAPICUO";
    
}
?>