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
    <script src="js.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-3.4.1.min.js"></script>
    <link rel='stylesheet' href='style.css'>

<?php

include('conecta.php');

$id_pessoa = $_GET['id_pessoa']== '' ? '': $_GET['id_pessoa'];

	echo ' <fieldset>';
	echo ' <form name="localidade" id="local" action="enviaendereco.php">';
	echo '  <div class="card">
      <div class="card-header">Cadastro de Endereços</div>
      <div class="card-body">        ';
	echo ' <div id="lista">';
	if(!empty($id_pessoa)){
	echo '
	 <div class="row">	
       <div class="col-sm-1 form-group">
	     <label for="id_pessoa">Id Pessoa</label>
	     <input name="id_pessoa" type="text" class="form-control" id="id_pessoa" value="' . $id_pessoa . '" Onkeyup="formataend(this.value)" autocomplete="off" size="4" readonly="true" " >    
      </div>
	</div>
	';
	}
	
	echo ' <div class="row">
		<div class="col-sm-4 form-group">
  			<label for="endereco">Logradouro</label>
  			<input name="endereco" type="text" class="form-control" id="endereco"  Onkeyup="formataend(this.value)" autocomplete="off" size="60" required " >    
		</div>
		<div class="col-sm-1 form-group">
  			<label for="numero">Número</label>
  			<input name="numero" type="text" class="form-control" id="numero"  autocomplete="off" size="10" required />    
		</div>
		<div class="col-sm-4 form-group">
		 <label for="complemento">Complemento</label>
		 <input name="complemento" type="text" class="form-control" id="complemento"  autocomplete="off" size="60" autocomplete="off" size="30" Onkeyup="formatacomplemento(this.value)" />    
	   </div>
	</div>
	<div class="row">
		<div class="col-sm-4 form-group">
  			<label for="bairro">Bairro</label>
  			<input name="bairro" type="text" class="form-control" id="bairro"  autocomplete="off" size="60" Onkeyup="formatabairro(this.value)" required />    
		</div>
		
';

echo'<div class="col-sm-4 form-group">';
echo '<label for="cidade">Cidade</label><select class="form-control" name="cidade" id="cidade" required>';
$uf = $_GET['estado'];

if(!empty($uf)){
$select = mysqli_query($cx, "SELECT CIDADE FROM cidade WHERE UF = '{$uf}'");
	while($cidade = mysqli_fetch_assoc($select)) {
    echo'<option value="'.$cidade['CIDADE'].'">'.$cidade['CIDADE'].'</option>';
  }
}
else{
    echo'<option value=""></option>';
  }

echo'</select>';

echo'</div>';
echo'<input type="hidden" name="estado" id="estado" value="'.$uf.'" readonly="true">';

	echo '  <button type="submit" class="btn btn-primary">Enviar</button></form>';
	echo ' </div>';
	echo ' 	</fieldset>';
	echo ' </div>
      </div>
      </div>    ';
	echo ' </html>';
	?>