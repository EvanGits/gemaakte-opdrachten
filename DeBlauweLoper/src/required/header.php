<?php
$folder = "member";

if (isset($_SESSION["user"])) {
    $folder = $_SESSION["user"]->getMember() == 0 ? "employee" : "member";
}

?>

<nav class="navbar navbar-expand-lg shadow-sm kleur-header col-12">
    <div class="col-1">
        <a href="<?= ROOT ?> " class="navbar-brand">
            <img src="<?= ROOT ?>/img/pion.png" width="80vh" height="75vh" class="d-inline-block align-top logo">
        </a>
    </div>    
    <div class="col-6"><h3><em>De Blauwe Loper</em></h3></div>
    
    <div col-5>
        <ul class="text-link">
            <a href="" class="btn">Evenementen</a>
            <a href="informatie" class="btn">Informatie</a>
            <a href="contact" class="btn">Contact</a>
            <?php if(isset($_SESSION["user"])) : ?>
                <a href="" class="btn">Overzicht</a>
                <a href="<?= ROOT . "/member/account/uitloggen" ?>" class="btn">uitloggen</a>
                <a href="<?= ROOT . "/member/account/beheer" ?>" class="btn">Beheren</a>
            <?php else : ?>
                <?php $onPage = (ROUTE == "/member/account/login") ?>
                <a href="<?= ROOT . "/member/account/login" ?>" class="btn">Login/Registreer</a>
            <?php endif ?>
        </ul>
    </div>                
</nav>

