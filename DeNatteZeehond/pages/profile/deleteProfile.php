<!-- information functions -->
<?php
    $error = "";
    $customer = Customer::getCustomerById($_GET["id"]);
            
        if(!empty($_POST))
        { 
            //delete function
            $login = Login::login($customer->getEmail(),$_POST["password"]);
            if($login)
            {
                $customer->deleteCustomerById();
                header("Location: ". ROOT . "/account/logout");
            }
            else 
            {
                $error = "het wachtwoord is onjuist";    
            }
           
        }
    ?>
    <section class="text-center mt-5">
        <h2>Profiel verwijderen</h2>
    </section>
    <!-- from delete profile -->
    <div class="d-flex justify-content-center mt-5">
        <form class="form-horizontal p-5 rounded primary-box-color shadow" method="post">
            <div class="mb-3">
                <label class="form-label">Voer uw wachtwoord in:</label>
                <input type="password" name="password" class="form-control fs-4">
            </div>
            <div class="d-flex justify-content-center">
                <a href="<?=ROOT?>/profile?id=<?=$customer->getId()?>">
                    <button type="button" class="me-3 btn btn-lg text-light button-color-pressed">
                        Terug
                    </button>
                </a>
                <input class="btn btn-danger btn-lg" type="submit" value="Verwijderen">
            </div>
            <div class="text-center text-danger mt-3">
                <h5>
                <?php if(!empty($error)) {echo $error;}?>
                </h5>
            </div>
        </form>
        
    </div>