<?php
    include('conexao.php');

    $id = $_GET['id'];


    $stmt = $conn->prepare('DELETE FROM contas WHERE id_contas = :id_contas');

    $stmt->bindParam(':id_contas', $id);
    try{
        $stmt->execute();
        header("LOCATION: ../consultar.php");
    }catch(PDOException $e){
        echo "ERRO AO DELETAR ".$e->getMessage();
    }

    ?>