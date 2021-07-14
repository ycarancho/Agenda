<?php

session_start();
require_once("conection.php");
require_once("url.php");
$contact = [];
$id;
$data = $_POST;


//MODIFICAÇOES NO BANCO 
if (!empty($data)) {
    //CRIAÇÃO
    if ($data["type"] === "create") {
        $name = $data["name"];
        $phone = $data["phone"];
        $observation = $data["observation"];

        $query = "INSERT INTO contacts (name, phone, observation) VALUES (:name, :phone, :observation)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observation", $observation);


        try {
            $stmt->execute();
            $_SESSION["msg"] = "Cadastrado com sucesso !";
        } catch (PDOException $e) {
            //Erro de conexão
            $error = $e->getMessage();
            echo "Erro: $error";
        }
    }
    // REDIRECT HOME 

    header("location:" . $BASE_URL . "../index.php");

    //SELEÇÃO DE DADOS     
} else {

    if (!empty($_GET)) {
        $id = $_GET["id"];
    }
    //Retorna o dado de um contato
    if (!empty($id)) {
        $query = "SELECT * FROM contacts WHERE id = :id";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $contact = $stmt->fetch();
    } else {

        // Retorna todos os contatos 
        $query = " SELECT * FROM contacts";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $contacts = $stmt->fetchAll();
    }
}

//Encerrando conection

$conn = null;
