<?php
    $url = $_SERVER["REQUEST_URI"];

    $is_image = $url == "/art-nouveau/image";
    $is_info = $url == "/art-nouveau/info";
?>

<h1>Ар-нуво</h1>
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link <?php echo $is_image ? "active" : '' ?>" href="/art-nouveau/image">
        Картинка
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo $is_info ? "active" : '' ?>" href="/art-nouveau/info">
        Описание
    </a>
  </li>
</ul>

<?php
    if (preg_match("#^/art-nouveau/image#", $url)) {
        require "../views/art-nouveau/image.php";
    } elseif (preg_match("#^/art-nouveau/info#", $url)) { 
        require "../views/art-nouveau/info.php";
} ?>