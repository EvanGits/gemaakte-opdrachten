
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php 
include('db_conn.php');
error_reporting(E_ERROR | E_PARSE); 

if(isset($_POST['btnsave'])){}{

    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $phone = $_POST['phone'];
    $birth = $_POST['birth'];
    $password_hash = $_POST['password_hash'];
    $member = $_POST['member'];
    
 

    if(!empty($name && $email && $phone && $birth && $password_hash && $member)){

        $insert = $pdo->prepare("insert into user (`name`,`email`,`phone`, 'birth', 'password_hash', 'member') values(:name,:email,:phone,:birth,:password_hash,:member)");

        $insert->bindParam(':name',$name, PDO::PARAM_STR);  
        $insert->bindParam(':email',$email, PDO::PARAM_STR); 
        $insert->bindParam(':phone',$phone, PDO::PARAM_STR); 
        $insert->bindParam(':birth',$birth, PDO::PARAM_STR); 
        $insert->bindParam(':password_hash',$password_hash, PDO::PARAM_STR); 
        $insert->bindParam(':member',$member, PDO::PARAM_STR); 

        $insert-> execute(); 

        if($insert->rowCount()){
            header('Location: overzicht.php');
            echo'Succesvol ingevoerd';
            exit(0); 

        }else{

            echo'Invoering mislukt'; 
    }
}else{
    echo''; 

}
}
?> 

<!DOCTYPE html>
    <body>
        <div class= "container mt-5"> 

            <?php include('message.php'); ?>


            <div class= "row"> 
                <div class= "col-md-12"> 
                    <div class= "card"> 
                        <div class= "card-header"> 
                            <h4> Lid toevoegen
                                <a href= "overzicht.php" class="btn btn-danger float-end">Terug</a>
                            <h4>
                            </div> 
                            <div class= "card-body"> 

                                <form action= 'btnsave'method="POST">

                                    <div class= "mb-3"> 
                                        <label>Naam</label>
                                        <input type="text" name="name" class="form-control"> 
                                    </div>
                                    
                                    <div class= "mb-3"> 
                                        <label>E-mail</label>
                                        <input type="text" name="email" class="form-control"> 
                                    </div>

                                    <div class= "mb-3"> 
                                        <label>Telefoonnummer</label>
                                        <input type="text" name="phone" class="form-control"> 
                                    </div>

                                    <div class= "mb-3"> 
                                        <label>Geboortedatum</label>
                                        <input type="text" name="birth" class="form-control"> 
                                    </div>

                                    <div class= "mb-3"> 
                                        <label>Wachtwoord</label>
                                        <input type="text" name="password_hash" class="form-control"> 
                                    </div>

                                    <div class= "mb-3"> 
                                        <label>Lidtype</label>
                                        <input type="text" name="member" class="form-control"> 
                                    </div>

                                    <div class="mb-3">  
                                        <button type="submit" name="btnsave" class="btn btn-primary">Lid opslaan</button>
                                    </div>

</form> 
                         </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>



