<?php
    if(isset($_GET['p'])) {
        $page = $_GET['p'];
    } else {
        $page = 'home';
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/font.css">

        <link rel="stylesheet" href="css/<?=$page?>.css">
        <link rel="stylesheet" href="media/<?=$page?>.css">

    </head>
    <body>

        <?php include_once($page. ".php"); ?>

        <script src="js/height.js"></script>
    </body>
</html>