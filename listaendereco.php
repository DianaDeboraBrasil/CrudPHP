<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Add icon library -->
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

  <meta charset='utf-8'>
  <?php

  include('conecta.php');

  //SELECT DAS INFORMAÇÕES NA TABELA endereco

  $select = mysqli_query($cx, "SELECT ID, ID_pessoa,	UF,	CIDADE,	NUMERO, BAIRRO,	ENDERECO,	COMPLEMENTO FROM endereco ");

  ?>
  <table class="table">
    <caption>Lista de endereços</caption>
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Pessoa</th>
        <th scope="col">Endereço</th>
        <th scope="col">Número</th>
        <th scope="col">Bairro</th>
        <th scope="col">Complemento</th>
        <th scope="col">Cidade</th>
        <th scope="col">Estado</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($endereco = mysqli_fetch_assoc($select)) {

        echo ' <tr>';
        echo '  <td>' . $id_end = $endereco["ID"];
        echo '  </td>';
        echo '  <td>' . $endereco["ID_pessoa"] . ' </td>';
        echo '  <td>' . $endereco["ENDERECO"] . ' </td>';
        echo '  <td>' . $endereco["NUMERO"] . ' </td>';
        echo '  <td>' . $endereco["BAIRRO"] . ' </td>';
        echo '  <td>' . $endereco["COMPLEMENTO"] . ' </td>';
        echo '  <td>' . $endereco["CIDADE"] . ' </td>';
        echo '  <td>' . $endereco["UF"] . ' </td>';
        echo '  <td><a href="editaendereco.php?valor=1&id_end=' . $id_end . '" ><button class="btn" ><i style="color:red" class="fa fa-trash"></i></button></a> <a href="editaendereco.php?valor=2&id_end=' . $id_end . '" ><button class="btn"><i style="color: green" class="fa fa-pencil-square-o"></i></button></a></td>';
        echo ' </tr>';
      }

      ?>
    </tbody>
  </table>

</html>