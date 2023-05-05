<?php

    include 'conect.php';

    if(isset($_POST['iniciar'])){
        if(strlen($_POST['Nombre_usu'])>= 1 && strlen($_POST['contrasena_usu'])>= 1){
            $nombre_usu= trim($_POST['Nombre_usu']);
            $contrasena_usu= trim($_POST['contrasena_usu']); 
    
   
            
            $verificar_usuario= mysqli_query($conex,"SELECT * FROM datos WHERE nombre='$nombre_usu'");
            if(mysqli_num_rows($verificar_usuario) > 0){

                $contrasena_usu= mysqli_query($conex,"SELECT * FROM datos WHERE contraseña='$contrasena_usu'");
                if(mysqli_num_rows($contrasena_usu) > 0){
                    echo'<a href="principal.html">bienvenido de vuelta</a>';
                }else{
                    echo'contraseña incorecta';
                }
                    

            }else{
                echo'Nombre de usuario incorecto';
            }
            
        }else{
            echo "<h3 class='mal'> Hay que llenar todos los campos!</h3>";
        }





    }

?>