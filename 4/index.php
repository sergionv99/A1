<!--CREAMOS LA ESTRUCTURA HTML-->
<html>
    <head>
        <title>title</title>
    </head>
    
    <body>
        <h1>INTRODUCE TU NOMBRE</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="POST">
           <input type="text" name="usuario">
            
            <input type="submit" value="Envia">
        
        </form>
        
    </body>
</html>

<?php
//HACEMOS LA COMPROBACION
if(isset($_POST['usuario'])&&!empty($_POST['usuario'])){
$usuario=$_POST['usuario'];
echo 'Hola '.$usuario;
}else{
    echo 'Introduce un nombre';
}
