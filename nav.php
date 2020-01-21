<?php
$active =  "style='border-bottom: 6px solid #6bcf0c'";
$active1 = "";
$active2 = "";
$active3 = "";
$active4 = "";

if ($pages == "home") {
    $active1 = $active;
} elseif ($pages == "tentang") {
    $active2 = $active;
} elseif ($pages == "layanan") {
    $active3 = $active;
} elseif ($pages == "kontak") {
    $active4 = $active;
}
?>
<div class="navpintar fixed-top">
    <nav class="navbar navbar-expand-lg container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index">
            <img class="d-inline-block align-top logo" src="../sakaindo/assets/SAKAI/logo sakai/sakai logo.png">
        </a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="index" class="nav-link menulink" <?= $active1 ?>>HOME</a>
            </li>
            <li class=" navbar-item">
                <a href="tentang" class="nav-link menulink" <?= $active2 ?>>TENTANG KAMI</a>
            </li>
            <li class="navbar-item">
                <a href="layanan" class="nav-link menulink" <?= $active3 ?>>LAYANAN</a>
            </li>
            <li class="navbar-item">
                <a href="kontak" class="nav-link menulink" <?= $active4 ?>>KONTAK KAMI</a>
            </li>
        </ul>
    </nav>
</div>