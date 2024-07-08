<?php
    require "src/conexao-bd.php";
    require "src/Modelo/Produto.php";
    require "src/Repositorio/ProdutoRepositorio.php";

    // Inicialização do carrinho de compras
    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = [];
    }

    // Repositório de produtos
    $produtosRepositorio = new ProdutoRepositorio($pdo);
    $dadosBurguers = $produtosRepositorio->opcoesBurguers();
    $dadosBatatas = $produtosRepositorio->opcoesBatatas();
    $dadosSobremesas = $produtosRepositorio->opcoesSobremesas();
    $dadosBebidas = $produtosRepositorio->opcoesBebidas();

    // Adicionar item ao carrinho
    if (isset($_POST['adicionarAoCarrinho'])) {
        $produtoId = $_POST['produtoId'];
        $quantidade = $_POST['quantidade'];

        // Verificar se o produto já está no carrinho
        if (isset($_SESSION['carrinho'][$produtoId])) {
            $_SESSION['carrinho'][$produtoId]['quantidade'] += $quantidade;
        } else {
            // Adicionar novo item ao carrinho
            $_SESSION['carrinho'][$produtoId] = [
                'produto' => $produtosRepositorio->buscar($produtoId),
                'quantidade' => $quantidade
            ];
        }
    }
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="img/Pioneiro-Photoroom.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>X-Burguer - Cardápio</title>
</head>
<body>
    <main>
        <section class="container-banner">
            <div class="container-texto-banner">
                <img src="img/Pioneiro-Photoroom.png" class="logo" alt="logo-serenatto">
            </div>
        </section>
        <h2>Cardápio Digital</h2>

        <!-- Seção Burguers -->
        <section class="container-cafe-manha">
            <div class="container-cafe-manha-titulo">
                <h3>Burgers</h3>
            </div>
            <div class="container-cafe-manha-produtos">
                <?php foreach ($dadosBurguers as $batata):?>
                    <div class="container-produto">
                        <div class="container-foto">
                            <img src="<?= $batata->getImagemDiretorio() ?>">
                        </div>
                        <p><?= $batata->getNome()?></p>
                        <p><?= $batata->getDescricao()?></p>
                        <p><?= $batata->getPrecoFormatado() ?></p>
                        <!-- Formulário para adicionar ao carrinho -->
                        <form action="index.php" method="post">
                            <input type="hidden"  name="produtoId" value="<?= $batata->getId() ?>">
                            <input type="number"  name="quantidade" value="1" min="1">
                            <input type="submit"  name="adicionarAoCarrinho" value="Adicionar ao Carrinho">
                        </form>
                    </div>
                <?php endforeach; ?>
                
            </div>
        </section>
        <section class="container-cafe-manha">
            <div class="container-cafe-manha-titulo">
                <h3>Batatas</h3>
            </div>
            <div class="container-cafe-manha-produtos">
                <?php foreach ($dadosBatatas as $batata):?>
                    <div class="container-produto">
                        <div class="container-foto">
                            <img src="<?= $batata->getImagemDiretorio() ?>">
                        </div>
                        <p><?= $batata->getNome()?></p>
                        <p><?= $batata->getDescricao()?></p>
                        <p><?= $batata->getPrecoFormatado() ?></p>
                        <!-- Formulário para adicionar ao carrinho -->
                        <form action="index.php" method="post">
                            <input type="hidden"  name="produtoId" value="<?= $batata->getId() ?>">
                            <input type="number"  name="quantidade" value="1" min="1">
                            <input type="submit"  name="adicionarAoCarrinho" value="Adicionar ao Carrinho">
                        </form>
                    </div>
                <?php endforeach; ?>
                
            </div>
        </section>
        <section class="container-cafe-manha">
            <div class="container-cafe-manha-titulo">
                <h3>Sobremesas</h3>
            </div>
            <div class="container-cafe-manha-produtos">
                <?php foreach ($dadosSobremesas as $sobremesa):?>
                    <div class="container-produto">
                        <div class="container-foto">
                            <img src="<?= $sobremesa->getImagemDiretorio() ?>">
                        </div>
                        <p><?= $sobremesa->getNome()?></p>
                        <p><?= $sobremesa->getDescricao()?></p>
                        <p><?= $sobremesa->getPrecoFormatado() ?></p>
                        <!-- Formulário para adicionar ao carrinho -->
                        <form action="index.php" method="post">
                            <input type="hidden"  name="produtoId" value="<?= $sobremesa->getId() ?>">
                            <input type="number" name="quantidade" value="1" min="1">
                            <input type="submit"  name="adicionarAoCarrinho" value="Adicionar ao Carrinho">
                        </form>
                    </div>
                <?php endforeach; ?>
                
            </div>
        </section>
        <section class="container-cafe-manha">
            <div class="container-cafe-manha-titulo">
                <h3>Bebidas</h3>
            </div>
            <div class="container-cafe-manha-produtos">
                <?php foreach ($dadosBebidas as $bebida):?>
                    <div class="container-produto">
                        <div class="container-foto">
                            <img src="<?= $bebida->getImagemDiretorio() ?>">
                        </div>
                        <p><?= $bebida->getNome()?></p>
                        <p><?= $bebida->getDescricao()?></p>
                        <p><?= $bebida->getPrecoFormatado() ?></p>
                        <!-- Formulário para adicionar ao carrinho -->
                        <form action="index.php" method="post">
                            <input type="hidden"  name="produtoId" value="<?= $bebida->getId() ?>">
                            <input type="number"  name="quantidade" value="1" min="1">
                            <input type="submit"  name="adicionarAoCarrinho" value="Adicionar ao Carrinho">
                        </form>
                    </div>
                <?php endforeach; ?>
                
            </div>
        </section>

        <section class="container-admin-banner">
             <form action="gerador-pdf.php" method="post">
               <input type="submit" class="botao-cadastrar" value="Baixar Cardápio PDF"/>
             </form>
             <form method="post" action="login_process.php"></form>
              <input type="button" class="botao-cadastrar" value="Login Como Admin" onclick="window.location.href='login.php'">
              <br>
              </form>

           </section>
       

        <!-- Seção para exibir o Carrinho de Compras -->
        <section class="container-almoco">
            <h3>Carrinho de Compras</h3>
            <?php if (empty($_SESSION['carrinho'])): ?>
                <p>O carrinho está vazio.</p>
            <?php else: ?>
                <ul>
                    <?php foreach ($_SESSION['carrinho'] as $item): ?>
                        <li>
                           <p><?= $item['produto']->getNome() ?> -
                           <p>Quantidade: <?= $item['quantidade'] ?></p>
                           <p>Total: <?= $item['produto']->getPreco() * $item['quantidade'] ?></p> 
                           <p>Carrinho:<?=var_dump($_SESSION['carrinho'])?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </section>
    </main>
</body>
</html>
