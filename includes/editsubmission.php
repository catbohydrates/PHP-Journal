<link rel="stylesheet" href="../css/page.css">
<?php
require("../classes/editpost.class.php");

//Sanitize input
$id = filter_input(INPUT_POST, "ID", FILTER_SANITIZE_NUMBER_INT);
$title = filter_input(INPUT_POST, "newtitle", FILTER_SANITIZE_SPECIAL_CHARS);
$msg = filter_input(INPUT_POST, "msg", FILTER_SANITIZE_SPECIAL_CHARS);

if(empty($id)){
    echo "PLEASE ENTER AN ID BEFORE EDITING A POST!";
    die();
}


$editPostObj = new Editpost($id, $title, $msg);
$editPostObj->editPost();