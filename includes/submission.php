<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/page.css">
    <title>Document</title>
</head>
<body>
<?php
    require_once("../classes/insertpost.class.php");

    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        header("Location: ../index.php");
    }

    // Sanitize all input
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $msg = filter_input(INPUT_POST, "msg", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Check if it's empty or not
    if (isset($_POST["submit"])) {
        if (!empty($title) && !empty($msg)) {
            $insertStuff = new insertPost($title, $msg);
            $insertStuff->insertPost();
        } else {
            echo "PLEASE FILL OUT ALL FIELDS!";
            echo '<a href="../index.php">GO HERE</a>';
        }
    }
?>
</body>
</html>
