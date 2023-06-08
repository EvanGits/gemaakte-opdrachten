<!-- HTTP header !-->
<?php

require_once('../../../private/initialize.php');

//superglobal $_GET variabele test met value(waarde) test
$test = $_GET['test'] ?? ''; 

//ifelse function (checkt waarde van test en gevolg hierbij)
if($test == '404') {
    error_404(); 
    }elseif($test == '500'){
    error_500(); 
    }elseif($test == 'redirect'){
    
    //functie redirect_to($location) == $location - het set de header dynamisch + exit (geen executie andere code)
    redirect_to(url_for('/admin/customers/index.php')); 

    }else{
     echo ''; 
    } 


?>

<!-- pagina titel !-->
<?php $page_title = 'Klant toevoegen'; ?>

<!-- header !-->
<?php include(SHARED_PATH .'/admin_header.php'); ?>

<!-- terug link !-->
<a class= "terug" href="<?php echo url_for('/admin/customers/index.php'); ?>">&laquo; Terug naar klantenoverzicht</a>

<!-- content !-->
<div class= "container d-flex justify-content-center align-items-center" role="main">
    <div class= "clearfix"> 
    <div class= " col-8 shadow mt-5 mb-5 px-3 py-3 border border-secondary border-3 peliculla-theme";> 
        <h1>Nieuwe klant toevoegen</h1>
    </div>


    <!-- formulier !-->
<div class= "table shadow mb-5 px-3 py-3 border border-secondary border-3">
    <form action="" method="post">
        <dl>
            <dt>Voornaam</dt> 
            <dd><input type= "text" name="firstname" value=""/></dd>
        </dl>

        <dl>
            <dt>Achternaam</dt>
            <dd><input type= "text" name="surname" value=""/></dd>
        </dl>

        <dl>
            <dt>E-mail</dt>
            <dd><input type= "email" name="email" value=""/></dd>
        </dl>

        <dl>
            <dt>Telefoonnummer</dt>
            <dd><input type= "tel" name="phone" patern= "[0-9]{2}-[0-9]{2}-[0-9]{3}"/></dd>
        </dl>
            
        <div id= "operations"> 
              <input type= "submit" value= "Toevoegen"/>
        </div>
    </form>
</div>
</div>
<!-- footer !-->     
<?php include (SHARED_PATH .'/admin_footer.php'); ?>


