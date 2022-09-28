<?php
/**
 * Connects to the database and returns the connection as $PDO.
 *
 * @return PDO
 */
function connectToDatabase(): PDO
{
    $host = 'db';
    $db = 'coffeecollection';
    $user = 'root';
    $password = 'password';

    $dsn = "mysql:host=$host;dbname=$db";

    $options = [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    try {
        $pdo = new PDO($dsn, $user, $password, $options);
    } catch (\PDOException $exception) {
        throw new \PDOException($exception->getMessage(), (int)$exception->getCode());
    }
    return $pdo;
}

/**
 * Takes the connection to the database ($PDO) and queries the database for all the information on a given coffee,
 * returns as an array of coffees.
 *
 * @param PDO $pdo
 * @return array
 */
function extractFromDB(PDO $pdo): array
{
    $query = $pdo->prepare(
        'SELECT `coffees`.`id`, `name`, `countries`.`country`, `processes`.`process`, `descriptor_one`, 
                `descriptor_two`, `descriptor_three`, `altitude`, `image`
                FROM `coffees` LEFT JOIN `countries` ON `coffees`.`origin` = `countries`.`id` LEFT JOIN `processes` 
                ON `coffees`.`process` = `processes`.`id`;');
    $query->execute();
    return $query->fetchAll();
}

/**
 * Takes the data from the database and generate HTML card element, returned as string.
 * If array from database in empty or values in database not set, throws exception.
 *
 * @param array $arrayFromDB
 * @return string
 * @throws Exception
 */
function generateCard(array $arrayFromDB): string
{
    if (count($arrayFromDB) === 0) {
        throw new Exception('No data from database');
    }
    if (
        !isset($arrayFromDB[0]['country']) ||
        !isset($arrayFromDB[0]['name']) ||
        !isset($arrayFromDB[0]['process']) ||
        !isset($arrayFromDB[0]['altitude']) ||
        !isset($arrayFromDB[0]['descriptor_one']) ||
        !isset($arrayFromDB[0]['descriptor_two']) ||
        !isset($arrayFromDB[0]['descriptor_three']) ||
        !isset($arrayFromDB[0]['image'])
    ) {
        throw new Exception('No value has been set');
    }
    $card = '';
    foreach ($arrayFromDB as $itemFromDB) {
        $card .=
            '<div class="card">'
            . '<div class="card-box">'
            . '<img class="card-image" src="' . $itemFromDB['image'] . '" alt="Stock image of coffee farm">'
            . '<div class="card-text">'
            . '<h3>' . $itemFromDB['country'] . '</h3>'
            . '<h1>' . $itemFromDB['name'] . '</h1>'
            . '<hr>'
            . '<h2>' . $itemFromDB['process'] . '</h2>'
            . '<h4>' . $itemFromDB['altitude'] . 'm</h4>'
            . '</div>'
            . '</div>'
            . '<div class="descriptors">'
            . '<p class="descriptor">' . $itemFromDB['descriptor_one'] . '</p>'
            . '<p class="descriptor">' . $itemFromDB['descriptor_two'] . '</p>'
            . '<p class="descriptor">' . $itemFromDB['descriptor_three'] . '</p>'
            . '</div>'
            . '</div>';
    }
    return $card;
}

/**
 * Takes the connection to the database ($PDO) and queries the database for the countries,
 * returns an array of countries
 *
 * @param PDO $pdo
 * @return array
 */
function extractOriginFromDB(PDO $pdo): array
{
    $query = $pdo->prepare('SELECT `id`,`country` FROM `countries`;');
    $query->execute();
    return $query->fetchAll();
}

/**
 * Takes the origin data from the database and generates HTML <option> element, returned as string.
 *
 * @param array $origins
 * @return string
 */
function generateOriginOptions(array $origins): string
{
    $option = '';
    foreach($origins as $origin){
        $option .= '<option value="' . $origin['id'] . '">' . $origin['country'] . '</option>';
    }
    return $option;
}

/**
 * Takes the connection to the database ($PDO) and queries the database for the processes,
 * returns an array of processes
 *
 * @param PDO $pdo
 * @return array
 */
function extractProcessFromDB(PDO $pdo): array
{
    $query = $pdo->prepare('SELECT `id`,`process` FROM `processes`;');
    $query->execute();
    return $query->fetchAll();
}

/**
 * Takes the process data from the database and generates HTML <option> element, returned as string.
 *
 * @param array $processes
 * @return string
 */
function generateProcessOptions(array $processes): string
{
    $option = '';
    foreach($processes as $process){
        $option .= '<option value="' . $process['id'] . '">' . $process['process'] . '</option>';
    }
    return $option;
}

function addToDatabase(array $newCoffee, PDO $pdo):void
{
    $query = $pdo->prepare('INSERT INTO `coffees` 
    (`name`, `origin`, `process`, `descriptor_one`, `descriptor_two`, `descriptor_three`, `altitude`)
    VALUES (:name, :origin, :process, :descriptor_one, :descriptor_two, :descriptor_three, :altitude);');
    $query->execute($newCoffee);
}