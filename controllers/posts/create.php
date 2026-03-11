<?php
require "Validator.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $errors = [];

    if (!Validator::string($_POST["content"], max:40)) {
        $errors["name"] = "Nosaukumam jābūt no 2 līdz 40 rakstzīmēm.";
    }

    if (empty($errors)) {
        $db->query("INSERT INTO fruits (name) VALUES (:name)", [
            "name" => $_POST["content"]
        ]);
        header("Location: /");
        exit();
    }
}

require "views/posts/create.view.php";