<?php //
    session_start();   
    unset(
        $_SESSION['usuarioId'],
        $_SESSION['usuarioLogin'],
       
        $_SESSION['usuarioSenha']
    );   
    $_SESSION['logindeslogado'] = "Deslogado com sucesso";
    //redirecionar o usuario para a página de login
    header("Location: index.php");
?>

