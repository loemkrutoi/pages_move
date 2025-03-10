<?php 

require_once('../config/link.php');

if((!empty($_POST)) && isset($_POST)){
    $page = $_POST['page'];
    $pageKey = $_POST['pageKey'];
    $insert = mysqli_query($link, "INSERT INTO `pages` (`name_page`, `key_page`) VALUES ('$page' , '$pageKey')");
}

?>