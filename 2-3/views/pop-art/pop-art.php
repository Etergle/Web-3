<?php
    $url = $_SERVER["REQUEST_URI"];

    $is_image = $url == "/pop-art/image";
    $is_info = $url == "/pop-art/info";
?>

<h1>Поп-арт</h1>
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link <?php echo $is_image ? "active" : '' ?>" href="/pop-art/image">
        Картинка
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo $is_info ? "active" : '' ?>" href="/pop-art/info">
        Описание
    </a>
  </li>
</ul>

<?php
    if (preg_match("#^/pop-art/image#", $url)) {
        require "../views/pop-art/image.php";
    } elseif (preg_match("#^/pop-art/info#", $url)) { 
        require "../views/pop-art/info.php";
    } 
?>