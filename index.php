<html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EmpresaDeLimpezaEHigienizacao</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                EmpresaDeLimpezaEHigienizacao
            </a>

            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="#inicio">Início</a>
                <a class="nav-link" href="#servicos">Serviços</a>
                <a class="nav-link" href="#contato">Contato</a>
            </div>
        </div>
    </nav>

    <section id="inicio" class="inicio text-center">
        <div class="container">
            <h1>Limpeza e Higienização</h1>
            <p>Deixamos seu ambiente limpo e agradável!</p>
            <a href="#contato" class="btn btn-primary">
                Peça seu orçamento
            </a>
        </div>
    </section>

    <section id="sobre" class="container py-5">
        <h2>Sobre nós</h2>

        <p>
            A Empresa de Limpeza é especializada em serviços de limpeza
            e higienização de ambientes residenciais e comerciais.
            Nosso objetivo é oferecer qualidade, organização e cuidado,
            garantindo espaços mais limpos, agradáveis e seguros para
            nossos clientes. Trabalhamos com dedicação e responsabilidade
            para proporcionar satisfação e confiança em cada serviço realizado.
        </p>
    </section>

    <section id="servicos" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Nossos serviços</h2>

            <div class="row">

                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5>Limpeza residencial</h5>

                            <p>Limpeza de casas e apartamentos.</p>

                            <p class="text-success">
                                A partir de R$ 150,00
                            </p>

                            <a href="#contato" class="btn btn-primary">
                                Solicitar orçamento
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5>Limpeza comercial</h5>

                            <p>Limpeza de lojas e escritórios.</p>

                            <p class="text-success">
                                A partir de R$ 200,00
                            </p>

                            <a href="#contato" class="btn btn-primary">
                                Solicitar orçamento
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5>Higienização</h5>

                            <p>Higienização de ambientes.</p>

                            <p class="text-success">
                                A partir de R$ 100,00
                            </p>

                            <a href="#contato" class="btn btn-primary">
                                Solicitar orçamento
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="contato" class="container py-5">
        <h2 class="text-center">Entre em contato</h2>

        <form action="cadastroContato.php" method="POST" class="formulario">

            <label class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control mb-3" required>

            <label class="form-label">E-mail</label>
            <input type="email" name="email" class="form-control mb-3" required>

            <label class="form-label">Telefone</label>
            <input type="text" name="telefone" class="form-control mb-3" required>

            <label class="form-label">Serviço desejado</label>

            <select name="assunto" class="form-select mb-3" required>
                <option value="">Selecione</option>
                <option value="Limpeza residencial">Limpeza residencial</option>
                <option value="Limpeza comercial">Limpeza comercial</option>
                <option value="Higienização">Higienização</option>
            </select>

            <label class="form-label">Mensagem</label>
            <textarea name="mensagem" class="form-control mb-3"
                rows="4" required></textarea>

            <button type="submit" class="btn btn-primary">
                Enviar
            </button>

        </form>
    </section>

    <footer class="bg-primary text-white text-center p-3">
        <p>Empresa de Limpeza e Higienização</p>
    </footer>

</body>

</html>