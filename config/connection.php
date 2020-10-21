<?php

	$hostname = 'localhost';
	$username = 'root';
	$password = '123456';
	$database = 'cadastro-pessoas';

try {
	$conn = new PDO("mysql:host=$hostname;dbname=$database", "$username", "$password");
	$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	echo 'Houve um Erro na conexao com o banco de dados: ' . $e -> getMessage();
}