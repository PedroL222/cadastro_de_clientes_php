<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <main>
        <section id="lista_clientes" class="d-flex w-100 p-4 justify-content-evenly">
            <?php 
                include_once("./config.php");
                
                $sql_listar_clientes = "SELECT * FROM T_cliente";
                $listar_clientes = $dbh->prepare($sql_listar_clientes);
                $listar_clientes->execute();

                foreach ($listar_clientes as $cliente){
                    $cliente_id = $cliente["idT_cliente"];
                    $cliente_nome = $cliente["cli_nome"];
                    $cliente_idade = $cliente["cli_idade"];
                    $cliente_servico = $cliente["cli_servico"];
                    $cliente_status_servico = $cliente["cli_status_servico"];
                
            ?>

            <!-- Criando clientes de acordo com o que vier do banco de dados -->

                <div class="container_cliente">
                    <div>
                        <div class="info_cliente m-1 p-2">Nome: <?php echo $cliente_nome ?></div>
                        <div class="info_cliente m-1 p-2">Idade: <?php echo $cliente_idade ?></div>
                        <div class="info_cliente m-1 p-2">Serviço: <?php echo $cliente_servico ?></div>
                        <div class="info_cliente m-1 p-2">Status do Serviço: <?php echo $cliente_status_servico ?></div>
                        <div class="row justify-content-evenly">
                            <div class="col-2 justify-content-center">
                                <a href="./view/editar_cli.php?id=<?php echo $cliente_id ?>" class="btn_editar btn"><i class="bi bi-pencil"></i></a>
                            </div>
                            <div class="col-2 justify-content-center">
                                <a href="#" class="btn_excluir btn"><i class="bi bi-x-lg"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>

        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>