<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    
  
</head>
<body>

  <?php
  
    $db_host = "localhost";
    $db_nombre = "registroformulario";
    $db_usuario = "root";
    $db_contra = "";

    

    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);



     if(mysqli_connect_errno()){

        echo "Fallo al conectar con la base de datos";

        exit();

     }

     mysqli_select_db ($conexion, $db_nombre) or die ("no se encuentra la base de datos");

    $consulta = "SELECT * FROM registro";

    mysqli_set_charset($conexion,"utf8");

    ///$consulta = "INSERT INTO registro (nombre, apellido, email, contraseña) values ('Francesco', 'Gallo', 'fran-296@hotmail.com', '1234')";



             // Obtener datos del formulario
             $nombre = $_POST["nombre"];
             $apellido = $_POST["apellido"];
             $email = $_POST["email"];
             $contraseña = $_POST["contraseña"];

 
    $consulta = "INSERT INTO registro (nombre, apellido, email, contraseña) values ('$nombre', '$apellido' ,'$email' , '$contraseña' )";
    
    
   $resultados = mysqli_query($conexion, $consulta);


   if($resultados == false) {

    echo "error en la consulta";
   }
   else{

    echo "registro guardado";
   }

   

   mysqli_close($conexion);


  
  ?>

</body>
</html>





   
