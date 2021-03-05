<?php

 
   include('conexao.php');
  
   session_start();
   

   $user_check = $_SESSION['usuarioLogin'];
   
  
   
   $login_session = $_SESSION['usuarioLogin'];
   
   if(!isset($_SESSION['usuarioLogin'])){
      header("location:index.php");
   }

?>

