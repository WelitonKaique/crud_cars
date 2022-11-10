<?php 
    include "conexao.php";

    $id = $_POST["id"];

    $deletando_cadastros = "DELETE FROM pessoas WHERE id = '$id'";

     $query_cadastros = mysqli_query($connect, $deletando_cadastros);

     header ('Location: listagem.php');

?>