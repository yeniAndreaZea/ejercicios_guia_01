<!DOCTYPE html>
<!--A05:  Dadas las edades y alturas de 5 alumnos, mostrar la edad y la estatura media, la cantidad de alumnos mayores de 18 años, y la cantidad de alumnos que miden más de 1.75.-->
<html>

    <head>

    </head>
    

<body>

<center>

<?php
 echo "<h2>DIGITAR LA EDAD Y ESTATURA DE 5 ALUMNOS </h2>
<table border= 1px >
<tr>
<td># DE ALUMNOS </td>
<td>EDAD</td>
<td>ALTURA</td>
</tr>
";

echo "<form method='POST'>";
tabla('1', 'PrEd1','PrAn1');
tabla('2', 'PrEd2','PrAn2');
tabla('3', 'PrEd3','PrAn3');
tabla('4', 'PrEd4','PrAn4');
tabla('5', 'PrEd5','PrAn5');
function tabla($nombre , $id , $id2){
 echo "   
    <tr>
    <td>$nombre </td>
    <td><input type='number' name='$id' required/></td>
    <td><input type='text' name='$id2' required/></td>
    </tr>
          ";
      
 
}
echo "</table>
<br>
<input name='suma' type='submit' value='Enviar Datos' />
<br><br>";
?>

</form>






<!codigo PHP>
<?php
function suma($a,$b,$c,$d,$e){
    
$suma = $_POST[$a];
$suma += $_POST[$b];
$suma += $_POST[$c];
$suma += $_POST[$d];
$suma += $_POST[$e];
return $suma;
}
function si($a,$ot,$c,$d,$e, $con){
    
    $b= 0;
    
    if($_POST[$a] >= $con)$b++;
    if($_POST[$ot] >= $con)$b++;
    if($_POST[$c] >= $con)$b++;
    if($_POST[$d] >= $con)$b++;
    if($_POST[$e] >= $con)$b++;
    
    return $b;
}
if(isset($_POST['suma'] )){
$a = suma('PrEd1','PrEd2','PrEd3','PrEd4','PrEd5');
$d = suma('PrAn1','PrAn2','PrAn3','PrAn4','PrAn5');
$b = 0;
$c = 0;
$b = si('PrEd1','PrEd2','PrEd3','PrEd4','PrEd5' ,18);
$c = si('PrAn1','PrAn2','PrAn3','PrAn4','PrAn5',1.75);
echo" 
LA MEDIDA DE LA EDADES SON: ". $a/5 ." <br>
  LA ESTATURA MEDIA ES: ". $d/5 ." <br>
 LOS MAYORES DE 18 SON: $b <br>
  LOS ALUMNOS QUE MIDEN MAS DE 1.75 SON: $c 
";
}
?>
</center>
    
</body>
    
</html>