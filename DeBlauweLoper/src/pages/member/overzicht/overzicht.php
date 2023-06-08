
<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<html>
    <body>
            <div class="row">
                <div class= "col-md-12 mt-4">

                    <?php if(isset($_SESSION['message'])) : ?>
                    <h5 class= "alert alert-success"><?= $_SESSION['message']; ?></h5>
                    <?php endif; ?>
                </div>
            </div>
        
            

            <div class = "overzicht">
                <h2>Ledenoverzicht</h2>
            </div>

            <br> </br> 

            <div class= "row">  
                <div class="col-md-12"> 
                    <div class= "table-responsive"> 

                    <table class= "table table-bordered table-striped">
                    <thead>
                        <th>#</th>
                        <th>Naam</th>
                        <th>E-mail</th>
                        <th>Telefoonnummer</th>
                        <th>Geboortedatum</th>
                        <th>Wachtwoord (hash)</th>
                        <th>Lidtype</th>
                    </thead>
                    <tbody>
                        <?php 
                        require "db_conn.php"; 
                        $statement = $pdo->prepare("SELECT * FROM user"); 
                        $statement->execute(); 
                        $number_of_rows = $statement->fetchColumn(); 

                        $result = $statement->fetchAll(); 
                        if($result)
                        {
                            foreach($result as $row)
                            {
                                ?>
                                <tr>
                                    <td><?= $row['id']; ?></td>
                                    <td><?= $row['name']; ?></td>
                                    <td><?= $row['email']; ?></td>
                                    <td><?= $row['phone']; ?></td>
                                    <td><?= $row['birth']; ?></td>
                                    <td><?= $row['password_hash']; ?></td>
                                    <td><?= $row['member']; ?></td>
                                </tr>
                                <?php                                
                            }
                        }
                        else 
                        {
                       
                        ?>
                        <tr>
                            <td colspan="7">Geen overzicht gevonden</td>
                        </tr>
                        <?php
                        }
                    ?>
                    </tbody>
                    </table>
            </div>
        </div>
    </body>
</html>