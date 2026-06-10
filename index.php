<?php

include("servicos.php");

$categoria = $_GET["categoria"] ?? "";

if ($categoria != "") {
    $servicosExibidos = filtrarPorCategoria($servicos, $categoria);
} else {
    $servicosExibidos = $servicos;
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Hair Studio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php include("paginas/header.php"); ?>

    <main>

        <section class="hero-banner">
            <div class="container">

                <div class="row align-items-center">

                    <div class="col-lg-6">

                        <h1>MAIS QUE UM CORTE, UMA EXPERIÊNCIA</h1>

                        <p class="lead">
                            Estilo, conforto e precisão em cada atendimento.
                        </p>

                        <div class="text-center text-lg-start">
                            <a href="#" class="btn btn-danger btn-lg">
                                Agendar Online
                            </a>
                        </div>

                    </div>

                    <div class="col-lg-6 text-center">

                        <img
                            src="img/arielmukoon.png"
                            alt="Barbearia"
                            class="img-fluid hero-img">

                    </div>

                </div>

            </div>
        </section>

        <section id="servicos" class="servicos py-5">

            <div class="container">

                <div class="text-center mb-5">

                    <span class="subtitulo">
                        SERVIÇOS
                    </span>

                    <h2 class="titulo-section">
                        Serviços com Ariel
                    </h2>

                </div>

                <div class="text-center mb-4">

                    <a href="index.php#servicos" class="btn btn-secondary">
                        Todos
                    </a>

                    <a href="index.php?categoria=cabelo#servicos" class="btn btn-danger">
                        Cabelo
                    </a>

                    <a href="index.php?categoria=barba#servicos" class="btn btn-danger">
                        Barba
                    </a>

                    <a href="index.php?categoria=sobrancelha#servicos" class="btn btn-danger">
                        Sobrancelha
                    </a>

                </div>

                <div class="row g-4">

                    <?php if (empty($servicosExibidos)): ?>

                        <div class="col-12 text-center">
                            <p>Nenhum serviço encontrado.</p>
                        </div>

                    <?php else: ?>

                        <?php foreach ($servicosExibidos as $servico): ?>

                            <div class="col-lg-3 col-md-6">

                                <div class="card-servico">

                                    <h3>
                                        <?= $servico["nome"] ?>
                                    </h3>

                                    <div class="tempo">
                                        <?= $servico["tempo"] ?>
                                    </div>

                                    <div class="preco">
                                        <?= formatarPreco($servico["preco"]) ?>
                                    </div>

                                    <a href="https://wa.me/5544999259339"
                                        class="btn btn-danger mt-3">

                                        Agendar
                                        <i class="bi bi-whatsapp me-2"></i>

                                    </a>

                                </div>

                            </div>

                        <?php endforeach; ?>

                    <?php endif; ?>

                </div>

            </div>

        </section>

    </main>

    <?php include("paginas/footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>