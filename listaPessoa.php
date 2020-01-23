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
  
include ('conecta.php');

//SELECT DAS INFORMAÇÕES NA TABELA pessoa
    
    $query = mysqli_query($cx,"SELECT ID, NOME, EMAIL FROM pessoa ");
    
?>
<table class="table table-hover">
  <caption>Lista de pessoas</caption>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
      <?php 
      while($pessoa = mysqli_fetch_assoc($query)) {
          
   echo' <tr>';
   echo'  <td>'.$pessoa["ID"].'</td>';
   echo'  <td>'.$pessoa["NOME"].'</td>';
   echo'  <td>'.$pessoa["EMAIL"].'</td>';
   echo'  <td><a href="editapessoa.php?valor=1&id_pessoa='.$pessoa["ID"].'" ><button class="btn" ><i style="color:red" class="fa fa-trash"></i></button></a> <a href="editapessoa.php?valor=2&id_pessoa='.$pessoa["ID"].'" ><button class="btn"><i style="color: green" class="fa fa-pencil-square-o"></i></button></a><a href="escolheestado.php?id_pessoa='.$pessoa["ID"].'&nome='.$pessoa["NOME"].'&email='.$pessoa["EMAIL"].'"><button class="btn"><i style="color: blue" class="fa fa-address-book-o"></i></button></a></td>';
   echo' </tr>';
    } 
    ?>
  </tbody>
</table> 

<a href="cadastro.php"><button type="button" class="btn btn-primary" value="1">Cadastrar Pessoa</button></a>