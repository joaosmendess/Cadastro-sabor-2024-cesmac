<?php
$produtos = [
    [
        "nome" => "Snack Saudável",
        "descricao" => "Snack feito com frutas desidratadas",
        "preco" => 15.90
    ],
    [
        "nome" => "Refeição Congelada Fitness",
        "descricao" => "Refeição balanceada, rica em proteínas",
        "preco" => 25.99
    ],
    [
        "nome" => "Suco Natural Detox",
        "descricao" => "Suco natural à base de frutas e vegetais",
        "preco" => 8.75
    ]
];
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
        <?php foreach ($produtos as $index => $produto): ?>
            <div class="produto">
                <a href="detalhe_produto.php?index=<?= $index ?>" class="produto-nome">
                    <?= htmlspecialchars($produto["nome"]) ?>
                </a>
                <p class="produto-descricao"><?= htmlspecialchars($produto["descricao"]) ?></p>
                <p class="produto-preco">Preço: R$ <?= number_format($produto["preco"], 2, ',', '.') ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
