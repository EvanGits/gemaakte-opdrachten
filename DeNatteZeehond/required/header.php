<?php ob_start(); ?>
<!-- user check and navbar button check-->

<nav class="navbar navbar-expand-md navbar-light">
    <div class="container">
        <a style="text-decoration:none;" href="<?=ROOT?>">
            <h2 class="p-2 text-dark">De Natte Zeehond</h2>
        </a>
        <?php if (isset($_SESSION["user"])) : ?> 
        <ul class="nav nav-fill navbar-expand-lg ms-auto w-60">
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="nav nav-pills nav-fill ms-auto">
                    <?php if($page == "donation") : ?>
                        <li>
                            <a href="<?= ROOT ?>/donation" class="nav-link bg-success text-light fs-5">Doneren</a>
                        </li>
                    <?php else : ?>
                        <li>
                            <a href="<?= ROOT ?>/donation" class="nav-link text-light bg-danger rounded fs-5">Doneren</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        <?php else : ?>
        <ul class="nav nav-fill navbar-expand-lg ms-auto w-50">
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="nav nav-pills nav-fill ms-auto">
                    <?php if($page == "donation") : ?>
                        <li>
                            <a href="<?= ROOT ?>/donation" class="nav-link bg-success text-light fs-5">Doneren</a>
                        </li>
                    <?php else : ?>
                        <li>
                            <a href="<?= ROOT ?>/donation" class="nav-link text-light bg-danger rounded fs-5">Doneren</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>    

        <?php endif;?>

            <div class="collapse navbar-collapse" id="navmenu">    
                <ul class="nav nav-pills nav-fill ms-auto">
                    <?php if($page == "contact") : ?>
                        <li>
                            <a href="<?= ROOT ?>/contact" class="nav-link text-light fs-5" style="background-color: #557697;">Contact</a>
                        </li>
                    <?php else : ?>
                        <li>
                            <a href="<?= ROOT ?>/contact" class="nav-link text-light rounded fs-5" style="background-color: #7895B2;">Contact</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navmenu">    
                <ul class="nav nav-pills nav-fill ms-auto">
                    <?php if($page == "information") : ?>
                        <li>
                            <a href="<?= ROOT ?>/information" class="nav-link text-light fs-5" style="background-color: #557697;">Over ons</a>
                        </li>
                    <?php else : ?>
                        <li>
                            <a href="<?= ROOT ?>/information" class="nav-link text-light rounded fs-5" style="background-color: #7895B2;">Over ons</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
            <?php if(isset($_SESSION["user"])) : ?>
                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="nav nav-pills nav-fill ms-auto">
                        <?php if($page == "tickets") : ?>
                            <li>
                                <a href="<?= ROOT ?>/tickets" class="nav-link text-light fs-5" style="background-color: #557697;">Tickets</a>
                            </li>
                        <?php else : ?>
                            <li>
                                <a href="<?= ROOT ?>/tickets" class="nav-link text-light rounded fs-5" style="background-color: #7895B2;">Tickets</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="nav nav-pills nav-fill ms-auto">
                        <?php if($page == "profile") : ?>
                            <li>
                                <a href="<?= ROOT ?>/profile" class="nav-link text-light fs-5" style="background-color: #557697;">Profiel</a>
                            </li>
                        <?php else : ?>
                            <li>
                                <a href="<?= ROOT ?>/profile" class="nav-link text-light rounded fs-5" style="background-color: #7895B2;">Profiel</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <?php if($_SESSION["user"]->getcustomerStatusId() == 2) : ?>
                    <div class="collapse navbar-collapse" id="navmenu">
                        <ul class="nav nav-pills nav-fill ms-auto">
                            <?php if($page == "administration/overview") : ?>
                                <li>
                                    <a href="<?= ROOT ?>/administration/overview" class="nav-link text-light fs-5" style="background-color: #557697;">Overzicht</a>
                                </li>
                            <?php else : ?>
                                <li>
                                    <a href="<?= ROOT ?>/administration/overview" class="nav-link text-light rounded fs-5" style="background-color: #7895B2;">Overzicht</a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="nav nav-pills nav-fill ms-auto">
                        <?php if($page == "account/logout") : ?>
                            <li>
                                <a href="<?= ROOT ?>/account/logout" class="nav-link text-light fs-5" style="background-color: #557697;">Uitloggen</a>
                            </li>
                        <?php else : ?>
                            <li>
                                <a href="<?= ROOT ?>/account/logout" class="nav-link text-light rounded fs-5" style="background-color: #7895B2;">Uitloggen</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            <?php else: ?>
                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="nav nav-pills nav-fill ms-auto">
                        <?php if($page == "account/login") : ?>
                            <li>
                                <a href="<?= ROOT ?>/account/login" class="nav-link text-light fs-5" style="background-color: #557697;">Inloggen</a>
                            </li>
                        <?php else : ?>
                            <li>
                                <a href="<?= ROOT ?>/account/login" class="nav-link text-light rounded fs-5" style="background-color: #7895B2;">Inloggen</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </ul>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>