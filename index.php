
<!doctype html>
<html lang="pt-br">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <header>
    <h1>Controle de contas</h1>
    <ul class="nav justify-content-center nav">
        <li class="nav-item">
            <a class="nav-link active" href="consultar.php" aria-current="page">Consultar</a>
        </li>

    </ul>
  </header>
  <main>
    <div class="container">
    <form action="php/insert.php" method="POST">
    <div>
        <label for="Descricao">Descrição da conta</label>
        <input type="text" name="descricao" required>
    </div>
    <div>
        <label for="Valor">Valor R$</label>
        <input type="number" name="valor" required>
    </div>
    <div>
        <label for="validade">Validade</label>
        <input type="date" name="data" required>
    </div>
        <button type="submit">ENVIAR</button>
    </form>
    </div>
  </main>
  <footer>
   <h8>Feito por Wagner Torres! :)</h8>
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>