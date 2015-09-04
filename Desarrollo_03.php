<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	</head>
<body>
<center>
<!-- A03:Por medio de un menú dar al usuario la opción de seleccionar círculo o circunferencia si selecciona círculo calcular su área. A=PI*r^2, si selecciona circunferencia calcular su longitud.-->
<h2>POR FAVOR INGRESAR EL TIPO DE FIGURA Y EL VALOR DE RADIO </h2> <br>

<form id="frmFigura" name="frmFigura" action="A03.php" method="POST">
           <label><em> SELECCIONAR LA FIGURA: </em></label>
            <select id="area" name="area">
                <option value="Circulo">Circulo</option>
                <option value="Circunferencia">Circunferencia</option>
            </select><br>
            <br>
            <label>INGRESE EL VALOR DE RADIO: </label>
            <input type="text" name="valor" onKeypress="if (event.keyCode < 45 || event.keyCode >57) event.returnValue = false;" maxlength="4" minlength="2" required="required"><br>
            <br />
            <input type="submit" value="Enviar">
        
       <?php
        
       if (isset($_POST['area'])){
            $tipo = $_POST['area'];
            if ($tipo == "Circulo"){
                $valor = $_POST['valor'];
                $valor1 = $valor * $valor;                        
                $a= 3.1416 * $valor1; 
                echo $a;
            }elseif ($tipo = "Circunferencia") {
                $valor = $_POST['valor'];
                $valor1 = $valor + $valor;                        
                $a= 3.1416 * $valor1; 
                echo $a;
            }    
        }
        ?>
   
        
        </p>
                    </div> 
                 </div>
			</div>
            
       
</div></body>
</html>