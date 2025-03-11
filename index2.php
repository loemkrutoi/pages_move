<?php 

require_once ('config/link.php');

$query = "SELECT * FROM `pages`";
$result = mysqli_query($link, $query);

while($row = mysqli_fetch_assoc($result)) {
    echo '<p>'.$row['name_page'].'</p>';
    echo '<p>'.$row['key_page'].'</p>';
    echo '<hr>';
}

if(!empty($_GET['title'])){
    $title = $_GET['title'];
    $link1 = $_GET['link'];
    $insert = mysqli_query($link, "INSERT INTO `pages` (`name_page`, `key_page`) VALUES ('$title' , '$link1')");
    // file_put_contents($link1, $title);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" methods="GET">
        <input type="text" name="title">
        <input type="text" name="link">
        <input type="submit" value="найти">
    </form>
</body>
</html>