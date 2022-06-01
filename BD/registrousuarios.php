<?php
include ('conec.php');
if(isset($_POST['Enviar'])){
    $nombreUser = $_POST['nombre'];
    $apellidoPaterno = $_POST['apellido_paterno'];
    $apellidoMaterno = $_POST['apellido_materno'];
    $telefono = $_POST['telefono'];
    $correoElec = $_POST['correo'];
    $nomUsuario = $_POST['usuario'];
    $contrasena = $_POST['contraseña'];
    $insertarUsuario = "INSERT INTO usuarios (nombre, apellido_paterno, apellido_materno, telefono, correo, usuario, contraseña) 
    VALUE ('$nombreUser', '$apellidoPaterno', ' $apellidoMaterno', '$telefono', '$correoElec', '$nomUsuario', '$contrasena')";
    $resultado = mysqli_query($conexion, $insertarUsuario);

    if(!$resultado){
        echo '<script>alert("Los datos no se insertaron."</script>';
    }else{
        echo '<script>alert("Los datos se insertaron."</script>';
    }
}
header ('location: usuario.php')
?>