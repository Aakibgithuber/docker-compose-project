<?php
// Set the response content type to JSON
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: http://localhost:3000');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');

require "./app/config.php";
require_once "./app/todos.php";

$todoModel = new Todo();
$response = $todoModel->getTodos(10);
// Create a response array

// Encode the response array as JSON
$jsonResponse = json_encode($response);

// Output the JSON response
echo $jsonResponse;
