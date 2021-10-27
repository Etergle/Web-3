<?php
    $url = $_SERVER["REQUEST_URI"];

    $is_image = $url == "/avant-garde/image";
    $is_info = $url == "/avant-garde/info";
?>

<h1>Авангардизм</h1>
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link <?php echo $is_image ? "active" : '' ?>" href="/avant-garde/image">
        Картинка
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo $is_info ? "active" : '' ?>" href="/avant-garde/info">
        Описание
    </a>
  </li>
</ul>

<?php
    if (preg_match("#^/avant-garde/image#", $url)) {
        require "../views/avant-garde/image.php";
    } elseif (preg_match("#^/avant-garde/info#", $url)) { 
        require "../views/avant-garde/info.php";
    } 
?>