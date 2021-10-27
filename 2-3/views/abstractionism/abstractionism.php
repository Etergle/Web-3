<?php
    $url = $_SERVER["REQUEST_URI"];

    $is_image = $url == "/abstractionism/image";
    $is_info = $url == "/abstractionism/info";
?>

<h1>Абстракционизм</h1>
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link <?php echo $is_image ? "active" : '' ?>" href="/abstractionism/image">
        Картинка
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo $is_info ? "active" : '' ?>" href="/abstractionism/info">
        Описание
    </a>
  </li>
</ul>

<?php
    if (preg_match("#^/abstractionism/image#", $url)) {
        require "../views/abstractionism/image.php";
    } elseif (preg_match("#^/abstractionism/info#", $url)) { 
        require "../views/abstractionism/info.php";
} ?>