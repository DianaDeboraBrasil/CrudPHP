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
   

<?PHP

include ('conecta.php');
	
//update PARA O ENDERERCO
echo $estado = $_GET['estado'];
echo $cidade = $_GET['cidade'];
echo $bairro = $_GET['bairro'];
echo $endereco = $_GET['endereco'];
echo $numero = $_GET['numero'];
echo $complemento = $_GET['complemento'];
echo $id_end = $_GET['id_end'];


$update = "UPDATE endereco SET UF='{$estado}', CIDADE='{$cidade}', BAIRRO='{$bairro}', ENDERECO='{$endereco}', NUMERO='{$numero}', COMPLEMENTO='{$complemento}' WHERE ID='{$id_end}'";
$query=mysqli_query($cx, $update);
        header ("Location:listaendereco.php");
        

?>	

</html>





