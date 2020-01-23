<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- <link rel='stylesheet' href='style.css'> -->

  <meta charset='utf-8'>
  <title>CADASTRO</title>
  <script src="js.js" type="text/javascript"></script>
  <script src="js/jquery-3.4.1.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.min.js"></script>
  

  <?PHP

  include('conecta.php');
  ?>

  <div id="form" name="form">
    <form name="cadastro" action="enviapessoa.php">

      <div class="card">
        <div class="card-header">Cadastro de Pessoas</div>
        <div class="card-body">
          <fieldset>

            <input class="form-control" name="ident" type="hidden" id="ident" size="9">

            <div class="row">
              <div class="form-group">
                <label for="nome">Nome</label>
                <input name="nome" size="60" type="text" class="form-control" id="nome" Onkeyup="formatanome(this.value)" autocomplete="on" required />
              </div>
            </div>

            <div class=" row">
              <div class="form-group">
                <label for="email">E-mail:</label>
                <input name="email" size="30" type="email" class="form-control" id="email" Onkeyup="formataemail(this.value) " required />
              </div>
            </div>

            <button type="submit" class="btn btn-primary" value="1">Enviar Cadastro</button>
    </form>

    </fieldset>

  </div>
  </div>
  </div>

</html>