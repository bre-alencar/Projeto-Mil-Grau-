
<?php
    $servidor = "database-2.ckzxz5dtyqhg.sa-east-1.rds.amazonaws.com";
    $usuario = "admin";
    $senha = "123Milgrau";
    $dbname = "login";    
    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    if(!$conn){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{
        echo "Conexao realizada com sucesso";
    }      
?> 
