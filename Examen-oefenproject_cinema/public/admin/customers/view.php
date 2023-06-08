<?php require_once('../../../private/initialize.php'); ?>
<?php 

// Vóór PHP 7.0
// $id = isset($_GET['id]) ? $_GET['id] : '1'; 

$id = $_GET['id'] ?? '1'; 

echo $id; 

?>