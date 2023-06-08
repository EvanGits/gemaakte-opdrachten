<?php
    $customer = Customer::getCustomerById($_SESSION["user"]->getId());
?>

<section class="text-center mt-5">
    <h2>Profiel Beheren </h2>
</section>

<div class="d-flex justify-content-center mt-5">
    <form class="form-horizontal p-5 rounded primary-box-color shadow" method="post">
        <div class="mb-3">
            <label class="form-label">Naam:</label>
            <input class="form-control fs-4" type="text" name="name" value="<?=ucwords($customer->getName())?>" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Email:</label>
            <input class="form-control fs-4" type="email" name="email" value="<?=$customer->getEmail()?>" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Telefoonnummer:</label>
            <input class="form-control fs-4" type="text" name="phone" value="<?=$customer->getPhone()?>" disabled>
        </div>
        <div class="mb-3 text-center">
            <h4>U heeft al € <?=number_format($customer->getDonation(),2,",",".");?> gedoneerd</h4>
        </div>
        <div class="d-flex justify-content-center">
            <a href="<?=ROOT?>/profile/deleteProfile?id=<?=$customer->getId()?>">
                <button type="button" class="me-3 btn btn-lg btn-danger">
                    Verwijderen
                </button>
            </a> 
            <a href="<?=ROOT?>/profile/editProfile?id=<?=$customer->getId()?>">
                <button type="button" class="mw-3 btn btn-lg btn-success">
                    Aanpassen
                </button>
            </a> 
        </div>
    </form>
</div>