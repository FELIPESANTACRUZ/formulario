<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>
    <h1>Cadastrar Mensagem</h1>

    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>

    <form method="POST" action="proc_cad_msg.php">
        <div class="container my-4">
  <div class="form-col">
  <div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome completo">
  </div>
    <div class="form-group">
      <label for="inputEmail4">Email:</label>
      <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
    </div>
  <div class="form-group">
    <label for="assunto">Assunto:</label>
    <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Assunto da mensagem">
  </div>

  <!-- <h2>VOU CONSUMIR UMA API ABAIXO DO VIACEP</h2> -->
  <!-- <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Cidade</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputEstado">Estado</label>
      <select id="inputEstado" class="form-control">
        <option selected>Escolher...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputCEP">CEP</label>
      <input type="text" class="form-control" id="inputCEP">
    </div>
  </div> -->
      <div class="form-group">
          <h1>Mensagem:</h1>
      <label for="mensagem">
            <textarea name="mensagem" rows="10" cols="100"></textarea><br>
        </label>
        </div>
        <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Confirmo a publicação de minhas mensagens
      </label>
    </div><br><br>
  </div>
  <input name="SendCadCont" type="submit" class="btn btn-primary" value="Cadastrar"></input>
  </div>
</form>

<!-- LISTAR MENSAGENS ENVIADAS INICIO-->
<h1>Listar Mensagem</h1>
    <?php
 include_once './connection.php';
    //SQL para selecionar os registros
    $result_msg_cont = "SELECT * FROM mensagens_contatos ORDER BY id ASC";

    //seleciona os registros
    $resultado_msg_cont = $conn->prepare($result_msg_cont);
    $resultado_msg_cont->execute();

    while($row_msg_cont = $resultado_msg_cont->fetch(PDO::FETCH_ASSOC)){
        echo "ID" . $row_msg_cont['id']."<hr />";
        echo "Nome" . $row_msg_cont['nome']."<hr />";
        echo "E-mail" . $row_msg_cont['email']."<hr />";
        echo "Assunto" . $row_msg_cont['assunto']."<hr />";
    }
    ?>
    <!-- LISTAR MENSAGENS ENVIADAS FIM-->


</body>

</html