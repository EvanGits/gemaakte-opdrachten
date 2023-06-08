<?php
$user = $_SESSION['user'];

if(!empty($_POST))
{   
    $user = User::updateUser($user->getId(), $_POST['name'], $_POST['mail'], "0612345678" , "2022/02/02", $_POST['password'], 1);

    $_SESSION['user'] = $user; 
    header("Location: ". PATH);  
    exit;
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
                            <h3 class="mb-8">Beheren</h3>
                        </div>
                    </div>
                    <form method="post" class="signin-form">
                        <div class="form-group mt-3">
                            <label class="form-control-placeholder" for="Naam">Naam:</label> 
                            <input type="text" name="name" class="form-control" value="<?=$user->getName()?>">           
                        </div>
                        <div class="form-group mt-3">
                            <label class="form-control-placeholder" for="Wachtwoord">Email:</label>
                            <input type="text" name="mail" class="form-control" value="<?=$user->getEmail()?>">                       
                        </div>
                        <div class="form-group mt-3">
                            <label class="form-control-placeholder" for="Wachtwoord">Wachtwoord:</label>
                            <input type="password" name="password" class="form-control" value="<?=$user->getPasswordHash()?>">                      
                        </div>
                        <div class="form-group">
                            <button type="submit" name="update" value="update" class="form-control btn rounded submit px-3 mt-2">Bewerken</button>
                        </div>
                    </form>              
                </div>
            </div>
        </div>         
    </div>
</div>