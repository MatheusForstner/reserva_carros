<?php
$servidor = 'seu servidor';  // IP do servidor MySQL
$usuario = 'seu usuário';              // Nome de usuário do banco de dados
$senha = 'seu senha, se não tem senha. vazio';                    // Senha do banco de dados (deixe em branco se não houver senha)
$dbname = 'sua tabela dados';       // Nome do banco de dados

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

// Teste se a conexão foi bem-sucedida
if (!$conn) {
    die("Erro de conexão: " . mysqli_connect_error());
}
?>
