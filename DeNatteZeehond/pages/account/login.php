<?php
$database = new DBConn();
$user = new Login($database);

// Check login
if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $customer = Login::login($email, $password);

    if ($user->login($email, $password)) {
        if (isset($customer))
        {
            // Successful login
            header("location: " . ROOT . "/profile");
            $_SESSION["user"] = $customer;
        }
    }
    else
    {
        // Unsuccessful login
        echo 'Invalid email or password';
    }
}
?>

<!-- Login form -->
<!--<form method="post">-->
<!--    <input type="email" name="email" placeholder="Email">-->
<!--    <input type="password" name="password" placeholder="Password">-->
<!--    <button type="submit" name="login">Login</button>-->
<!---->
<!--    <div>-->
<!--        <p class="mb-0">Don't have an account? <a href="register" class="">Sign Up</a>-->
<!--        </p>-->
<!--    </div>-->
<!--</form>-->

<section class="text-center mt-5">
    <h2>Mijn<span><img style="width:3%; height:auto;" src="../images/seal.png"></span><span>Account </span></h2>
</section>


<div class="d-flex justify-content-center mt-5 text-light">
    <form class="form-horizontal p-5 rounded primary-box-color shadow" method="post">
        <div class="mb-3">
            <label class="form-label">Email:</label>
            <input class="form-control fs-4" type="email" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label">Wachtwoord:</label>
            <input class="form-control fs-4" type="password" name="password">
        </div>
        <div class="mb-3">
            <button type="submit" name="login" class="me-3 btn btn-lg btn" style="background-color: #7895B2;">
                login
            </button>
        </div>
            <div class="mb-0">
                <p class="mb-0">Heb je nog geen account? <a href="register" class="">Maak Aan</a>
                </p>
            </div>
    </form>
</div>