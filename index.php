<!doctype html>
<html lang="en">
  <head> 
<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

<meta charset='utf-8'>
      <title>CADASTRO</title>
      <script src="js/jquery-3.4.1.js"></script>
      <script src="js.js" type="text/javascript"></script>
      <script src="js/bootstrap.js"></script>
      <script src="js/bootstrap.min.js"></script>

</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="?go=#" id="go">MENU</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
     <a class="nav-link" href="?go=pessoa" id="pessoa">Lista de Pessoas <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?go=listaendereco" id="listaendereco">Lista de Endereços</a>
      </li>
    </ul>
  </div>
</nav>
<?PHP
if (!empty($_GET['go'])){
 switch ($_GET['go']) {
    case "pessoa":
        $pagina = "listaPessoa.php";
        break;  
    case "listaendereco":
        $pagina = "listaendereco.php";
        break;
    default:
        $pagina = "cadastro.php";
    
 }
}
else{
    $pagina = "cadastro.php";
}
?>
<div class="" id="">
<?php
echo '<iframe src="'.$pagina.'" width="98%" height="500"></iframe>';
?>
</div>
</html>
