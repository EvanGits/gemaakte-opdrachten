<?php
$customer = $_SESSION["user"];
$email = Customer::selectCustomerList();
if (!empty($_POST["Toevoegen"])) {
    Tickets::insertInToTicket($_POST["date"], $_POST["email"]);
    header("Location: ". ROOT . "/donation");
}
?>

<?php if ($_SESSION["user"]->getcustomerStatusId() == 2) :?>
<section class="text-center mt-5">
    <h2>Ticket kopen </h2>
</section>

<div class="d-flex justify-content-center mt-5">
    <form class="form-horizontal p-5 rounded primary-box-color shadow" method="post">
        <div class="mb-3">
            <label class="form-label">Email klanten:</label>
            <select class="form-select fs-4" name="email" id="id">
                <?php for ($i=0; $i <count($email) ; $i++) : ?>
                <option  value="<?= $email[$i]["id"] ?>"><?= $email[$i]["email"]?>
                </option>
                <?php endfor;?>
            </select>        
        </div>
        <div class="mb-3">
            <label class="form-label">Datum:</label>
            <input type="datetime-local" min="<?=date("d-m-y H:i")?>" class="form-control fs-4" name="date" required>
        </div>
        <div class="d-flex justify-content-center">
            <input class="mw-3 btn btn-lg text-light btn-success" type="submit" name="Toevoegen" value="Toevoegen"> 
        </div>
        <div class="text-center mt-3">
                <h5 class="text-danger">
                    <?php if(!empty($error)) {echo $error;}?>
                </h5>
        </div>
    </form>
</div>
<?php elseif ($_SESSION["user"]->getcustomerStatusId() == 1) :?>
<section class="text-center mt-5">
    <h2>Ticket kopen </h2>
</section>
<div class="d-flex justify-content-center mt-5">
    <form class="form-horizontal p-5 rounded primary-box-color shadow" method="post">
        <div class="mb-3">
        <label class="form-label">Email:</label>
                <input class="form-control fs-4" type="email" name="email" value="<?=$customer->getEmail()?>" required>       
        </div>
        <div class="mb-3">
        <label class="form-label">Datum</label>
            <input type="datetime-local" min="<?=date("d-m-y H:i")?>" class="form-control fs-4" name="date" required>
        </div>
        <div class="d-flex justify-content-center">
            <input class="mw-3 btn btn-lg text-light btn-success" type="submit" name="Toevoegen" value="Toevoegen"> 
        </div>
        <div class="text-center mt-3">
                <h5 class="text-danger">
                    <?php if(!empty($error)) {echo $error;}?>
                </h5>
        </div>
    </form>
</div>
<?php endif; ?>