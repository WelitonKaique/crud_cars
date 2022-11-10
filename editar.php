<?php
     
     include "conexao.php";

     $id = $_POST["id"];
     $email = $_POST["email"];
     $nome = $_POST["nome"];
     $telefone = $_POST["telefone"];

     $editando_cadastros = "UPDATE pessoas SET nome = '$nome', email = '$email', telefone= '$telefone' 
     WHERE id = '$id'";

     $query_cadastros = mysqli_query($connect, $editando_cadastros);

     header ('Location: index.php');

     




?>