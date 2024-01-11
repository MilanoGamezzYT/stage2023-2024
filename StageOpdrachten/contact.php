<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stage Opdracht 3 - Contact</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
        <h1>Milan Sebes</h1>
        <p>Software Developer | Student</p>
    </header>

    <nav>
        <ul>
            <li><a href="techchallenge.php">Home</a></li>
            <li><a href="about.php">Over Mij</a></li>
            <li><a href="skills.php">Vaardigheden</a></li>
            <li><a href="work.php">Werk</a></li>
            <li><a href="hobbies.php">Hobby's</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>

    <section id="contact">
    <h2>Contacteer Mij</h2>
    <p>Heb je vragen, suggesties of wil je gewoon hallo zeggen? Vul het onderstaande formulier in en ik zal zo snel mogelijk antwoorden!</p>
    
    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $naam = $_POST["naam"];
            $email = $_POST["email"];
            $bericht = $_POST["bericht"];

            echo "<p>Bedankt, $naam! Jouw bericht is ontvangen.</p>";
        }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="naam">Naam:</label>
        <input type="text" id="naam" name="naam" required>
        <br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="bericht">Bericht:</label>
        <textarea id="bericht" name="bericht" rows="4" required></textarea>
        <br>

        <input type="submit" value="Verzend">
    </form>
    <p>PS, Deze formulier staan nog niet gekoppeld aan een DataBase</p>
    <p>Je e-mail wordt niet opgeslagen</p>
    <p>Als je dit leest, stuur dan een mailtje naar:</p>
    <p>99067157@mydavinci.nl of bel me: 0612345678</p>
</section>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Milan. Alle rechten voorbehouden.</p>
    </footer>

</body>
</html>
