<?php
// Inclue o arquivo de  configuração (conexão com banco de dados)
include "config.php";
// Verifica se a conexão com o banco foi bem-sucedida
if (!$conn){
// Se a conexão falhar, exibe uma mensagem de erro e encerra a execução
    die("Falha na conexão: " . mysqli_connect_error());
}

//recebe os dados do formulário
$nome = 'Lukinha';
$dtnasc = '2007-08-11';
$celular = '(81) 991641439';
$email = 'LUKINHA@gmail.com';
$ra = '3321';
$endereco = 'Rua da glória';
$num_end = '06';
$bairro = 'caetei';
$cidade = 'abrel';


//cria variável para inserir o registro
$sql = "INSERT INTO `leitores`
(`Nome`, `DtNasc`, `Celular`, `Email`, `RA`, `Endereco`, `NumEnd`, `Bairro`, `CidadeUF`) 
VALUES
('$nome','$dtnasc','$celular','$email','$ra','$endereco','$num_end','$bairro','$cidade')";

// Executa a consulta SQL, Falhar, exibe o erro do banco de dados
$query = mysqli_query(mysql: $conn,query: $sql) or
die(mysqli_error(mysql: $conn));

if($query){
    echo "<center>";
    echo "Cadastro realizado com sucesso!!<br>";
    echo "a href = 'index.php'><button title='Home pago'>Voltar<button></a>";
    echo "</center>";
   
}
else{
    echo "<center>";
    echo "a href='index.php'><button tilte='Home pago'>Voltar<button></a>";
    echo "</center>";
}

?>