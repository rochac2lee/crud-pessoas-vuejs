<?php

$hostname = 'localhost';        // O nome do host do seu servidor de banco de dados. - exemplo: localhost 
$database = 'cadastro-pessoas'; // Nome da base de dados
$username = 'root';             // Nome de usuário usado para conectar ao banco de dados - exemplo: root
$password = '123456';           // A senha usada para conectar ao banco de dados - exemplo: 123456

try {
	$conn = new PDO("mysql:host=$hostname;dbname=$database", "$username", "$password");
	$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	echo 'Houve um Erro na conexao com o banco de dados: ' . $e -> getMessage();
}