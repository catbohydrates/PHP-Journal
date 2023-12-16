<link rel="stylesheet" href="../css/page.css">
<?php
require("../classes/deletepost.class.php");

// Sanitize all inputs
$id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);

if(!is_numeric($id)){
    echo "ENTER A NUMBER!";
    die();
}
if(empty($id)){
    echo "PLEASE ENTER SOMETHING!";
    die();
}

$deleteObj = new Deletepost($id);
$deleteObj->deletePost();