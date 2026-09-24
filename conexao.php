<?php

$host = "Seu ID";
$senha = "Sua SENHA";
$usuario = "Seu USUÁRIO";
$banco = "Nome do seu BANCO";

$pdo = new PDO(
    "pgsql:host=$host;port=5432;dbname=$banco",
    $usuario,
    $senha
);

