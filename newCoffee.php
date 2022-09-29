<?php
require_once 'functions.php';
require_once 'newCoffeeToDatabase.php';
$pdo = connectToDatabase();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Coffee Catalogue</title>
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Vidaloka&display=swap"
        rel="stylesheet">
</head>
<body>
<main>
    <section class="title">
        <h1 class="green-bg-highlight">Add</h1>
        <h1 class="brown-bg-highlight">New</h1>
        <h1 class="red-bg-highlight">Coffee</h1>
    </section>
    <section class="coffee-form">
        <form method="post" action="newCoffeeToDatabase.php">
            <label for="name">Coffee Name<sup>*</sup></label>
            <input type="text" id="name" name="name" placeholder="Los Altos" required>
            <br>

            <label for="origin">Country of Origin<sup>*</sup></label>
            <select id="origin" name="origin" required>
                <?php
                $countries = extractOriginFromDB($pdo);
                echo generateOriginOptions($countries);
                ?>
            </select>
            <br>

            <label for="process">Processing Method<sup>*</sup></label>
            <select id="process" name="process" required>
                <?php
                $process = extractProcessFromDB($pdo);
                echo generateProcessOptions($process);
                ?>
            </select>
            <br>

            <label for="altitude">Growing Altitude<sup>*</sup></label>
            <input type="number" id="altitude" name="altitude" placeholder="1300" required>
            <br>

            <label for="name">Tasting Note One</label>
            <input type="text" id="descriptor_one" name="descriptor_one" placeholder="Milk Choc">
            <br>

            <label for="name">Tasting Note Two</label>
            <input type="text" id="descriptor_two" name="descriptor_two" placeholder="Red Fruit">
            <br>

            <label for="name">Tasting Note Three</label>
            <input type="text" id="descriptor_three" name="descriptor_three" placeholder="Hazelnut">
            <br>

            <input type="submit">
        </form>
    </section>
    <section class="to-top">
        <a href="../coffeeCollection/index.php">Back to Collection</a>
    </section>
</main>
<footer>
    <p>© 2022 | Henry Percy</p>
</footer>
</body>
