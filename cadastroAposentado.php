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
    
        echo "
    <html lang=\"pt\">
    <head>
        <title>Ative-se</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js\"></script>
    </head>
    <div class='container'>
    <br><br><br>
    <h1><div align='center'>Novo usuário cadastrado com sucesso</div><h1/>
    
    <form action='login.php'>
    <div class='butao' align='center'>
                <button class='btn btn-primary btn-md butao' type='submit'>Clique aqui para efetuar login</button>
                </div>
    </div>
    
        
    </form>";
    
    
        }
    catch(PDOException $e)
        {
        echo $sql . "<br>" . $e->getMessage();
        }
    
    $conn = null;
    ?>
 
?>