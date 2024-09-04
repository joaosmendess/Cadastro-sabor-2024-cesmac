<?php
include 'db.php'; // Conecta ao banco de dados

// Verifica se o ID do produto foi passado pela URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta para remover o produto
    $sql = "DELETE FROM produtos WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        echo "Produto removido com sucesso!";
    } else {
        echo "Erro ao remover o produto.";
    }
} else {
    echo "ID do produto não fornecido.";
}
?>
