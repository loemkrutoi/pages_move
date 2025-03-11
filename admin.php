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
    <title>Admin</title>
</head>
<body>

    <?php 

    require_once('header.php');

    $i = 1;
    $j = 1;

    if ((!empty($_POST['page']) && !(empty($_POST['pageKey'])) && isset($_POST))) {
        $page = mysqli_real_escape_string($link, $_POST['page']);
        $pageKey = preg_replace('/\s/', '_' , mysqli_real_escape_string($link, $_POST['pageKey'] . '.html'));
        $pageContent =
        "
        <h1>Добро пожаловать на страницу " . $page . " !</h1>
        <a href='admin.php'>вернуться на страницу админа</a><br>
        <a href='index.php'>вернуться на страницу авторизации</a>
        ";
        if(!file_exists($pageKey)){
            $insertQuery = "INSERT INTO `pages` (`name_page`, `key_page`) VALUES ('$page' , '$pageKey')";
            $query = $link->prepare($insertQuery);
            $query->execute();
            $result = $query->get_result();
            file_put_contents($pageKey, $pageContent);
        }
    }
    ?>
    
    <div class="my-main m-auto container w-100 vh-100 row d-flex justify-content-around align-items-center wrap-nowrap">
        <div class="container col-12">
            <div class="insert">
                <div class="top text-center">    
                    <p>Добавить новые пункты</p>
                </div>
                <div class="bottom-insert p-4 w-100 mx-auto">
                    <form class="d-flex flex-wrap justify-content-between" action="" method="POST">
                        <label for="page">Введите заголовок</label>
                        <input type="text" id="page" name="page">
                        <label for="pageKey">Введите ссылку</label>
                        <input type="text" id="pageKey" name="pageKey">
                        <input id="btn" type="submit" value="+">
                    </form>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-between">
            <div class="left col-4 p-0">
                <div class="top text-center">
                    <p>Все пункты меню</p>
                </div>
                <div class="bottom row p-2 w-100 mx-auto">
                    <?php 
                    foreach($result as $row) {
                        echo '
                        <div class="my-page-block col-12 mt-2">
                            <div class="number">' . $i . '. </div>
                            <p class="page-text text-center">'. $row['name_page'] . ' | ' . '<a href=' . $row['key_page'] . '>' .  $row['key_page'] . '</a>' . '</p>
                            <div class="handlers d-flex flex-wrap justify-content-between">
                                <form action="" method="GET">
                                    <input type="submit" class="delete" name="key" value="x"></div>
                                </form>
                            </div>
                        </div>
                        ';
                        $i++;
                    }
                    ?>
                </div>
            </div>
            <div class="left col-4 p-0">
                <div class="top text-center">
                    <p>Видимые пункты меню</p>
                </div>
                <div class="bottom row p-2 w-100 mx-auto">
                    <?php
                    foreach($result as $row) {
                        echo '
                        <div class="my-page-block col-12 mt-2">
                            <div class="number">' . $j . '. </div>
                            <p class="page-text text-center">'. $row['name_page'] . ' | ' . '<a href=' . $row['key_page'] . '>' .  $row['key_page'] . '</a>' . '</p>
                            <div class="handlers d-flex flex-wrap justify-content-between">
                            </div>
                        </div>
                        ';
                        $j++;
                    }
                    $result->close();
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>