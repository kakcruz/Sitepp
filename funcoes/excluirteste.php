<?php

session_start();
include_once("conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

  $sql2     = "delete from candidatos where id='$id'";
 $executa = mysqli_query($conn,$sql2);
 
 if($executa){
     
     
     echo"<script language='javascript' type='text/javascript'>window.location.href='../admin/painel.php'</script>";
     
     
 }else{
     
     echo"<script language='javascript' type='text/javascript'>alert('Não foi possivel excluir o teste, tente novamente!');window.location.href='../admin/painel.php'</script>";

     
 }

 mysqli_close($conn);
 
 ?>