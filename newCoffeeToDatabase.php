<?php
require_once ('functions.php');

if (isset($_POST['name']) &&
    isset($_POST['origin']) &&
    isset($_POST['process']) &&
    isset($_POST['descriptor_one']) &&
    isset($_POST['descriptor_two']) &&
    isset($_POST['descriptor_three']) &&
    isset($_POST['altitude'])
) {
    $pdo = connectToDatabase();
    addToDatabase($_POST, $pdo);
    header('location: index.php');
}




