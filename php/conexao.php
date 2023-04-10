<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Recupera os valores enviados pelo formulário
    $nome_torneio = $_POST['nome_torneio'];
    $participantes = $_POST['participantes'];
    $data_inicio = $_POST['data_inicio'];
    $data_final = $_POST['data_final'];

    // Conecta-se ao banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "csblazer";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Verifica se a conexão foi bem-sucedida
    if (!$conn) {
        die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
    }

    // Insere os valores no banco de dados
    $sql = "INSERT INTO torneios (nome_torneio, participantes, data_inicio, data_fim) 
            VALUES ('$nome_torneio', '$participantes', '$data_inicio', '$data_final')";

    if (mysqli_query($conn, $sql)) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados: " . mysqli_error($conn);
    }

    // Fecha a conexão com o banco de dados
    mysqli_close($conn);

    header('Location: http://localhost:80/');
    die();
}
?>
