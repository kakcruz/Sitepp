<?php

session_start();
include_once("conexao.php");
$nome_usuario = mysqli_real_escape_string($conn, $_POST['nome']);
$email_usuario = mysqli_real_escape_string($conn, $_POST['email']);
$bairro_usuario = mysqli_real_escape_string($conn, $_POST['bairro']);
$telefone_usuario = mysqli_real_escape_string($conn, $_POST['telefone']);




        $result_login = "INSERT INTO candidatos(nome, email, telefone, bairro) values('$nome_usuario', '$email_usuario', '$telefone_usuario','$bairro_usuario')";
        $resultado_login = mysqli_query($conn, $result_login);
        


        if (mysqli_affected_rows($conn) != 0) {
                           echo"<script language='javascript' type='text/javascript'>alert('Obrigado pelo interesse, recebemos seus dados de contato');window.location.href='../index.html'</script>";

          
        } else {
            
                                       echo"<script language='javascript' type='text/javascript'>alert('Houve um erro, por favor tente novamente!');window.location.href='../index.html'</script>";

           
        }
   
    

mysqli_close($conn);
?>

