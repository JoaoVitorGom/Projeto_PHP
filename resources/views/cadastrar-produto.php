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
    <link rel="stylesheet" href="css/form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="img/icone-serenatto.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Kingdom of Burguer - Cadastrar Produto</title>
</head>
<body>
<main>
    <section class="container-admin-banner">
        <img src="img/Pioneiro-Photoroom.png" class="logo-admin" alt="logo-serenatto">
        <h1>Cadastro de Produtos</h1>
    </section>
    <section class="container-form">
        <form method="post" action="cadastrar-produto-process.php">

            <label for="nome">Nome</label>
            <input name="nome" type="text" id="nome" placeholder="Digite o nome do produto" required>
            <div class="container-radio">
                <div>
                    <label for="burguers">Burguer</label>
                    <input type="radio" id="burguers" name="tipo" value="Burger" checked>
                </div>
                <div>
                    <label for="batatas">Batata</label>
                    <input type="radio" id="batatas" name="tipo" value="Batata">
                </div>
                <div>
                    <label for="sobremesas">Sobremesa</label>
                    <input type="radio" id="sobremesas" name="tipo" value="Sobremesa">
                </div>
                <div>
                    <label for="bebidas">Bebida</label>
                    <input type="radio" id="bebidas" name="tipo" value="Bebida">
                </div>
            </div>
            <label for="descricao">Descrição</label>
            <input name="descricao" type="text" id="descricao" placeholder="Digite uma descrição" required>

            <label for="preco">Preço</label>
            <input name="preco" type="text" id="preco" placeholder="Digite uma descrição" required>

            <label for="imagem">Envie uma imagem do produto</label>
            <input type="file" name="imagem" accept="image/*" id="imagem" placeholder="Envie uma imagem">

            <input name="cadastro" type="submit" class="botao-cadastrar" value="Cadastrar produto"/>
            <br>
        </form>
    
    </section>
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js" integrity="sha512-Rdk63VC+1UYzGSgd3u2iadi0joUrcwX0IWp2rTh6KXFoAmgOjRS99Vynz1lJPT8dLjvo6JZOqpAHJyfCEZ5KoA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/index.js"></script>
</body>
</html>