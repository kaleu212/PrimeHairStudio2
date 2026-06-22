<?php

include("conexao.php");

$sql = "SELECT * FROM galeria";
$resultado = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Galeria - Prime Hair Studio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-dark">

    <?php include("paginas/header.php"); ?>

    <div class="container py-5">

        <h2 class="text-center text-white mb-5">
            Galeria de Cortes
        </h2>

        <div class="row">

            <?php while ($corte = $resultado->fetch_assoc()): ?>

                <div class="col-md-4 mb-4">

                    <div class="card h-100 shadow">

                        <img
                            src="img/galeria/<?= $corte['imagem']; ?>"
                            class="card-img-top"
                            alt="<?= $corte['titulo']; ?>"
                            style="height:300px; object-fit:cover;">

                        <div class="card-body">

                            <h5 class="card-title">
                                <?= $corte['titulo']; ?>
                            </h5>

                            <p class="card-text">
                                Categoria:
                                <?= ucfirst($corte['categoria']); ?>
                            </p>

                        </div>

                    </div>

                </div>

            <?php endwhile; ?>

        </div>

    </div>
    <?php include("paginas/footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>