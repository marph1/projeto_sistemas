<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Recupera os valores enviados pelo formulário
    $nome_usuario = $_POST['nome_usuario'];
    $num_telefone = $_POST['telefone'];
    $senha = $_POST['senha'];

    // Conecta ao banco de dados
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
    $sql = "INSERT INTO usuario (nome_u, num_tel, senha) 
            VALUES ('$nome_usuario', '$num_telefone', '$senha')";

    if (mysqli_query($conn, $sql)) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados: " . mysqli_error($conn);
    }

    // Fecha a conexão com o banco de dados
    mysqli_close($conn);

    header('Location: http://localhost/listagem.php');
    die();
}
?>