<?php 
include 'connection.php';
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$comments = $_POST["comments"];

$insertar = "INSERT INTO userdata(name,phone,email,comments) VALUES ('$name','$phone','$email','$comments')";

$resultado = mysqli_query($conexion,$insertar);
if (!$resultado) {
    echo '<script> 
            alert("Error de registro");
            window.history.go(-1);
        </script>';
} else {
    echo '<script> 
            alert("Registro efecturado correctamente");
            window.history.go(-1);
        </script>';   
}
// Cerrar consultas
mysqli_close($conexion); 