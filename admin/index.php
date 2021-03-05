<!DOCTYPE html>
<html>
    
    <head>
        
         <meta charset="utf-8">
  <title>Login - Admin</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/index.css"> 
    </head>
    
    <body>
        
       

<div class="login">
	<h1>Login</h1>
    <form method="post" action="../funcoes/validalogin.php">
    	<input type="text" name="usuario" placeholder="Usuario" required="required" />
        <input type="password" name="senha" placeholder="Senha" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Entrar.</button>
    </form>
</div>
        
   
        
</body>
</html>
