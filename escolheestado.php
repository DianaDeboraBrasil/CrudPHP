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
  
include ('conecta.php');

//INSERT DAS INFORMAÇÕES NA TABELA pessoa

 $nome = $_GET['nome'];
 $email = $_GET['email'];

//MOSTRA A SELEÇÃO 
		$select = mysqli_query($cx, "SELECT ID, NOME, EMAIL FROM pessoa WHERE NOME = '{$nome}' ");
     		while($pessoa = mysqli_fetch_assoc($select)) {
				echo '<H1><center><b>Nome:</b> '. $pessoa['NOME'].'</H1></center><H2><center><b>E-mail:</b> '.$pessoa['EMAIL'].'</center></H2><BR>';
				echo '<b>ID Pessoa: </b>'.$id_pessoa= $pessoa['ID'];
			}
	 echo '<form action="endereco.php"><div class="col-sm-2 form-group"><label for="cidade">Escolha o seu Estado</label>';
	 echo'   <select class="form-control" name="estado" id="estado"  autocomplete="off" required>
				<option value="">UF</option>
		   		<option value="AC">AC</option>
		   		<option value="AL">AL</option><option value="AP">AP</option><option value="AM">AM</option><option value="BA">BA</option>
		   		<option value="CE">CE</option><option value="DF">DF</option><option value="ES">ES</option><option value="GO">GO</option><option value="MA">MA</option>
		  		<option value="MT">MT</option><option value="MS">MS</option><option value="MG">MG</option><option value="PA">PA</option><option value="PB">PB</option>
		  		<option value="PR">PR</option><option value="PE">PE</option><option value="PI">PI</option><option value="RJ">RJ</option><option value="RN">RN</option>
		   		<option value="RS">RS</option><option value="RO">RO</option><option value="RR">RR</option><option value="SC">SC</option><option value="SP">SP</option>
		  		<option value="SE">SE</option><option value="TO">TO</option>
		  </select>';
		echo' <input type="hidden" value="'.$id_pessoa.'" name="id_pessoa" id="id_pessoa" />';
		echo'<BR><button type="submit" class="btn btn-primary">Enviar</button></div></form>';
	

?>
</html>