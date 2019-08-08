<?php 

    session_start();


    $nome = $_POST["nome"];
    $end = $_POST["end"];
    $sexo = $_POST["sexo"];
    $func = $_POST["func"];
    $bolsa = $_POST["bolsa"];
    $benefi = $_POST["benefi"];
    $CN = $_POST["CN"];
    $horaT = $_POST["horaT"];
    $obs = $_POST["obs"];
    $durac = $_POST["durac"];
    $catego = $_POST["catego"];
    $vagas = $_POST["vagas"];
    $contato = $_POST["contato"];
    $Empresa_ID = $_SESSION["Empresa_ID"];
 
  
      
    try {
        $conn = new PDO("mysql:host=localhost;dbname=pit", 'root', '');
    
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO aposentadoautonomo (Id, numeroVagas, endereco, Sexo, valorBolsa, Contato, conhecimentosNecessarios, Beneficios, HorarioTrabalho, nomeEmpresa, funcaoExercida, DuracaoVaga, categoria, Empresa_ID)
        VALUES (NULL, '$vagas', '$end','$sexo','$bolsa','$bolsa', '$contato', '$CN', '$benefi', '$horaT', '$nome', '$func', '$durac', '$catego', '$Empresa_ID')";
    
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
        <div align='center'>Nova vaga cadastrada com sucesso</div>
        
        <form action='empregos.php'>
        <div class='butao' align='center'>
                    <button class='btn btn-primary btn-md butao' type='submit'>Clique aqui para ver as vagas</button>
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