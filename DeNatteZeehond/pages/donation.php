<?php
$ranking = 1;
$msg = "";

if (isset($_SESSION['user'])) {
    $user = Customer::getCustomerById($_SESSION['user']->getId());
    $donation = $_SESSION['user'];


    if (isset($_POST["update"])) {
        (new Customer($_SESSION["user"]->getId(), $_SESSION["user"]->getName(), $_SESSION["user"]->getEmail(), $_SESSION["user"]->getPhone(), $_SESSION["user"]->getPassword(), $_POST["donation"], $_SESSION["user"]->getcustomerStatusId()))->updateCustomerById();
        header("Location: ". ROOT . "/donation");
    }
}
else
{
    $user = Customer::getCustomerByName("Anoniem");
    if (isset($_POST["update"])) 
    {
        (new Customer($user->getId(), $user->getName(), $user->getEmail(), $user->getPhone(), $user->getPassword(), $_POST["donation"], $user->getcustomerStatusId()))->updateCustomerById();
        $msg = "Bedankt voor uw donatie!";
    }
}

?>
<main>
    <div class="container col-12" style="margin-top: 8%;">
        <div class="row g-4 py-5">
            <div class="col-5">
                <div class="justify-content-center">
                    <div class="col-lg-10 primary-box-color shadow rounded">
                        <div class="wrap">
                            <img src="" alt="">
                            <div class="login-wrap p4 p-md-5">
                                <h3 class="text-center text-white">Donatie plaatsen</h3>
                                <img src="./images/seal.png" class="mt-5 mx-auto d-flex" width="150vh" height="150vh">
                                <form method="post" class="form">
                                    <div class="form-group mt-5">
                                        <input type="number" name="donation" class="form-control" placeholder="Bedrag" required>
                                    </div>
                                    <div class="form-group mt-2">
                                        <button type="submit" name="update" class="form-control btn bg-success text-white shadow rounded mt-2"><h4>Doneren</h4></button>
                                        <h5 class="text-center"><?php if(!empty($msg)){ echo $msg;} ?></h5>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div class="col-lg-12">
                    <h1 class="text-center">Top donateurs!</h1>
                    <table class="table mt-5 bdr table-striped shadow" >
                        <thead style="background-color: #7895B2;">
                            <tr class="text-white">
                                <th>Top donateurs:</th> 
                                <th>Naam:</th>
                                <th>Bedrag:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach (Customer::selectDonastionList() as $customer) : ?>
                            <tr>
                                <?php for ($i=0; $i<(count($customer)/2) ; $i++) : ?>
                                    <?php if ($i == 0) : ?>
                                        <td><?= $ranking++ ?></td>
                                    <?php elseif($i == 1) : ?>
                                        <td><?= ucwords($customer[$i])?></td>
                                    <?php elseif($i == 2) : ?>
                                        <td>€<?=$customer[$i]?>,-</td>
                                    <?php else : ?>    
                                        <td><?= $customer[$i]?></td>
                                    <?php endif; ?>
                                <?php endfor;?>     
                            </tr>
                            <?php endforeach;?>                  
                        </tbody>
                    </table>
                    <p class="text-center mt-5">
                        Namens ons team, bedankt voor het doneren. <br>
                        Dankzij uw bijdragen kunnen wij onze zeehonden voorzien van een beter leven.
                    </p>
                </div>
            </div>            
        </div>
    </div>
</main>