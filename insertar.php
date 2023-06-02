<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vivel";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['Enviar'])){
    if (strlen($_POST['Correo']) >= 1 &&
        strlen($_POST['Nombre']) >= 1 &&
        strlen($_POST['Numero']) >= 1 &&
        strlen($_POST['Pregunta']) >= 1){
            $cor = $_POST['Correo'];
            $name = $_POST['Nombre'];
            $num = $_POST['Numero'];
            $preg = $_POST['Pregunta'];
            $consulta = "INSERT INTO clientes(Correo, Nombre, Numero, Pregunta) 
                    VALUES ('$cor','$name','$num', '$preg')";
            $resultado = mysqli_query($conn,$consulta);
            if($resultado){
                echo "Producto registrado";
            }
            else{
                echo "Error";
            }
    }
    else{
        echo "Ingrese los datos";
    }
}

$conn->close();
?>