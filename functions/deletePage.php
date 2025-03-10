<?php 

require_once('../config/link.php');

if((!empty($_POST)) && isset($_POST)){
    $page = $_POST['page'];
    $delete = mysqli_query($link, "DELETE FROM `pages` WHERE (`name_page`) = $");
}

?>