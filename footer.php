<div class="my-header container">
    <nav class="navbar navbar-expand-lg position-fixed fixed-bottom">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <?php
                            require_once('config/link.php');

                            $selectQuery = "SELECT * FROM `pages`";
                            $query = $link->prepare($selectQuery);
                            $query->execute();
                            $result = $query->get_result();

                            // $keyPage = $_GET["key"];
                            // $deleteQuery = "DELETE FROM `pages` WHERE `key_page` = '$keyPage'";
                            // $del = $link->prepare($deleteQuery);
                            // $del->execute();
                            // $res = $del->get_result();
                                
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