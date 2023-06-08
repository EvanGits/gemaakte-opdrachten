<?php
$database = new DBConn();

$user = new Login($database);
// Check registration
if(isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $password2 = password_hash($_POST['password2'], PASSWORD_DEFAULT);

    if ($_POST["password"] == $_POST["password2"] && strlen($_POST["password"])>=8) {
        if ($user->register($name, $email, $phone, $password)) {

            // Successful registration
            header("location: " . ROOT . "/home");
        }
    }
    elseif (strlen($_POST["password"])<8){
        echo "Uw wachtwoord is tekort";
    }
    elseif (empty($_POST['email'])) {
        echo "Please enter a valid email address.";
    }
    else {
        // Unsuccessful registration
        echo 'Error registering';
    }
}
?>

<!--<form method="post">-->
<!--    <input type="name" name="name" placeholder="Name">-->
<!--    <input type="email" name="email" placeholder="Email">-->
<!--    <input type="tel" name="phone" placeholder="Number">-->
<!--    <input type="password" name="password" placeholder="Password">-->
<!--    <input type="password" name="password2" placeholder="Retype Password">-->
<!--    <button type="submit" name="register">Register</button>-->
<!--</form>-->

<section class="text-center mt-5">
    <h2>Maak<span><img style="width:3%; height:auto;" src="../images/seal.png"></span><span>Account </span></h2>
</section>


<div class="d-flex justify-content-center mt-1 text-light">
    <form class="form-horizontal p-5 rounded primary-box-color shadow" method="post">
        <div class="mb-3">
            <label class="form-label">Naam:</label>
            <input class="form-control fs-4" type="name" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">Email:</label>
            <input class="form-control fs-4" type="email" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label">Nummer:</label>
            <input class="form-control fs-4" type="tel" name="phone">
        </div>
        <div class="mb-3">
            <label class="form-label">Wachtwoord:</label>
            <input class="form-control fs-4" type="password" name="password">
        </div>
        <div class="mb-3">
            <label class="form-label">Retype Wachtwoord:</label>
            <input class="form-control fs-4" type="password" name="password2">
        </div>
        <div class="mb-3">
            <button type="submit" name="register" class="me-3 btn btn-lg btn" style="background-color: #7895B2;">
                registreer
            </button>
        </div>
        <div class="mb-0">
            <p class="mb-0">Heb je al een account? <a href="login" class="">Ga terug</a>
            </p>
        </div>
    </form>
</div>
