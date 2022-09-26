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
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Vidaloka&display=swap" rel="stylesheet">
</head>
<body>
<header>
<nav>
    <a class="underline" href="#">Home</a>
    <a class="underline" href="#">Add more coffee</a>
</nav>
</header>
<main>
    <section id="title" class="title">
        <h1>THE <span class="brown-highlight">COFFEE</span> CATALOGUE</h1>
    </section>
    <h2>A Collection of Coffee from <span class="green-highlight">El Salvador</span> to  <span class="red-highlight">Ethiopia</span></h2>
    <section>
        <h3>Explore the Coffee Below</h3>
    </section>
    <section class="collection">
        <?php
        $pdo = connectToDatabase();
        $coffees = extractFromDB($pdo);
        echo generateCard($coffees);
        ?>
    </section>
    <section class="button">
            <a href="#title" class="underline">Back to top</a>
    </section>
</main>
<footer>
    <p>© 2022 Henry Percy</p>
</footer>
</body>
</html>