<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>Project</title>
</head>
<body>
    <div class="my-header container">
            <nav class="navbar navbar-expand-lg">
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

                            $i = 1;


                            $query1 = mysqli_query($link, "SELECT * FROM `pages`");

                            while($row = mysqli_fetch_assoc($query1)) {
                                echo '<a href="#" class="nav-link text-light" id="toToggleHeader">'.$row['name_page'].'</a>';
                            }
                        ?>

                        <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown link
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </li> -->
                    </ul>
                    </div>
                </div>
            </nav>
        </div>

    <div class="my-main m-auto container w-100 vh-100 row d-flex justify-content-around align-items-center wrap-nowrap">
        <div class="left col-4 p-0">
            <div class="top text-center">
                <p>все мои пункты</p>
            </div>
            <div class="bottom row p-4 w-100 mx-auto">
            <?php
                $query = mysqli_query($link, "SELECT * FROM `pages`");

                while($row = mysqli_fetch_assoc($query)) {
                    echo '<p class="my-page-block" onclick="return ToggleVisibility()">' . $i .".<b> заголовок: </b>" . $row['name_page'] . "<br>" . "<b>ссылка: </b>" . $row['key_page'] .'</p>';
                    $i++;
                }
            ?>
            </div>
            <!-- <div class="bottom row p-4 w-100 mx-auto">
                <div class="my-page-block col-12 mt-2">
                    <p class="text-center">page 1</p>
                </div>
                <div class="my-page-block col-12 mt-2">
                    <p class="text-center">page 2</p>
                </div>
                <div class="my-page-block col-12 mt-2">
                    <p class="text-center">page 3</p>
                </div>
            </div> -->
        </div>
        <div class="right col-4 p-0">
            <div class="top text-center">
                <p>видимые пункты</p>
            </div>
            <div class="bottom row p-4 w-100 mx-auto">
            <?php
                $query = mysqli_query($link, "SELECT * FROM `pages`");

                while($row = mysqli_fetch_assoc($query)) {
                    echo '<p class="my-page-block" id="toToggle">' . $row['name_page'] . "<br>" .'</p>';
                }
            ?>
            </div>
        </div>
        <div class="insert col-12 p-0">
            <div class="top-insert text-center">    
                <p>добавить</p>
            </div>
            <div class="bottom-insert p-4 w-100 mx-auto">
                <form class="d-flex wrap-nowrap justify-content-between" action="" method="POST">
                    <input type="text" id="pageKey" name="pageKey" placeholder="ссылка">
                    <input type="text" id="page" name="page" placeholder="заголовок">
                    <input id="btn" type="submit" value="добавить">
                </form>
            </div>
        </div>
    </div>
    <script src="addPage.js"></script>
    <script src="script.js"></script>
</body>
</html>