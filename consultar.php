<?php
include('php/conexao.php');

$bd = $conn->prepare('SELECT id_contas, descricao, valor, validade FROM contas ORDER BY validade ');
$soma = $conn->prepare('SELECT SUM(valor) AS soma_total FROM contas');
try {
    $bd->execute();
    $soma->execute();
} catch (PDOException $e) {
    echo "Erro ao consultar" . $e->getMessage();
}


?>
<!doctype html>
<html lang="pt-br">

<head>
    <title>Consultar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js
"></script>
    <link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css
" rel="stylesheet">

    <link rel="stylesheet" href="css/consulta.css">



</head>

<body>
    <header>
        <h1>Consultas de contas</h1>
    </header>
    <main>
        <div class="table-responsive">
            <table class="table  table-borderless">
                <thead class="">

                    <tr>
                        <th>Descrição</th>
                        <th>Valor R$</th>
                        <th>Validade</th>
                        <th>Ação</th>
                    </tr>
                </thead>


                <?php foreach ($bd as $row) { ?>
                    <tbody class="table-group-divider">
                        <tr class="">
                            <td scope="row"><?php echo $row['descricao'] ?></td>
                            <td scope="row">R$<?php echo $row['valor'] ?></td>
                            <td scope="row"><?php echo $row['validade'] ?></td>
                            <td>
                                <a onclick="alert(<?php echo $row['id_contas'] ?>)">
                                    <img class="svg" src="img/delete.svg" alt="">
                                </a>
                            </td>
                        </tr>
                    <?php } ?>

                    </tbody>
                    <tfoot>

                    </tfoot>
            </table>
            <div class="total">
                <h3>Total</h3>
                <?php foreach ($soma as $row) { ?>
                    <p scope="row">R$<?php echo $row['soma_total'] ?></p>
                <?php } ?>
            </div>
            <button><a href="index.php">VOLTAR</a></button>
        </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script>
        function alert(id) {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'Você tem certeza?',
                text: "Você não poderá reverter!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sim, deletar!',
                cancelButtonText: 'Não, cancelar!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    
                    const deleteUrl = `php/delete.php?id=${id}`;

                    
                    window.location.href = deleteUrl;
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swalWithBootstrapButtons.fire(
                        'Cancelado',
                        'Sua fatura está salva :)',
                        'error'
                    )
                }
            })
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>