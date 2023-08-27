<?php
$estudantes = $_REQUEST["estudantes"]; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de estudantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<header class="container-fluid text-center bg-dark text-white p-3">
    <h2> Semana da Acessibilidade</h2>
</header>

<body>
    <div class="container-fluid bg-secondary vh-100 pt-4">
       
    <div class=" d-grid col-2 mx-auto">
        <a href="/aula3/?controller=Estudante&acao=salvar" class="btn btn-success">Cadastrar Estudante</a>
    </div>
    <br>
        <table class="container table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Idade</th>
                </tr>
            </thead>
            <?php foreach ($estudantes as $estudanteAtual) { ?>
                <tr>
                    <td>
                        <?php echo $estudanteAtual["id"]; ?>
                    </td>
                    <td>
                        <?php echo $estudanteAtual["nome"]; ?>
                    </td>
                    <td>
                        <?php echo $estudanteAtual["idade"]; ?>
                    </td>
                </tr>
            <?php } ?>
        </table>

        <img class="rounded mx-auto d-block col-4 "
            src="https://s3.static.brasilescola.uol.com.br/be/2022/09/dia-da-luta-pcd.jpg" class="img-thumbnail"
            alt="Representação ilustrada de grupo de pessoas e um cachorro, com objetivo de inclusão social">
    </div>

    <footer class="container-fluid text-center bg-dark p-5"></footer>

    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous">
    </script>
</body>

</html>