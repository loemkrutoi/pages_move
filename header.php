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
    <title>Document</title>
</head>
<body>
    <div class="my-header container">
        <nav class="navbar navbar-expand-lg position-fixed bg-danger">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link text-light" href="index.php">index page</a>
                        </li>
                        <?php
                            require_once('config/link.php');

                            $selectQuery = "SELECT * FROM `pages`";
                            $query = $link->prepare($selectQuery);
                            $query->execute();
                            $result = $query->get_result();

                            foreach($result as $row) {
                                echo '<a href="'.$row['key_page'].'" class="nav-link text-light">'.$row['name_page'].'</a>';
                            }
                        ?>
                    </li>
                    <span class="navbar-text">
                        <a class="nav-link text-light" href="user.php">Главная</a>
                        <a class="nav-link text-light" href="index.php">Авторизация</a>
                    </span>
                </ul>
            </div>
        </div>
    </nav>
</div>
