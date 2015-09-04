<!DOCTYPE html>
<!--A09:Un alumno desea comprar un computadora portátil en El Lago, antes desea sabes cuánto le costará en realidad si le tiene que agregar al precio de la LapTop, $300 pesos de impuestos que le cobran el Km. 30 el SAT, y con los Soldados, tiene que pagar de impuesto el 5% del valor inicial de la LapTop. Cuánto le saldrá en total la LapTop.-->
<form action="A09.php" method="post" name="frmKm">
<label>Ingrese valor Inicial de la Computadora</label>
 <center>
 <input id="txtCosto" name="txtCosto" onKeypress="if (event.keyCode < 45 || event.keyCode >57) event.returnValue = false;" required="required"/><br>

<button type="submit">Calcular</button>
</form>
        <?php
	   if (isset($_POST['txtCosto'])){
        // put your code here
      $c=$_POST['txtCosto'];
	$pt=0;
	$ini=$c;
	$suma=$c+300;
	$por=$c*0.05;

	$pt=$suma+$por;
	echo "El precio inicial de la Laptop es: ".$ini;
	echo "<br>El valor a pagar con los impuestos incluidos es: ".$suma;
	echo "<br>El valor a pagar a los soldados es: ".$por;
	echo "<br>El valor final de la Laptop es: ".$pt;
	
	   }
        ?>
        </p>
                    </div> 
                 </div>
			</div>
     </div> 
    </div> 
</div></body>
</html>