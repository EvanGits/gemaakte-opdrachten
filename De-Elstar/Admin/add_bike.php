<?php
session_start();
require_once 'config/config.php';
require_once BASE_PATH . '/includes/auth_validate.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data_to_db = array_filter($_POST);


    $db = getDbInstance();
    $last_id = $db->insert('bikes', $data_to_db);

    $db = getDbInstance();

    if ($last_id) {
        $_SESSION['success'] = 'Fiets succesvol toegevoegd!';
        header('Location: bike.php');
        exit();
    } else {
        echo 'Insert failed: ' . $db->getLastError();
        exit();
    }
}

$edit = false;
?>
<?php include BASE_PATH . '/includes/header.php'; ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Voeg Fiets</h2>
        </div>
    </div>
    <!-- Flash messages -->
    <?php include BASE_PATH . '/includes/flash_messages.php'; ?>
    <form class="form" action="" method="post" id="bicycles_form" enctype="multipart/form-data">
        <?php include BASE_PATH . '/forms/bicycles_form.php'; ?>
    </form>
</div>
<?php include BASE_PATH . '/includes/footer.php'; ?>