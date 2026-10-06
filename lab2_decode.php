<?php

$json = '{"name":"Maria","age":21,"email":"maria@example.com"}';

// Convert JSON to PHP object
$object = json_decode($json);

// Convert JSON to associative array
$array = json_decode($json, true);

echo "Object Name: " . $object->name . "<br>";
echo "Object Email: " . $object->email . "<br><br>";

echo "Array Name: " . $array["name"] . "<br>";
echo "Array Email: " . $array["email"];

?>