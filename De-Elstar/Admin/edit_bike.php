<?php
session_start();
require_once 'config/config.php';
require_once BASE_PATH . '/includes/auth_validate.php';

$bike_id = filter_input(INPUT_GET, 'bike_id', FILTER_VALIDATE_INT);
$operation = filter_input(INPUT_GET, 'operation', FILTER_SANITIZE_STRING);
($operation == 'edit') ? $edit = true : $edit = false;
$db = getDbInstance();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $bikes_id = filter_input(INPUT_GET, 'bikes_id', FILTER_SANITIZE_STRING);


    $data_to_db = filter_input_array(INPUT_POST);


    $db = getDbInstance();
    $db->where('fietsnummer', $bikes_id);
    $stat = $db->update('bikes', $data_to_db);

    if ($stat) {
        $_SESSION['success'] = 'Fiets succesvol bijgewerkt!';
        header('Location: bike.php');
        exit();
    }
}


if ($edit) {
    $db->where('fietsnummer', $bikes_id);
    $bikes = $db->getOne('bikes');
}
?>
<?php include BASE_PATH . '/includes/header.php'; ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Update fiets</h2>
        </div>
    </div>
    <?php include BASE_PATH . '/includes/flash_messages.php'; ?>
    <form class="form" action="" method="post" id="customer_form" enctype="multipart/form-data">
        <?php include BASE_PATH . '/forms/bicycles_form.php'; ?>
    </form>
</div>
<?php include BASE_PATH . '/includes/footer.php'; ?>