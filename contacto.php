<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "contactoleootec";

    $enlace = mysqli_connect ($servidor, $usuario, $clave, $baseDeDatos);

    if(isset($_POST['registro'])){
        $nombre= $_POST ['nombre'];
        $correo= $_POST ['email'];
        $mensaje= $_POST ['mensaje'];

        $insertarDatos = "INSERT INTO contacto VALUES('$nombre','$correo','$mensaje','')";
        $ejecutarInsertar = mysqli_query ($enlace,$insertarDatos);

        if($ejecutarInsertar){
            
            header('Location: Contacto.html');
            exit(); 
        } else {
            echo "Error al enviar el formulario. Por favor, inténtalo de nuevo.";
        }
    }
    
?>