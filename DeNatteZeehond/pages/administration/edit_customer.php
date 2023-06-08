<?php
$customer= Customer::getCustomerById($_GET['id']); 

?>

<main>
<div class= "container col-6">
    <div class="col-12 mt-5">
        <h3 class="text-center" >Gegevens bewerken</h3>
            <div class="row g-2 py-3">
                <form class="form-horizontal p-5 rounded primary-box-color shadow">
                    <form action="form" method="POST">
                            <div class="form group"> 
                                <label class="form-label">Naam:</label>
                                <input class= "form-control" name="name" placeholder="Wijzig hier je naam"  value="<?= $customer->getName();?>" type="text" required> 
                            </div>
                            <br>
                            <div class="form group"> 
                                <label class="form-label">Email:</label>
                                <input class= "form-control" name="email" placeholder="Wijzig hier je email" value="<?= $customer->getEmail();?>" type="text" required> 
                            </div>
                            <br>
                            <div class="form group"> 
                                <label class="form-label">Telefoon:</label>
                                <input class= "form-control" name="phone" placeholder="Wijzig hier je telefoon" value="<?= $customer->getPhone();?>"  type="tel" required> 
                            </div>
                            <br>
                            <div class="modal-footer mt-4"> 
                                <a href="<?= ROOT ?>/administration/overview" button type="button" class="btn btn-secondary">Annuleren</a>
                                <button type="submit" name="update" class="btn btn-primary ms-3">Opslaan</a>
                            </div>
                    </form>
                </form>
            </div>
    </div>
</div>
</main>
                