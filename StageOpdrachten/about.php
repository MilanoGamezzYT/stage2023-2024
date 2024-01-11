<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stage Opdracht 3 - Over Mij</title>
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

    <section id="about">
        <h2>Over Mij</h2>
        <p>Ik ben <?php echo "Milan"; ?>, een enthousiaste Software Developer en momenteel student aan de <?php echo "Da Vinci College"; ?>. Mijn passie ligt in het creëren van boeiende en gebruiksvriendelijke webapplicaties.</p>

    </section>

    <section id="education">
        <h2>Opleiding</h2>
        <p>VMBO GL: 2017 - 2022</p>
        <p>MBO Niv 4: 2022 - 2026</p>
        <p> Hopelijk nog HBO Game Developer (Als dat zou lukken)</p>
    </section>

    <section id="experience">
        <h2>Werkervaring</h2>
        <p>Onbeperkt Design: 2023/2024</p>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Jouw Naam. Alle rechten voorbehouden.</p>
    </footer>

</body>
</html>
