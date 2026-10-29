
<?php
require("conexao.php");

$sql = "SELECT * FROM servicos";
$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Empresa de Limpeza e Higienização</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- MENU -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">

            <a class="navbar-brand" href="#inicio">
                EmpresaDeLimpezaEHigienizacao
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#inicio">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sobre">Sobre nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#servicos">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contato">Contato</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <!-- INÍCIO -->
    <section id="inicio">
        <div class="container">
            <h1>Limpeza e Higienização</h1>

            <p>Deixamos seu ambiente limpo e agradável!</p>

            <a href="#contato" class="btn btn-primary btn-lg">
                Entre em contato
            </a>
        </div>
    </section>

    <!-- SOBRE NÓS -->
    <section id="sobre" class="container secao">
        <div class="row align-items-center">

            <div class="col-md-6">
                <h2>Sobre nós</h2>

                <p>
                    A Empresa de Limpeza e Higienização oferece serviços
                    de limpeza para residências e estabelecimentos comerciais.
                    Nosso objetivo é proporcionar ambientes limpos, organizados
                    e agradáveis para nossos clientes.
                </p>
            </div>

            <div class="col-md-6">
                <a href="https://unsplash.com/s/photos/cleaning" target="_blank" rel="noopener noreferrer">
                    <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?auto=format&fit=crop&w=900&q=80"
                        alt="Profissionais realizando serviços de limpeza" class="img-fluid rounded imagem-sobre">
                </a>
            </div>

        </div>
    </section>

    <!-- SERVIÇOS -->
    <section id="servicos" class="secao-servicos">
        <div class="container">

            <h2 class="text-center mb-4">Nossos serviços</h2>

            <div class="row">

                <?php if ($resultado && mysqli_num_rows($resultado) > 0) { ?>

                    <?php while ($servico = mysqli_fetch_assoc($resultado)) { ?>

                        <div class="col-md-4 mb-4">
                            <div class="card h-100 shadow-sm">

                                <?php
                                $nomeServico = strtolower($servico['nome']);

                                if (strpos($nomeServico, 'residencial') !== false) {
                                    $imagem = 'https://images.unsplash.com/photo-1581578731548-c64695cc6952?auto=format&fit=crop&w=700&q=80';
                                    $referencia = 'https://unsplash.com/s/photos/house-cleaning';
                                    $descricaoImagem = 'Limpeza residencial';
                                } elseif (strpos($nomeServico, 'comercial') !== false) {
                                    $imagem = 'https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=700&q=80';
                                    $referencia = 'https://unsplash.com/s/photos/office-cleaning';
                                    $descricaoImagem = 'Ambiente comercial';
                                } else {
                                    $imagem = 'https://images.unsplash.com/photo-1563453392212-326f5e854473?auto=format&fit=crop&w=700&q=80';
                                    $referencia = 'https://unsplash.com/s/photos/cleaning';
                                    $descricaoImagem = 'Serviço de higienização';
                                }
                                ?>

                                <a href="<?php echo $referencia; ?>" target="_blank" rel="noopener noreferrer">
                                    <img src="<?php echo $imagem; ?>" alt="<?php echo $descricaoImagem; ?>"
                                        class="card-img-top imagem-servico">
                                </a>

                                <div class="card-body text-center">
                                    <h5 class="card-title">
                                        <?php echo htmlspecialchars($servico['nome']); ?>
                                    </h5>

                                    <p class="card-text">
                                        <?php echo htmlspecialchars($servico['descricao']); ?>
                                    </p>

                                    <p class="preco">
                                        R$
                                        <?php echo number_format($servico['preco'], 2, ',', '.'); ?>
                                    </p>
                                </div>

                            </div>
                        </div>

                    <?php } ?>

                <?php } else { ?>

                    <p class="text-center">
                        Nenhum serviço cadastrado no momento.
                    </p>

                <?php } ?>

            </div>
        </div>
    </section>

    <!-- CONTATO -->
    <section id="contato" class="container secao">
        <h2 class="text-center mb-4">Entre em contato</h2>

        <form action="cadastroContato.php" method="POST">

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" name="telefone" id="telefone" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="assunto" class="form-label">Assunto</label>
                <input type="text" name="assunto" id="assunto" class="form-control" required>
            </div>

            <div class="mb-3">
                <label
 