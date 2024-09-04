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

if (isset($_GET['index']) && isset($produtos[$_GET['index']])) {
    $produto = $produtos[$_GET['index']];
} else {
    echo "Produto não encontrado.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Produto - <?= htmlspecialchars($produto["nome"]) ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Detalhes do Produto</h1>
        <div class="produto">
            <h2 class="produto-nome"><?= htmlspecialchars($produto["nome"]) ?></h2>
            <p class="produto-descricao"><?= htmlspecialchars($produto["descricao"]) ?></p>
            <p class="produto-preco">Preço: R$ <?= number_format($produto["preco"], 2, ',', '.') ?></p>
        </div>
        <div class="voltar">
            <a href="produtos.php" class="btn">Voltar à lista de produtos</a>
        </div>
    </div>
</body>
</html>
