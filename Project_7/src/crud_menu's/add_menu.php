<?php 
include('db_conn.php');
error_reporting(E_ERROR | E_PARSE); 

if(isset($_POST['btnsave'])){}{

    $menu_naam = $_POST['menu_naam']; 
    $gerechten = $_POST['gerechten']; 
    $ingrediënten = $_POST['ingrediënten'];
    
 

    if(!empty($menu_naam && $gerechten && $ingrediënten)){

        $insert = $pdo->prepare("insert into menus (`menu_naam`,`gerechten`,`ingrediënten`) values(:menu_naam,:gerechten,:ingredienten)");

        $insert->bindParam(':menu_naam',$menu_naam, PDO::PARAM_STR);  
        $insert->bindParam(':gerechten',$gerechten, PDO::PARAM_STR); 
        $insert->bindParam(':ingredienten',$ingrediënten, PDO::PARAM_STR); 

        $insert-> execute(); 

        if($insert->rowCount()){
            header('Location: index.php');
            echo'Succesvol ingevoerd';
            exit(0); 

        }else{

            echo'Invoering mislukt'; 
    }
}else{
    echo'Velden zijn leeg'; 

}
}
?>

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
        <nav class="navbar navbar-light justify-content-center mb-5"> 
          
         Menu Overzicht (CRUD menu's) 
       
        </nav>

    <div class="header">
        <div class= "text text-left mb-4">
               <h2> Voeg Nieuw Menu Toe </h2>
            <p class= "text muted">In dit venster kan een nieuw menu worden toegevoegd.</p>
        </div>
    </div>


        <div class="content d-flex justify-content-center"> 
            <form action="" method="POST" style="width:50vw; min-width:300px;">
                <div class= "row-mb-3">
                    <div class= "col"> 
                        <label class= "form-label">Menu naam:</label>
                       <p> <input type= "text" name = "menu_naam" class= "form-control"
                        placeholder="Bijv. Vis"> </p>

                    <div class= "col">
                        <label class= "form-label">Gerechten:</label>
                        <p><input type= "text" name = "gerechten" class= "form-control"
                        placeholder="Bijv. kreeftensoep"></p>
                    </div>

                    <div>
                        <label class= "form-label">Ingrediënten:</label>
                        <p><input type= "text" name = "ingrediënten" class= "form-control"
                        placeholder="Bijv. suiker"></p>
                    </div>

        <div class= "footer d-flex justify-content-center">
                    <button type= "submit" name= "btnsave" class= "btn btn-primary me-3">Opslaan</button>

                    <a href= "index.php" class="btn btn-danger me-1">Annuleren</a>
                </div>
            </div>
        </form>
    </div>
</div>







        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>

</html>