<?php
include 'db.php'; // Conecta ao banco de dados

// Consulta para buscar os produtos
$sql = "SELECT * FROM produtos";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC); // Recupera todos os produtos como array associativo
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Sabor 2024</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Lista de Produtos</h1>
        <?php foreach ($produtos as $produto): ?>
            <div class="produto">
                <p><strong><?= htmlspecialchars($produto['nome']) ?></strong></p>
                <p><?= htmlspecialchars($produto['descricao']) ?></p>
                <p>Preço: R$ <?= number_format($produto['preco'], 2, ',', '.') ?></p>
                <!-- Botão para remover o produto -->
                <a href="remover.php?id=<?= $produto['id'] ?>" class="btn btn-danger">Remover</a>
                <!-- Link para alterar o produto -->
                <a href="alterar.php?id=<?= $produto['id'] ?>" class="btn btn-warning">Alterar</a>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
