<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton">
        <link rel="stylesheet" href="style\main.css">
    </head>
    <body>
        <header class="center">
            Premier league
        </header>
        <nav class="center">
            <ul>
                <li><a href="/?action=standings">Standings</a></li>
                <li><a href="/?action=matches">Mactches</a></li>
                <li><a href="/?action=results">Results</a></li>
            </ul>
        </nav>
        <section class="center">
            <?php require_once("src/view/pages/$page.php"); ?>
        </section>

    </body>
</html>