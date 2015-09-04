<!DOCTYPE html>
<!--A13: Una empresa que se dedica a la venta de desinfectantes necesita un programa para 
 gestionar las facturas. En cada factura figura: el código del artículo, la cantidad vendida en 
litros y el precio por litro. Se pide de 5 facturas introducidas: Facturación total, cantidad en 
litros vendidos del artículo 1 y cuantas facturas se emitieron de más de 600 €..
-->
<html>
    <head>
        <meta charset="UTF-8">
         </head>
    <body>
  <form method="POST">
            <h1> REALIZAR FACTURACION  </h1>
            
            <h2> Articulo: </h2>
            
        <label>Codigo: <input type="text" name="codigo" > </label>
        <label>Nombre: <input type="text" name="nombre" > </label>
        <label>Cantidad: <input type="text" name="cantidad" > </label>
        <label>Precio: <input type="text" name="precio" > </label>
        <br>
        <input type="submit" name="acceder" > 
        
        
        </form>
        <?php
        
        session_start();
        $x1= $_POST['codigo'];
        $x2= $_POST['nombre'];
        $x3= $_POST['cantidad'];
        $x3= $_POST['precio'];
        
        $_SESSION['codigo'] = $x1;
        
        echo "EL CODIGO ES: ".$_SESSION['codigo'];
        
        ?>
    </body>
</html>