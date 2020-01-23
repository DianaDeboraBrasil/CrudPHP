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


    $id_end = $_GET['id_end'];

    $valor = $_GET['valor'];

   
    //if PARA CAPTURAR A FUNÇÃO UPDATE OU DELETE
    if ($valor == 2) {
        echo '<H1><center>Edite o seu endereço</center></H1>';
        echo '<table class="table">';
        echo '<caption>Lista de endereços</caption>';
        echo '<thead>';
        echo '<tr>';
        echo '  <th scope="col">ID</th>';
        echo '  <th scope="col">Pessoa</th>';
        echo '  <th scope="col">Endereço</th>';
        echo '  <th scope="col">Numero</th>';
        echo '  <th scope="col">Bairro</th>';
        echo '  <th scope="col">Complemento</th>';
        echo '  <th scope="col">Cidade</th>';
        echo '  <th scope="col">Estado</th>';
        echo '  <th scope="col"></th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        $select = mysqli_query($cx, "SELECT ID, ID_pessoa, UF, CIDADE, BAIRRO, ENDERECO, NUMERO, COMPLEMENTO FROM endereco WHERE ID = '{$id_end}'");
        while ($endereco = mysqli_fetch_assoc($select)) {
            echo '<form name="edita" action="updateendereco.php">';
            echo ' <tr>';
            echo '  <td><input class="form-control" type="text" name="id_end" id="id_end" value="'. $endereco["ID"].'" readonly="true" size="2"/></td>';
            echo '  <td>' . $endereco["ID_pessoa"] . ' </td>';
            echo '  <td><input class="form-control" type="text" name="endereco" id="endereco" value="'. $endereco["ENDERECO"] . '" size="40" /></td>';
            echo '  <td><input class="form-control" type="text" name="numero" id="numero" value="' . $endereco["NUMERO"] . '" size="4" /></td>';
            echo '  <td><input class="form-control" type="text" name="bairro" id="bairro"  value="' . $endereco["BAIRRO"] . '" size="20"/></td>';
            echo '  <td><input class="form-control" type="text" name="complemento" id="complemento"  value="' . $endereco["COMPLEMENTO"] . '" size="8" /></td>';
            echo '  <td><input class="form-control" type="text" name="cidade" id="cidade"  value="' . $endereco["CIDADE"] . '" size="10" /></td>';
            echo '  <td><input class="form-control" type="text" name="estado" id="estado"  value="' . $endereco["UF"] . '" size="3"/></td>';
            echo '  <td><button type="submit" class="btn btn-primary" >Editar Endereço</button></td>';
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
        echo '  <th scope="col">Pessoa</th>';
        echo '  <th scope="col">Endereço</th>';
        echo '  <th scope="col">Numero</th>';
        echo '  <th scope="col">Bairro</th>';
        echo '  <th scope="col">Complemento</th>';
        echo '  <th scope="col">Cidade</th>';
        echo '  <th scope="col">Estado</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        $select = mysqli_query($cx, "SELECT ID, ID_pessoa, UF, CIDADE, BAIRRO, ENDERECO, NUMERO, COMPLEMENTO FROM endereco WHERE ID = '{$id_end}'");
        while ($endereco = mysqli_fetch_assoc($select)) {
            echo '<form name="apagaendereco" action="deleteendereco.php">';
            echo ' <tr>';
            echo '  <td><input class="form-control" type="text" name="id_end" id="id_end" value="' . $endereco["ID"].'" readonly="true" size="2"/></td>';
            echo '  <td>' . $endereco["ID_pessoa"] . '</td>';
            echo '  <td>' . $endereco["ENDERECO"] . '</td>';
            echo '  <td>' . $endereco["NUMERO"] . '</td>';
            echo '  <td>' . $endereco["BAIRRO"] . '</td>';
            echo '  <td>' . $endereco["COMPLEMENTO"] . '</td>';
            echo '  <td>' . $endereco["CIDADE"] . '</td>';
            echo '  <td>' . $endereco["UF"] . '</td>';
            echo '  <td><button type="submit" class="btn btn-primary" style="color:red">EXCLUIR ENDEREÇO</button></td>';
            echo ' </tr></form>';
        }
        
    }
    ?>

</html>