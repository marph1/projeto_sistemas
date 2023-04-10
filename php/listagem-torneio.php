<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "csblazer";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}

// Insere os valores no banco de dados
$sql = "SELECT * from torneios";

$resultado = $conn->query($sql);

if($resultado->num_rows > 0){
    while($linha = $resultado->fetch_assoc()) {
        echo "<tr><td><br>Nome do torneio: " . $linha["nome_torneio"] . "<br></td><td>Participantes: " . $linha["participantes"] . "<br></td><td>Data de início: " . $linha["data_inicio"] . "<br></td></tr>Data final: " . $linha["data_fim"] . "<br></td></tr> ";
    }
} else {
    echo "0 resultados";
}
?>

<?php 
?>