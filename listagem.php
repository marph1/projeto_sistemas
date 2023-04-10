<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        var script = document.createElement('script');
        script.src = 'js/entrar.js';
        document.head.appendChild(script);
    </script>

    <link rel="stylesheet" type="text/css" href="css/listagem.css">
    <title>Torneios BLAZER</title>
</head>
<body>

    <header class="cabecalho">
        <div class="titlepag">
            <h1>TORNEIOS</h1>
        </div>
    </header>

    <main class="principal">
        <div class="container">
    
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "csblazer";
    
            $conn = mysqli_connect($servername, $username, $password, $dbname);
    
            if (!$conn) {
                die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
            }
    
            $sql = "SELECT * from torneios";
    
            $resultado = $conn->query($sql);
    
            if($resultado->num_rows > 0){
                while($linha = $resultado->fetch_assoc()) {
                    echo "<div class='item'>";
                    echo "<h3>" . $linha["nome_torneio"] . "</h3>";
                    echo "<h3>Participantes: " . $linha["participantes"] . "</h3>";
                    echo "<h3>Data de início: " . $linha["data_inicio"] . "</h3>";
                    echo "<h3>Data final: " . $linha["data_fim"] . "</h3>";
                    echo "<button type='button' id='botao_entrar' class='button' onclick='validar(\"" . $linha["nome_torneio"] . "\");'>ENTRAR</button>";
                    echo "</div>";
                }
            } else {
                echo "0 resultados";
            }
            ?>
    
        </div>
    </main>    
</body>
</html>