<?php
/**
 * Connects to the database and returns the connection as $PDO
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
 * returns as an array
 *
 * @param PDO $pdo
 * @return array
 */
function extractFromDB(PDO $pdo): array
{
    $query = $pdo->prepare(
        'SELECT `coffees`.`id`, `name`, `countries`.`country`, `processes`.`process`, `descriptors`, `altitude`
                FROM `coffees` LEFT JOIN `countries` ON `coffees`.`origin` = `countries`.`id` LEFT JOIN `processes` 
                 ON `coffees`.`process` = `processes`.`id`;');
    $query->execute();
    return $query->fetchAll();
}

/**
 * Function to take the data from the database and generate a HTML card element, returned as string
 *
 * @param array $arrayFromDB
 * @return string
 */
function generateCard(array $arrayFromDB): string
{
    $card = '';
    foreach ($arrayFromDB as $itemFromDB) {
        $card .=
            '<div class="card">
            <div class="card-image">
                <h3>' . $itemFromDB['country'] . '</h3>
                <h1>' . $itemFromDB['name'] . '</h1>
                <hr>
                <h2>' . $itemFromDB['process'] . '</h2>
                <h4>' . $itemFromDB['altitude'] . 'm</h4>
            </div>
            <p>' . $itemFromDB['descriptors'] . '</p>
        </div>';
    }
    return $card;
}