<?php
session_start();
require_once 'includes/auth_validate.php';
require_once './config/config.php';
$del_id = filter_input(INPUT_POST, 'del_id');
if ($del_id && $_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($_SESSION['admin_type'] != 'super') {
        $_SESSION['failure'] = "Je hebt geen toestemming om deze actie uit te voeren";
        header('location: bikes.php');
        exit;
    }
    $bikes_id = $del_id;

    $db = getDbInstance();
    $db->where('id', $bikes_id);
    $status = $db->delete('bikes');

    if ($status) {
        $_SESSION['info'] = "Fiets succesvol verwijderd!";
        header('location: bikes.php');
        exit;
    } else {
        $_SESSION['failure'] = "Kan fiets niet verwijderen";
        header('location: bikes.php');
        exit;
    }
}
