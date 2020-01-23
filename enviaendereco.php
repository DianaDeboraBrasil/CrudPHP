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
	
//INSERT INTO PARA O ENDERERCO
 $id_pessoa = $_GET['id_pessoa'];;
 $estado = $_GET['estado'];
 $endereco = $_GET['endereco'];
 $numero = $_GET['numero'];
 $cidade = $_GET['cidade'];
 $bairro = $_GET['bairro'];
 $complemento = $_GET['complemento'];

echo'<BR><BR><div id="body"  class="body" style="display:block;">';
echo'<b><H2><center>DESEJA INFORMAR MAIS UM ENDEREÇO?</center></H2></b>';
echo'<BR><BR>';
echo'<b><H2><center><a href="endereco.php?id_pessoa='.$id_pessoa.'&estado='.$estado.'"><button type="button" value="SIM" class="btn btn-primary" /> SIM</button></a> <input type="button"  onclick="mensagem(this.value)" class="btn btn-primary" value="NÃO" /></div>';

 //if IMPEDE QUE AS VARIÁVEIS INSIRAM VALORES VAZIOS NO BANCO 
   
		//FOR PARA QUE O INSERT OCORRA SÓ UMA VEZ
	for($i=0; $i<1; $i++){$insert = mysqli_query($cx, "INSERT INTO endereco (ID_pessoa, UF, CIDADE, BAIRRO, ENDERECO, NUMERO, COMPLEMENTO) values('{$id_pessoa}', '{$estado}', '{$cidade}', '{$bairro}', '{$endereco}', '{$numero}','{$complemento}')") ;
        }



echo '<div id="msg" class="msg" style="display:none;">';
echo '<b><H2><center>OBRIGADO POR CADASTRAR SEUS ENDEREÇOS</center></H2></b>';

$dx = mysqli_close($cx);
echo '</div>';
?>	

</html>





