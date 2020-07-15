<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <title>ISCC Livecoding SQL</title>
</head>

<body>
    <?php
    require("header.php");
    if (isset($_GET["page"])) {
        if ($_GET["page"] == "accueil") {
            require("accueil.php");
        } else if ($_GET["page"] == "produits-html") {
            require("produits-html.php");
        } else if ($_GET["page"] == "produits-sql") {
            require("produits-sql.php");
        } else {
            echo '<main><h1 class="center">404 !!</h1></main>';
        }
    } else {
        header("Location: index.php?page=accueil");
    }
    require("footer.php");
    ?>
</body>

</html>