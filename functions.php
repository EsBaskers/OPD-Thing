<?php
function dd($value) {
echo "<pre>";
    var_dump($value);
echo "</pre>";
die(); // kill.
}

function redirectIfNotFound($location = "/"){
    http_response_code(404);
    header("Location: $location", 302);
    exit(); // die(), but nicer
}
?>