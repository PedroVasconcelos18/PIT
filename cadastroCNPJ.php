<?php 

if (!isset($_SESSION)) 
{                       //Verificar se a sessão não já está aberta.
session_start();
}
 
    
    $cnpj = $_POST["cnpj"];
    $email = $_POST["email"];
    $telefone = $_POST["phone"];
    $cep = $_POST["cep"];
    $nome = $_POST["nome"];
    $ramo = $_POST["ramo"];
    $senha = $_POST["senha"];

    function limpaCPF_CNPJ($cnpj){
        $cnpj = trim($cnpj);
        $cnpj = str_replace(".", "", $cnpj);
        $cnpj = str_replace(",", "", $cnpj);
        $cnpj = str_replace("-", "", $cnpj);
        $cnpj = str_replace("/", "", $cnpj);
        return $cnpj;
        }

        function limpaPhone($telefone){
            $telefone = trim($telefone);
            $telefone = str_replace(".", "", $telefone);
            $telefone = str_replace(",", "", $telefone);
            $telefone = str_replace("-", "", $telefone);
            $telefone = str_replace("/", "", $telefone);
            $telefone = str_replace("(", "", $telefone);
            $telefone = str_replace(")", "", $telefone);
            return $telefone;
            }
        
       $tel = limpaPhone($telefone); 
       $funcao = limpaCPF_CNPJ($cnpj);
  
      
    try {
        $conn = new PDO("mysql:host=localhost;dbname=pit", 'root', '');
    
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO empresa (Id, CNPJ, nome, CEP, telefone, ramoEmpresa, email, senha, tipo_usuario)
        VALUES (NULL, '$funcao', '$nome','$cep','$tel','$ramo','$email', MD5('$senha'), 2)";
    
        $conn->exec($sql);
    include "header.php";
    include "nav.php";
        echo "
    <div class='container'>
    <br><br><br>
    <h1><div align='center'>Novo usuário cadastrado com sucesso</div>
    
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