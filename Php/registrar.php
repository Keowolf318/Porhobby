<?php

include 'conect.php';

#Esta es la validacion de los datos "si no se llena todos los campos no se enviara nada"

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['contraseña']) >= 1) {
        $nombre = trim($_POST["nombre"]);
        $correo = trim($_POST["correo"]);
        $contraseña = trim($_POST["contraseña"]);
        $verificar_correo = mysqli_query($conex,"SELECT * FROM datos WHERE correo='$correo'");

#Verificar si los datos ya existen

        if(mysqli_num_rows($verificar_correo) > 0){
            echo'<h3 class="mal">El correo ya existe</h3>';
        } else{
            $verificar_usuario = mysqli_query($conex,"SELECT * FROM datos WHERE nombre='$nombre'");
            if(mysqli_num_rows($verificar_usuario) > 0){
                echo'<h3 class="mal">¡Este usuario ya existe!</h3>';
            } else {

#Insertar datos en la base de datos

                $query = "INSERT INTO datos(correo, nombre, contraseña) VALUES('$correo','$nombre','$contraseña')";
                $ejecutar = mysqli_query($conex, $query);  
                if ($ejecutar) {
                    ?>
                    <h3 class="ok">!Te has resgistrado bother :D!</h3>
                    <?php
                    } else {
                        ?>
                        <h3 class="mal">¡Uy ha ocurrido un error inesperado!</h3>
                        <?php
                        }
            }   
        }   
    }  else {
        echo "<h3 class='mal'>¡Tienes que llenar todos los Campos!</h3>";
    }
}






       

?>