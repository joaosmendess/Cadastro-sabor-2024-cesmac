<?php
$host = '127.0.0.1'; // Host do banco de dados
$dbname = 'saborela_2024'; // Nome do banco de dados
$username = 'root'; // Usuário do banco de dados
$password = 'root'; // Senha do banco de dados
$socket = '/tmp/mysql.sock'; // Certifique-se de que o caminho do socket está correto

try {
    // Conexão com o banco de dados usando PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
}
?>
