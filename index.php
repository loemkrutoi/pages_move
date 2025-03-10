
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <h1 class="text-center mt-5 mb-5 ">авторизуйтесь пожалуйста</h1>
    <form action="" method="POST">
        <label for="login">логин</label><br>
        <input type="text" id="login" name="login"><br><br>

        <label for="login">парол</label><br>
        <input type="password" id="password" name="password"><br><br><br>
        <input type="submit" id="button">
    </form>
</body>
</html>
<?php 
require_once('config/link.php');

if ((!empty($_POST) && isset($_POST))) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    if ($login == "" || $password == "") {
        echo "Заполните все поля";
    }
    else if ($login == "loem" && $password == "loh") {
        header("Location: admin.php");
    }
}
?>