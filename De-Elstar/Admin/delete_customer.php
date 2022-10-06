<?php
session_start();
require_once 'includes/auth_validate.php';
require_once './config/config.php';
$del_id = filter_input(INPUT_POST, 'del_id');
if ($del_id && $_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($_SESSION['admin_type'] != 'super') {
        $_SESSION['failure'] = "Je hebt geen toestemming om deze actie uit te voeren";
        header('location: customers.php');
        exit;
    }
    $customer_id = $del_id;

    $db = getDbInstance();
    $db->where('id', $customer_id);
    $status = $db->delete('accounts');

    if ($status) {
        $_SESSION['info'] = "Klant succesvol verwijderd!";
        header('location: customers.php');
        exit;
    } else {
        $_SESSION['failure'] = "Kan klant niet verwijderen";
        header('location: customers.php');
        exit;
    }
}
