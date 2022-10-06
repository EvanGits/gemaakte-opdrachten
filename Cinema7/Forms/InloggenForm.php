<!--
	Opdracht PM07 STAP 1: Inlogsysteem
	Omschrijving: Maak het formulier met 2 velden en de link naar de pagina registreren in html code

	inloggen 
	Evan
-->
<?php
//$_POST['variable_name']; 
//print_r($_POST) 
?>

<a href= "index.php?PaginaNr=6">Klik</a>

<form method= "post" action="index.php?PaginaNr=4">
    <p> Gebruikersnaam:
        <input type = "text" name= "Gebruikersnaam" size= "20" maxlength="40" />
    </p>

    <p> Wachtwoord:
        <input type = "password" name= "Wachtwoord" size= "20" maxlength="40" />
    </p>

    <input type = "submit" name= "Inloggen" value= "Inloggen" size= "20">
</form>

<br> </br>
<p> Heeft u nog geen account? Registreer dan <a href= "index.php?PaginaNr=6">hier </a> 
</p> 