<!DOCTYPE html>
<html>
<meta charset='utf-8' >
<body>

<?php
$servername = "192.168.31.53";
$username = "equipoa";
$password = "politecnico";
$dbname = "pruebas";
$nombrecliente = $_POST["nombrecliente"];
$apellidoscliente = $_POST["apellidoscliente"];
$dni = $_POST["dni"];
$emailcliente = $_POST["emailcliente"];
$fecha_de_nacimiento = $_POST["fecha_de_nacimiento"];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Se ha conectado correctamente";
echo "<br>";
echo "<br>";
$sql = "INSERT INTO clientes (nombre, apellidos, dni, email, fecha_de_nacimiento) VALUES ('$nombrecliente', '$apellidoscliente', '$dni', '$emailcliente', '$fecha_de_nacimiento')";
if (mysqli_query($conn, $sql)) {
      echo "<p>Nueva entrada guardada</p>";

} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?></center>

<p align="center"><a href="insertarClientes.html">Insertar Clientes</a></p>
<p align="center"><a  href="buscarClientes.html">Buscar Clientes</a></p>
<p align="center"><a  href="index.html">Volver al Indice</a></p>


</body>
</html>
