<?php

require_once 'headers.php';
require_once 'conexao.php';

date_default_timezone_set('America/Sao_Paulo');
@session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"));

        $nomePet = $con->real_escape_string($data->nomePet);
        $pesoPet = $con->real_escape_string($data->pesoPet);
        $racaPet = $con->real_escape_string($data->racaPet);

        $sql = $con->query("INSERT INTO pet (nomePet, pesoPet, racaPet, idTutor) VALUES ('$nomePet', '$pesoPet', '$racaPet', '$idTutor')");

        if ($sql) {
            $data->id = $con->insert_id;
            exit(json_encode($data));
        } else {
            exit(json_encode(array('status' => 'Pet não cadastrado')));
        }
    } else {
        // O tutor não foi encontrado, retorne um erro
        exit(json_encode(array('status' => 'Tutor não encontrado')));
    }

?>