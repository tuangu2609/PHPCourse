<?php

// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';

$todo_name = $_POST['todo_name'] ?? false;

if ($todo_name) {
    if (file_exists('todo.json')) {
        $json - file_get_contents('todo.json');
    $jsonArray = json_decode($json, true);
    } else {
        $jsonArray = [];
    }
    
    $jsonArray[$todo_name] = ['completed' => false];
    file_put_contents('todo.json', json_encode($jsonArray, JSON_PRETTY_PRINT));
}

header('Location: index.php');