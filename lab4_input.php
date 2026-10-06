<?php

$input = file_get_contents('php://input');

$data = json_decode($input);

if ($data) {
    echo "Username: " . $data->username . "<br>";
    echo "Password: " . $data->password;
} else {
    echo "No JSON data received.";
}

?>