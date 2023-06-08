<?php 

//checkt of pagina titel is geset. Zo niet, dan blijft de pagina titel leeg.
    if(!isset($page_title)) {
        $page_title = 'Admin Area'; 
    }

?>

<!-- begin van HTML !-->
<!DOCTYPE html>

<!-- taal !-->
<html lang="nl">

<!-- begin header !-->
    <head>
    <!-- haalt string variabele page_title op. Wordt toegepast in elke pagina met een verwijzing naar de header. 
    !-->
        <title>PelliculaAdmin - <?php echo h_char($page_title); ?></title>
        <meta charset= "utf-8"> 
    
    <!-- opmaak links !-->
        <link rel="stylesheet" media="all" href=" <?php echo url_for('/stylesheets/admin.css'); ?>"/>
        <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    
    <!-- begin inhoud webpagina !-->    
    <body>
    
     <!-- navigatiebalk (met Bootstrap) 
     eigenschappen: 
     - navbar= navigatiebalk 
     - p-3= padding (opvulling) horizontaal én verticaal (size 3)
     - navbar-expand-lg= responsive collapsing - content wordt samengevoegd en grootte aangepast op schermgrootte (size large)
     - peliculla-theme= thema/opmaak voor balk - achtergrondkleur (zie admin.css)
     - border= balkranden
     - border-secondary= type rand (in dit geval secondary)
     - border-3= bordergrootte (size 3)
     !-->    
        <nav class="navbar p-3 navbar-expand-lg peliculla-theme border-bottom border-secondary border-3" >
    
    <!-- division met col(size 5). balk voor de logo/titel !--> 
        <div class= "col-5"> 

        <!-- division voor logo afbeelding !-->
            <div class= "image">  

                <!-- actieknop met link tag. php echo WWW_ROOT .'/admin/index.php'; ?> verwijst hier naar de locatie waar de link naartoe moet. In >...< zit content van actieknop (in dit geval logo afbeelding) !-->
                <a href="<?php echo WWW_ROOT . '/admin/index.php'; ?>" class="action"> <img src= "<?php echo WWW_ROOT . '/images/logo.png'; ?>" alt="Peliculla_logo" width="95" height="95"> </a>
         <!-- einde logo afbeelding division !-->
        </div>
    <!-- einde van division (balk) !-->   
     </div>


     <!-- division met col(size 2). navigatiebalk - klantenoverzicht.  !-->
        <div class= "col-2">
        
        <!-- unordered list !-->
            <ul>
        <!-- list tag met hierin een link. php echo functie waar de balk naartoe moet.
         nav-link is de bootstrap class (opmaak) met padding (size 2), bg-dark (background) en rounded (ronde randen). Tussen >...< is de naam (content) gegeven. 
         !-->
                <li><a href="<?php echo WWW_ROOT . '/admin/customers/index.php'; ?>" class="nav-link text-light p-2 bg-dark rounded">Klantenoverzicht</a></li>
        <!-- einde unordered list !-->
            </ul>

        <!-- einde van division !-->   
        </div>
  
     <!-- division met col(size 2). navigatiebalk - paginaoverzicht.  !-->
        <div class= "col-2">

         <!-- unordered list !-->
            <ul>
        <!-- link tag met hierin een link !-->
                <li><a href="<?php echo WWW_ROOT . '/admin/pages/index.php'; ?>" class="nav-link text-light p-2 bg-dark rounded">Paginaoverzicht</a></li>
        <!-- einde unordered list !-->
            </ul>
        
        <!-- einde van division !-->   
        </div>

        <!-- division met col(size 2). navigatiebalk - filmlijst.  !-->
        <div class= "col-2">

         <!-- unordered list !-->
            <ul>

             <!-- link tag met hierin een link !-->
                <li><a href="<?php echo WWW_ROOT . '/admin/movies/index.php'; ?>" class= "nav-link text-light p-2 bg-dark rounded">Filmlijst</a></li>
         <!-- einde unordered list !-->
            </ul>
        
         <!-- einde van division !-->  
        </div>
       
        <!-- einde van navigatiebalk !-->
        </nav>

<!-- einde header !-->
</head>