<?php
if (!empty($_POST)) 
{
    $user = User::login($_POST['name'], $_POST['password'] );

    if(isset($user))
    {
        $_SESSION['user'] = $user;
        echo "succes";
        header('Location:'.ROOT );
    }
    
}
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 col-lg-4 achtergrond-box shadow rounded">
            <div class="wrap">
                    <img class="img mx-auto d-block mt-5" src="<?= ROOT ?>/img/loper.png" width="100vh" height="100vh">            
                <div class="login-wrap p-4 p-md-5">
                    <div class="d-flex">
                        <div class="w-100">
                            <h3 class="mb-8">Login</h3>
                        </div>
                    </div>
                    <form method="post" class="signin-form">
                        <div class="form-group mt-3">
                            <label class="form-control-placeholder" for="Naam">Naam:</label> 
                            <input type="text" id="Naam" class="form-control" name="name" placeholder="Naam" required>            
                        </div>
                        <div class="form-group mt-3">
                            <label class="form-control-placeholder" for="Wachtwoord">Wachtwoord:</label>
                            <input type="password" id="Wachtwoord" class="form-control" name="password" placeholder="Wachtwoord" required>                        
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn rounded submit px-3 mt-2">Inloggen</button>
                        </div>
                    </form>
                    <p class="text-center mt-2">Nog geen account? <a href="registreer">Regristreren</a></p>                
                </div>
            </div>
        </div>         
    </div>
</div>



