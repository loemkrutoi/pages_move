<?php 

require_once('../config/link.php');

$page = mysqli_real_escape_string($link, $_POST['page']);
$pageKey = mysqli_real_escape_string($link, $_POST['pageKey']);

$deleteQuery = "DELETE FROM `pages` WHERE `name_page` = $page";
$query = $link->prepare($deleteQuery);
$query->execute();
$result = $query->get_result();
$query->close();

?>