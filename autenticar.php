<?php


if (!isset($_SESSION)) {//Verificar se a sessão não já está aberta.
    session_start();
  }


    $formacad = $_POST["formacad"];
    $reshab = $_POST["reshab"];
    $formcomp = $_POST["formcomp"];
    $expp = $_POST["exppro"];
    $phone = $_POST["phone"];
    $id_aposentado = $_SESSION['idvovo'];
   


    try {
        $con = new PDO("mysql:host=localhost;dbname=pit", 'root', '');

        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO curriculo (Id, expProfssi, resumoHabili, formAcadem, formCompl, telefone, AposentadoAutonomo_ID)
        VALUES (NULL, '$expp', '$reshab','$formacad','$formcomp','$phone','$id_aposentado')";
        $con->exec($sql);
        echo "
    <html lang='pt'>
    <head>
        <title>Ative-se</title>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css/%22%3E
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js/%22%3E'</script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js/%22%3E</script>
    </head>
    <div class='container'>
    <br><br><br>
    <h1><div align='center'>Currículo cadastrado com sucesso</div><h1/>

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