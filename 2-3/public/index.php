<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Искусство</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"  rel="stylesheet" />
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-palette"></i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/abstractionism">Абстракционизм</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/art-nouveau">Ар-нуво</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/avant-garde">Авангардизм</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/pop-art">Поп-арт</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <?php 
                $url = $_SERVER["REQUEST_URI"];

                if ($url == "/") {
                    require "../views/main.php";
                } elseif (preg_match("#^/abstractionism#", $url)) {
                    require "../views/abstractionism/abstractionism.php";
                } elseif (preg_match("#^/art-nouveau#", $url)) {
                    require "../views/art-nouveau/art-nouveau.php";
                } elseif (preg_match("#^/avant-garde#", $url)) {
                    require "../views/avant-garde/avant-garde.php";
                } elseif (preg_match("#^/pop-art#", $url)) {
                    require "../views/pop-art/pop-art.php";
                } 
            ?>
        </div>
    </body>
</html>
