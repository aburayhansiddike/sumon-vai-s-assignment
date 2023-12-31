<?php

require_once 'functions.php';

if (! isset($_POST)) {
    header('Location dashboard.php');
}

$data = $_POST;
$index = $data['edit'];
unset($data['edit']);

$database = get_database();

$table = $database['books'] ?? [];

if (empty($index)) {
    $table[] = $data;

    $_SESSION['success'] = "Successfully stored book";
} else {
    $title = $table[$index]['title'];
    $table[$index] = $data;

    $_SESSION['success'] = "Successfully updated '$title'";
}

$database['books'] = array_values($table);

set_database($database);

header('Location: dashboard.php');