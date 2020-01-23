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


    $id_pessoa = $_GET['id_pessoa'];

    $valor = $_GET['valor'];

   
    //if PARA CAPTURAR A FUNÇÃO UPDATE OU DELETE
    if ($valor == 2) {
        echo '<H1><center>Edite o seu endereço</center></H1>';
        echo '<table class="table">';
        echo '<caption>Lista de endereços</caption>';
        echo '<thead>';
        echo '<tr>';
        echo '  <th scope="col">ID</th>';
        echo '  <th scope="col">Nome</th>';
        echo '  <th scope="col">Email</th>';
        echo '<th></th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        $select = mysqli_query($cx, "SELECT ID, NOME, EMAIL FROM pessoa WHERE ID = '{$id_pessoa}'");
        while ($pessoa = mysqli_fetch_assoc($select)) {
            echo '<form name="edita" action="updatepessoa.php">';
            echo ' <tr>';
            echo '  <td><input class="form-control" type="text" name="id_pessoa" id="id_pessoa" value="' . $pessoa["ID"].'" readonly="true" size="2"/></td>';
            echo '  <td><input class="form-control" type="text" name="nome" id="nome" value="' . $pessoa["NOME"] . '" size="40" /></td>';
            echo '  <td><input class="form-control" type="text" name="email" id="email" value="'. $pessoa["EMAIL"].'" size="20" /></td>';
            echo '  <td><button type="submit" class="btn btn-primary" >Editar Pessoa</button></td>';
            echo ' </tr></form>';
        }
        
        
    }
    if ($valor == 1) {        
        echo '<H2><center>TEM CERTEZA QUE DESEJA DELETAR ESTE REGISTRO?</center></H2>';
        echo '<table class="table">';
        echo '<caption>Lista de endereços</caption>';
        echo '<thead>';
        echo '<tr>';
        echo '  <th scope="col">ID</th>';
        echo '  <th scope="col">Nome</th>';
        echo '  <th scope="col">Email</th>';
        echo '<th></th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        $select = mysqli_query($cx, "SELECT ID, NOME, EMAIL FROM pessoa WHERE ID = '{$id_pessoa}'");
        while ($pessoa = mysqli_fetch_assoc($select)) {
            echo '<form name="edita" action="deletepessoa.php">';
            echo ' <tr>';
            echo '  <td><input class="form-control" type="text" name="id_pessoa" id="id_pessoa" value="' . $pessoa["ID"].'" readonly="true" size="2"/></td>';
            echo '  <td><input class="form-control" type="text" name="nome" id="nome" value="' . $pessoa["NOME"] . '" Onkeyup="formatanome(this.value)" readonly="true" size="40" /></td>';
            echo '  <td><input class="form-control" type="text" name="email" id="email" value="'. $pessoa["EMAIL"].'" size="20" readonly="true"/></td>';
            echo '  <td><button type="submit" class="btn btn-primary">Excluir Pessoa</button></td>';
            echo ' </tr></form>';
        }
        
    }
    ?>

</html>