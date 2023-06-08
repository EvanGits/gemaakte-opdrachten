<!DOCTYPE html>
<html lang="nl">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>CRUD menu's</title>
    </head>
    <body>

    <div class= "container">
        <div class="row">
            <div class= "col-md-12 mt-4">

            <?php if(isset($_SESSION['message'])) : ?>
            <h5 class= "alert alert-success"><?= $_SESSION['message']; ?></h5>
            <?php endif; ?>

            </div>
        </div>
    </div>

        <nav class="navbar navbar-light justify-content-center mb-5"> 
         Menu Overzicht
        </nav>

        <div class = "index_header">
        <h2>Overzicht</h2>
    </div>
</div>

<div class = "add_content">
    <a href="add_menu.php" class="btn btn primary">Menu toevoegen</a>
</div>
        <table class = "index_content table-hover text-center justify-content-center">
            <thead class= "table-dark">
              <tr> 
                <th scope= "col">ID</th>
                <th scope= "col">Menu naam</th>
                <th scope= "col">Gerechten</th>
                <th scope= "col">Ingrediënten</th>
             </tr>
        
             <table class = "index_container table-hover text-center justify-content-center">
             <thead class= "table-light">
      
             <?php 
                require "db_conn.php"; 
                $query= "SELECT * FROM menus"; 
                $statement = $connection-prepare($query); 
                $statement->execute(); 

                $statement->setFetchMode(PDO::FETCH_ASSOC); 
                $result = $statement->fetchAll(); 
                if($result)
                {
                    foreach($result as $row)
                    {
                        ?>
                    <tr>
                    <th scope= "row"></th>
                    <td><?= $row['id']; ?> </td>
                    <td><?= $row['menu_naam']; ?> </td>
                    <td><?= $row['gerechten']; ?> </td>
                    <td><?= $row['ingrediënten']; ?> </td>
                    <td>
                        <a href="edit_menu.php?id=<?= $row->id; ?>" class= "btn btn-primary">Bewerken</a>
                    </td>
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
       
        </body>
    </table>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>

</html>
