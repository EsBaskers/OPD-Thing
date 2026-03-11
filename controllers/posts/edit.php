<?php
require "Validator.php";

$id = $_GET['id'] ?? null;
if (!$id) {
    redirectIfNotFound();
}
$fruit = $db->query("SELECT * FROM fruits WHERE id = :id", ["id" => $id])->fetch();

if (!$fruit) {
    redirectIfNotFound();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $errors = [];
    
    if (!Validator::string($_POST["name"], 2, 40)) {
        $errors["name"] = "Nosaukumam jābūt no 2 līdz 40 rakstzīmēm.";
    }

    if (empty($errors)) {
        $db->query("UPDATE fruits SET name = :name WHERE id = :id", [
            "name" => $_POST["name"],
            "id" => $_POST["id"]
        ]);
        header("Location: /");
        exit();
    }
}

require "views/posts/edit.view.php";