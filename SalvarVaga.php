<?php 


if (!isset($_SESSION)) {//Verificar se a sessão não já está aberta.
  session_start();
  
}

try{
$nome = $_POST["nome"];
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
$cep = $_POST["cep"];
$num = $_POST["numero"];
$idEmpresa = $_SESSION['idEmpresa'];
}
catch(PDOException $ex){
echo "Erro nas váriaveis";
}  

    function limpaCPF_CNPJ($contato){
        $contato = trim($contato);
        $contato = str_replace(".", "", $contato);
        $contato = str_replace(",", "", $contato);
        $contato = str_replace("-", "", $contato);
        $contato = str_replace("/", "", $contato);
        $contato = str_replace("(", "", $contato);
        $contato = str_replace(")", "", $contato);
        return $contato;
        }
        
    $funcao = limpaCPF_CNPJ($contato);



  
      
    try {
        $conn = new PDO("mysql:host=localhost;dbname=pit", 'root', '');
    
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO vagas (ID, numeroVagas, Sexo, valorBolsa, Contato, conhecimentosNecessarios, 
        Beneficios, Observacoes, HorarioTrabalho, nomeEmpresa, funcaoExercida, DuracaoVaga, categoria, CEP, numeroCasa, Empresa_ID)
        VALUES (NULL, '$vagas', '$sexo','$bolsa', '$funcao', '$CN', '$benefi','$obs','$horaT', '$nome', '$func', '$durac', '$catego','$cep','$num','$idEmpresa')";
    
        $conn->exec($sql);


        include 'header.php'; 
        include 'nav.php';
        echo "
        <html lang=\'pt\'>
        
        <div class='container'>
        <br />
        <h1><div align='center'><h1>Nova vaga cadastrada com sucesso</h1></div>
        
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
 
