<?php
session_start();
require_once 'config/config.php';
require_once BASE_PATH . '/includes/auth_validate.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data_to_db = array_filter($_POST);
    // Encryptie van wachtwoord
    $data_to_db['password'] = password_hash($data_to_db['password'], PASSWORD_DEFAULT);
    $db = getDbInstance();
    $last_id = $db->insert('accounts', $data_to_db);

    $data_to_db['created_by'] = $_SESSION['user_id'];
    $data_to_db['created_at'] = date('d-m-Y H:i:s');
    $db = getDbInstance();

    if ($last_id) {
        $_SESSION['success'] = 'Klant succesvol toegevoegd!';
        header('Location: customers.php');
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
            <h2 class="page-header">Voeg Klant</h2>
        </div>
    </div>
    <?php include BASE_PATH . '/includes/flash_messages.php'; ?>
    <form class="form" action="" method="post" id="customer_form" enctype="multipart/form-data">
        <?php include BASE_PATH . '/forms/customer_form.php'; ?>
    </form>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#customer_form').validate({
            rules: {
                voornaam: {
                    required: true,
                    minlength: 2
                },
                tussenvoegsel: {
                    required: false,
                    minlength: 1
                },
                achternaam: {
                    required: true,
                    minlength: 3
                },
            }
        });
    });
</script>
<?php include BASE_PATH . '/includes/footer.php'; ?>