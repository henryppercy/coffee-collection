<?php
require_once ('functions.php');

$sanitisedData = sanitiseFormData($_POST);

if (isset($sanitisedData['name']) &&
    isset($sanitisedData['origin']) &&
    isset($sanitisedData['process']) &&
    isset($sanitisedData['descriptor_one']) &&
    isset($sanitisedData['descriptor_two']) &&
    isset($sanitisedData['descriptor_three']) &&
    isset($sanitisedData['altitude'])
) {
    $pdo = connectToDatabase();
    addToDatabase($sanitisedData, $pdo);
    header('location: index.php');
}