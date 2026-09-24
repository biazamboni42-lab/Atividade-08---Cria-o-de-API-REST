<?php

$host = "192.168.10.12";
$senha = "senha67";
$usuario = "postgres";
$banco = "manutencao";

$pdo = new PDO(
    "pgsql:host=$host;port=5432;dbname=$banco",
    $usuario,
    $senha
);

