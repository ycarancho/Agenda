<?php

session_start();
include_once("config/url.php");
include_once("config/conection.php");
$contact = [];
$id;
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
