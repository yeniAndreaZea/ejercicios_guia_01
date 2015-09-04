<!DOCTYPE html>
<!--A08: Pedir al usuario cuántas millas desea convertir en milímetros, centímetros, metros, kilómetros, yardas, pies y pulgas. Desplegar en todas estas conversiones. --> 
        <center>
<h4>CUANTAS MILLAS DESEA COVERTIR EN ML, CM, MTRS, KLTRS, YARDAS, PIES, PUL </h4> 
<center>   <form method='POST' > 
        
                 INGRESAR MILLAS A CONVERTIR  : <input name = 'num' type='text'/> </br>
                 
                 <input name='en' type='submit' value='CONVERTIR MILLAS ' />
                 
                 </br>
                 </form>

<?php
function convertir($num){      
    $num2 = number_format($num, 3, '.', '');   
    return $num2;
}
if(isset($_REQUEST['en'])){
    
    $millas = $_POST['num'];
    
    $km =  $millas / 0.6214 ;
    $metros = $km * 1000;
    $cm = $metros * 100;
    $mm = $cm * 10;
    $yarda = $millas / 1760;
    $pulgada = $yarda * 36;
    $pie = $yarda * 3;
    
    
    $km2 = convertir($km);
    $metros2 = convertir($metros);
    $cm2 = convertir($cm);
    $mm2 = convertir($mm);
    $yarda2 = convertir($yarda);
    $pulgada2 = convertir($pulgada);
    $pie2 = convertir($pie);
    
    
    
    
    
    echo "HAY EN KILOMETROS ". $km2.  
         "<br>HAY METROS ".$metros2  .
         "<br>GAY EN CENTIMETROS ".$cm2 .
         "<br>HAY EN MILIMETROS ".$mm2 .
         "<br>HAY EN YARDAS".$yarda2.
         "<br>HAY EN PULGADAS ".$pulgada2.
         "<br>HAY EN PIES ".$pie2
            
            ;
    
    
}
?>