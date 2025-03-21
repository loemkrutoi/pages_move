<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <title>User</title>
</head>
<body>
    <?php 

    session_start();

    if($_SESSION['role'] != 'admin'){
        header('"Location: index.php"');
    }
    require_once('header.php');

    ?>
    
    <div class="container vh-100 w-100">
        <h1 class="text-center mt-5">Добро пожаловать на страницу пользователя!</h1>
        <a class="text-center" href="index.php">Вернуться</a>
    </div>
</body>
</html>