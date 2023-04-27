<?php
$nome=$_POST['nome'];
$endereco=$_POST['endereco'];
$cidade=$_POST['cidade'];
$telefone=$_POST['telefone'];
$estado=$_POST['estado'];



echo ($nome.'<br>');
echo ($endereco. '<br>');
echo ($cidade.'<br>');
echo ($telefone.'<br>');
echo ($estado);


$servername = "localhost";
$database = "cadastro";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn) {
    die("ERRO DE CONEXÃO COM BANCO DE DADOS: " . mysqli_connect_error());
}
echo '<br>'."Registro realizado com sucesso!!!" . '<br>';

$sql = "INSERT INTO alunos values (" . "''," . "'$nome'," . "'$endereco'," . "'$cidade'," . "'$telefone'," . "'$estado');";

if(mysqli_query($conn, $sql)) {
    echo "alunos cadastrado com sucesso!!!" . '<br>';
} else {
    echo "Erro no cadastro do alunos: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>