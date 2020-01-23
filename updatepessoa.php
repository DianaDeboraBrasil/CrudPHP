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
	
//INSERT INTO PARA O ENDERERCO
 $nome = $_GET['nome'];
 $email = $_GET['email'];
 $id_pessoa = $_GET['id_pessoa'];
 
        $update = "UPDATE pessoa SET NOME ='{$nome}', EMAIL ='{$email}' WHERE ID='{$id_pessoa}' ";
        $query=mysqli_query($cx, $update);
       header ("Location:listaPessoa.php");
        

?>	

</html>





