<?php
     
     include 'conexao.php';

         
     $nome = $_POST['nome'];
     $email = $_POST['email'];
     $telefone = $_POST['telefone'];
     
     $recebendo_cadastros = "INSERT INTO pessoas 
     VALUES ('', '$nome', '$email', '$telefone')";

     $query_cadastros = mysqli_query($connect, $recebendo_cadastros);

     header('location: listagem.php');


?>
