<?php
$query = "SELECT * FROM fruits";
$params = [];

if (isset($_GET['search']) && $_GET['search'] !== '') {
    $query .= " WHERE name LIKE :search";
    $params['search'] = "%" . $_GET['search'] . "%";
}

$fruits = $db->query($query, $params)->fetchAll();

require "views/posts/index.view.php";