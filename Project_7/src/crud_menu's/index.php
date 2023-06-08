<!DOCTYPE html>
<html>
<head>

    <title>CRUD menu's</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <!-- Bootstrap -->

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->

    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

</head>    
    <body>
            <div class="row">
                <div class= "col-md-12 mt-4">

                    <?php if(isset($_SESSION['message'])) : ?>
                    <h5 class= "alert alert-success"><?= $_SESSION['message']; ?></h5>
                    <?php endif; ?>

                    <nav class="navbar"> 
                        Menu Overzicht
                    </nav>
                </div>
            </div>
        
            

            <div class = "index_header">
                <h2>Overzicht</h2>
            </div>

            <div class= "row">  
                <div class="col-md-12"> 
                    <div class= "table-responsive"> 


                    <table class= "table table-bordered table-striped">
                    <thead>
                        <th>#</th>
                        <th>Menu Naam</th>
                        <th>Gerechten</th>
                        <th>Ingrediënten</th>
                    </thead>
                    <tbody>
                        <?php 
                        require "db_conn.php"; 
                        $statement = $pdo->prepare("SELECT * FROM menus"); 
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
                                    <td><?= $row['menu_naam']; ?></td>
                                    <td><?= $row['gerechten']; ?></td>
                                    <td><?= $row['ingrediënten']; ?></td>
                                </tr>
                                <?php                                
                            }
                        }
                        else 
                        {
                       
                        ?>
                        <tr>
                            <td colspan="5">Geen overzicht gevonden</td>
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
