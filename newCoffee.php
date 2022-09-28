<?php
require_once('functions.php')
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
        <form method="post">
            <label for="name">Coffee Name</label>
            <br>
            <input type="text" id="name" name="name" placeholder="Los Altos" required>
            <br>

            <label for="origin">Country of Origin</label>
            <br>
            <select id="origin" name="origin" required>
                <!--php to get origin name -->
            </select>
            <br>

            <label for="process">Processing Method</label>
            <br>
            <select id="process" name="process" required>
                <!--php to get process name -->
            </select>
            <br>

            <label for="altitude">Growing Altitude</label>
            <br>
            <input type="number" step="100"  id="altitude" name="altitude" placeholder="1300" required>
            <br>

            <label for="name">Tasting Note One</label>
            <br>
            <input type="text" id="name" name="name" placeholder="Milk Choc" required>
            <br>

            <label for="name">Tasting Note Two</label>
            <br>
            <input type="text" id="name" name="name" placeholder="Red Fruit" required>
            <br>

            <label for="name">Tasting Note Three</label>
            <br>
            <input type="text" id="name" name="name" placeholder="Hazelnut" required>
            <br>

            <input type="submit">
        </form>
    </section>
    <section class="button">
        <a href="">Back to Collection</a>
    </section>
</main>
<footer>
    <p>© 2022 | Henry Percy</p>
</footer>
</body>
