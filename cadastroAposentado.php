<?php 

    session_start();


    $cpf = $_POST["cpf"];
    $dataNasc = $_POST["dataNasc"];
    $nome = $_POST["nome"];
    $cep = $_POST["cep"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $num = $_POST["num"];

 
  
      
    try {
        $conn = new PDO("mysql:host=localhost;dbname=pit", 'root', '');
    
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO aposentadoautonomo (Id, CPF, DataNasc, nome, CEP, email, senha, numero)
        VALUES (NULL, '$cpf', '$dataNasc','$nome','$cep','$email',MD5('$senha'), '$num')";
    
        $conn->exec($sql);
    
        $_SESSION['idvovo'] = $conn->lastInsertId();
        
        header("Location: curriculo.php");
    
        }
        
    catch(PDOException $e)
        {
        echo $sql . "<br>" . $e->getMessage();
       
        }
    
    $conn = null;
    ?>
 
?>