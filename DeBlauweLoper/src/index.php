<?php

declare(strict_types=1);

require_once("classes/user.php");

session_start();

/** The root of the url also the path of the current folder
 *
 * ROOT is defined in `.htaccess`
 */
define("ROOT", $_SERVER["REDIRECT_ROOT"]);

/** The rest of the url after `ROOT`
 *
 * ROUTE is defined in `.htaccess`
 */
define("ROUTE", $_SERVER["REDIRECT_ROUTE"]);

/** `ROOT` and `ROUTE` combined for convienience */
define("PATH", ROOT . ROUTE);

/** Gets the pdo instance */
function getPDO(): PDO
{
    static $pdo = new PDO("mysql:host=localhost;dbname=de-blauwe-loper", "root", "");

    return $pdo;
}


?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= ROOT ?>/styles.css">
    <title>De Blauwe Loper</title>
</head>

<body>
<?php
/** `ROUTE` split on '/' */
$route = explode("/", trim(ROUTE, "/"));


$finalRoute = (ROUTE !== "/")
    ? ROUTE
    : header("Location: " . ROOT . "/member/start");
require_once("required/header.php");
require_once("pages" . ROUTE . ".php");

?>
</body>

</html>