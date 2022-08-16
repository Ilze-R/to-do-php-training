<?php

$todoName = $_POST['todo_name'] ?? '';
$todoName = trim($todoName);

if($todoName){
    if(file_exists('todo.json')){
        $json = file_get_contents('todo.json')? : [];
        $jsonArray = json_decode($json, true);
    }else{
        $jsonArray = [];
    }


    $jsonArray[$todoName] = ['completed' => false];
    file_put_contents('todo.json', json_encode($jsonArray, JSON_PRETTY_PRINT));
}

echo $todoName;

if(isset($_POST[$jsonArray])){
    $output = $todo -> $jsonArray;
    echo json_encode($output);
}

if(isset($_POST['todo_name'])){
    $todoName = $_POST['todo_name'];
   echo $jsonArray;
 }


header('Location: index.php');

/*header('Content-Type: application/json');

$todo = [];

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('DATA_FILE_NAME', 'data.json');

$data = [];

if (file_exists(DATA_FILE_NAME)) {
    $content = file_get_contents(DATA_FILE_NAME);
    $data = json_decode($content, true);
    if (!is_array($data)) {
        $data = [];
    }
}

$output = ['status' => false];

if (
    isset($_GET['main_input']) &&
    is_string($_GET['main_input'])
) {
    if (
        isset($_POST['todo_input']) &&
        is_string($_POST['todo_input'])
    ) {
    
        if (!in_array($_POST['todo_input'], $data)) {
            $data[] = $_POST['todo_input'];

            $content = json_encode($data);
            file_put_contents(DATA_FILE_NAME, $content);
            $output = [
                'checked' => true,
                'message' => 'todo is outputed'
                'delete' => false
            ];
        }
    }
}

echo json_encode($output, JSON_PRETTY_PRINT);*/




