<?php 

    session_start();


    $cnpj = $_POST["cnpj"];
    $email = $_POST["email"];
    $telefone = $_POST["phone"];
    $cep = $_POST["cep"];
    $nome = $_POST["nome"];
    $ramo = $_POST["ramo"];
    $senha = $_POST["senha"];


 
  
      
    try {
        $conn = new PDO("mysql:host=localhost;dbname=pit", 'root', '');
    
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO empresa (Id, CNPJ, nome, CEP, telefone, ramoEmpresa, email, senha)
        VALUES (NULL, '$cnpj', '$nome','$cep','$telefone','$ramo','$email', MD5('$senha'))";
    
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
    <br />
    <div align='center'>Novo usuário cadastrado com sucesso</div>
    
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