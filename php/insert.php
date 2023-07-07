<?php
include('conexao.php');

$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$data = $_POST['data'];

$data_formatada = date('Y-m-d', strtotime($data));
$stmt = $conn->prepare("INSERT INTO contas (descricao, valor, validade) VALUES (:descricao, :valor, :data_formatada)");

$stmt->bindParam(':descricao', $descricao);
$stmt->bindParam(':valor', $valor);
$stmt->bindParam(':data_formatada', $data_formatada);

try{
    $stmt->execute();
    header('LOCATION: ../index.php');
}
catch (PDOException $e) {
    echo "Erro ao salvar os dados: " . $e->getMessage();
}
    
