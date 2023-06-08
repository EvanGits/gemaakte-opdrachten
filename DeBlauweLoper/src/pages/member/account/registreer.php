<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 col-lg-4 achtergrond-reg shadow rounded">
            <div class="wrap">
                    <img class="img mx-auto d-block mt-5" src="<?= ROOT ?>/img/loper.png" width="100vh" height="100vh">            
                <div class="login-wrap p-4 p-md-5">
                    <div class="d-flex">
                        <div class="w-100">
                            <h3 class="mb-8">Registreren</h3>
                        </div>
                    </div>
                    <form method="post" class="signin-form">
                        <div class="form-group mt-3">
                            <label class="form-control-placeholder" for="Naam">Gebruikersnaam:</label> 
                            <input type="text" id="Naam" class="form-control" name="name" placeholder="Naam" required>            
                        </div>
                        <div class="form-group mt-3">
                            <label class="form-control-placeholder" for="mail">E-mail:</label> 
                            <input type="text" id="mail" class="form-control" name="mail" placeholder="E-mail" required>
                        </div>
                        <div class="form-group mt-3">
                            <label class="form-control-placeholder" for="birth">Geboortedatum:</label> 
                            <input type="date" id="birth" class="form-control" name="birth" placeholder="Geboortedatum" required>
                        </div>
                        <div class="form-group mt-3">
                            <label class="form-control-placeholder" for="phone">Telefoonnummer:</label> 
                            <input type="text" id="phone" class="form-control" name="phone" placeholder="Telefoonnummer" required>
                        </div>
                        <div class="form-group mt-3">
                            <label class="form-control-placeholder" for="Wachtwoord">Wachtwoord:</label>
                            <input type="password" id="Wachtwoord" class="form-control" name="password" placeholder="Wachtwoord" required>                        
                        </div>
                        <div class="form-group mt-3">
                            <label class="form-control-placeholder" for="passwordRepeat">Wachtwoord herhaal:</label>
                            <input type="password" id="passwordRepeat" class="form-control" name="passwordRepeat" placeholder="Wachtwoord herhaal" required>                            
                        </div>
                        <div class="form-group">
                            <button type="submit" name="registreren" class="form-control btn rounded submit px-3 mt-2">Inloggen</button>
                        </div>
                    </form>
                    <p class="text-center mt-2">Al een account? <a href="login">Login</a></p>                
                </div>
            </div>
        </div>         
    </div>
</div>

<?php
if(!empty($_POST)){
    if($_POST['password'] == $_POST['passwordRepeat']){
        $member = 1;
        $pUser = User::check($_POST['name']);
        if($pUser == null)
            $user = User::register($_POST['name'], $_POST['mail'],$_POST['phone'],  $_POST['birth'], $_POST['password'], $member);
        if(isset($user))
        {
            $_SESSION['user'] = $user;
            header('Location:'.ROOT );
        }
    }
}
unset($_POST);

?>