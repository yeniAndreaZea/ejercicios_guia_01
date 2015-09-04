<!DOCTYPE html>
<!--A15: Realizar un programa que nos pida un número n, y nos diga cuantos números hay entre 1 y n que son primos.
-->
<center>
<form id="frmDatosUsuario" name="frmDatosUsuario" 
method="POST">

<h1>NUMEROS PRIMOS </h1>

         <label><em>INGRESAR UN  NUMERO</em></label> 
         <input id="numero" name="numero" placeholder='Ingrese un numero' onKeypress="if (event.keyCode < 45 || event.keyCode >57) event.returnValue = false;" maxlength="3" required="required"/><br><br>
         <button type="submit">ENVIAR</button>
         <br /><br />
        </form> 

       <p>
        <?php
		function primo($num){
	$cont = 0;
	for($i = 1; $i <= $num; $i++){
		if($num % $i == 0){
			$cont++;
		}
	}
	if($cont==2){
		return true;
	}else{
		return false;
		}
	}
	 if (isset($_POST['numero'])){
		$numeros = $_POST['numero'];
		$funcion = primo($numeros);
		 if (isset($_POST['numero'])){
if($_POST['numero']=$funcion){
	for($i=0; $i<=$_POST['numero']; $i++){
	
		
			}
			echo $i;
		}
	}
}
?>
 </p>
                    </div> 
                 </div>
			</div>
            </html>