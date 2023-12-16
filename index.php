<?php
require("classes/Dbh.class.php");
require_once("classes/getpost.class.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/afa87b5133.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/new.css">
    <title>Daily Notes</title>
</head>
<body>
<?php
    include("html/header.html");

    $getObject = new GetPost();
    $getObject->getPosts();
    ?>
</body>
</html>