<?php

//conectar ao banco de dados
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "foodismarketing";

//criando conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

//verificar a conexão
if($conn->connect_error) {
    die("Conexão falhou".$conn->connect_error);
}

//verificar se o formulario foi enviado
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    //inserir os dados no banco de dados
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUE ('$nome', '$email', '$senha')";
    
    if($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso realize o seu login";
   } else {
    echo "Erro: ".$sql. "<br>" .$conn->error;
   }
}
//fechar a conexão
$conn->close();
?>;