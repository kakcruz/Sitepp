<?php
session_start();
include_once("conexao.php");



$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$id_login = $_SESSION['usuarioId'];

                 
                 
                 
                 



$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);

switch ($acao) {
   
   
        
        
       
        
        
        case 'form_excluir':
 
            ?>

<div>
    
    <style>
        
        .botoesexcluir{
             padding: 10px;
           border: 1px solid #000;
           text-decoration:none;
           color:#fff;
           font-size: 20px;
            
        }
        
        
    </style>
   
    
    <center> <a class="botoesexcluir" style="background-color: #49A55E" href="../funcoes/excluirteste.php?id=<?php echo $id ?>">Excluir</a>
    <a class="botoesexcluir" style="background-color: #F32D2D" href="">Cancelar</a> </center>
    
    
    
    
</div>


           
        <?php
            
            break;
                
}    

 mysqli_close($conn);