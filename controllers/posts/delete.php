<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $db->query("DELETE FROM fruits WHERE id = :id", [
        "id" => $_POST["id"]
    ]);
}
header("Location: /");
exit();