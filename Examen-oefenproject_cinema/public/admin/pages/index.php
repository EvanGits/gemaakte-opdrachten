<!-- Bestand initialize.php ophalen. Dit initialiseert de gegeven objecten én classes. !-->
<!-- Met require_once('functions.php'); kan ook de functions.php opgehaald worden, oftewel het bestand met (veelgebruikte) functies. Deze hoeft dan niet apart opgehaald te worden.!-->
<?php require_once('../../../private/initialize.php'); ?>

<?php
//gemaakte array in data. Hierin komen de gegevens/data te staan van een bepaalde entiteit (in dit geval $pages). 
//De eigenschappen (atrributen) in quotes ''=>, zijn de de fields(kolommen). Daarachter staan de values (waardes). 
// LET OP!. Bij int values hoeven geen quotes te staan. Bij string values wel. 

$pages = [
    ['id' => 1, 'pagename' => 'startpagina', 'usage' => 'introductie', 'date-of-creation'  => date("20/03/2023")],
    ['id' => 2, 'pagename' => 'content', 'usage' => 'algemeen', 'date-of-creation' => date("12/02/2023")], 
    ['id' => 3, 'pagename' => 'contact', 'usage' => 'benadering', 'date-of-creation' => date("15/04/2023")], 
    ['id' => 4, 'pagename' => 'info', 'usage' => 'informatie over', 'date-of-creation' => date("17/10/2022")],
]
?>

<!-- begin inhoud webpagina !-->
<body>
<!-- pagina titel genereren (string) !-->
    <?php $page_title = "Paginaoverzicht"; ?>
<!-- gedeelde header toevoegen !--> 
<?php include(SHARED_PATH .'/admin_header.php'); ?>

<!-- gehele container voor menuoverzicht (container). justify-content-center en align-items-center zorgen dat de content van de balk goed in het midden staan.
     d-flex zorgt voor compact formaat in balk.
!--> 

<div class= "container d-flex justify-content-center align-items-center" role="main"> 
<!-- onderstaande division zorgt ervoor dat informatie binnen deze division de bovenstaande eigenschappen toegewezen krijgt, 
oftewel de opmaak zal hier binnenin toegepast worden. Ook de positionering. Kan het elke naam geven, behalve Bootstrap elementen. !-->   
    <div class= "clearfix">

<!-- titelbalk van paginaoverzicht 
    eigenschappen (van Bootstrap): 
    - col= column 8 (grootte) (zie Bootstrap grid system voor meer info: https://getbootstrap.com/docs/4.0/layout/grid/)
    - shadow= genereert schaduweffect
    - mt-5= margin top (size 5)
    - mb-5= margin-bottom (size 5)
    - px-3= padding (opvulling) horizontaal (size 3)
    - py-3= padding (opvulling) verticaal (size 3)
    - border= balkranden
    - border-secondary= type rand (in dit geval secondary)
    - border-3= bordergrootte (size 3)
    - peliculla-theme= thema/opmaak voor balk - achtergrondkleur (zie admin.css)
!-->
        <div class=" col-8 shadow mt-5 mb-5 px-3 py-3 border border-secondary border-3 peliculla-theme";> 
                        <h1>Paginaoverzicht</h1>
        </div>

<!-- toevoegingsknop (gemaakt d.m.v. Bootstrap) 
     eigenschappen: 
    	- col= column 4 (grootte) (zie Bootstrap grid system voor meer info: https://getbootstrap.com/docs/4.0/layout/grid/)
        - mb-2= margin-bottom (size 5)
      
!-->
        <div class="col-4 mb-2">
                    <button type= "action" class="btn btn-success">Nieuwe klant toevoegen</button>
        </div>

<!-- tabel 
    eigenschappen: 
    - table= tabel 
    - shadow= genereert schaduweffect
    - mb-5= margin bottom (size 5)
    - px-5= padding (opvulling) horizontaal (size 3)
    - py-3= padding (opvulling) verticaal (size 3)
    - border= balkranden
    - border-secondary= type rand (in dit geval secondary)
    - border-3= bordergrootte (size 3)

!-->        
<table class= "table shadow mb-5 px-3 py-3 border border-secondary border-3"> 

    <!-- tabel rij (row) 
         eigenschappen:
         - peliculla-theme= thema/opmaak voor balk - achtergrondkleur (zie admin.css)

    !-->
    <tr class="peliculla-theme">

    <!-- tabel koppen (headers) !-->
        <th>ID</th>
        <th>Pagina-naam</th>
        <th>Gebruik</th>
        <th>Aanmaakdatum</th>

    <!-- witregels genereren zonder spatie/break !-->
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </tr>

    <!-- Hier wordt een foreach loop gegenereerd
         Dit is een methode/functie om door de array te gaan. Hierdoor kunnen attributen uit de gemaakte array gehaald worden. 
         deze kan ik laten zien op mijn scherm met echo $entiteit. De entiteit is hierbij de array.  

         LET OP!= Het is handig om entiteit/array $pages als $page te definiëren. Dit is een eigen string die waardes van de array ophaalt.
         Het best kan de string vernoemd worden naar de enkelvoudige vorm van de entiteit/array, dit i.v.m. duidelijkheid. 
         
         !-->
        
    <?php foreach($pages as $page) { ?>
        <!-- tabel rij (row) !-->
                <tr>
                <!-- tabel data. Met php echo $entiteit['attribuut'] worden ze getoond ?> !-->
                            <td><?php echo h_char($page['id']); ?></td>
                            <td><?php echo h_char($page['pagename']); ?></td>
                            <td><?php echo h_char($page['usage']); ?></td>
                            <td><?php echo h_char($page['date-of-creation']); ?></td>
                 
                <!-- actie(action) knoppen -- table data. In a href (link tag) moet ik met functie url_for de locatie bepalen waar mijn knop naartoe gaat. Met php echo haal ik deze op.
                Het geselecteerde gegeven haal ik dynamisch op met het attribuut ID van de page string. Dit vul ik in na de ?id=' parameter. Daarna vul ik de knop in en tussen >...< de content.
                (in dit voorbeeld een afbeelding). 

                eigenschappen:
                button type= type knop 
                button class= soort knop (Bootstrap)
                img src= locatie van op te halen afbeelding (content)
                !-->
                
                            <td> <a class="action" href="<?php echo url_for('/admin/pages/view.php?id=' . h_char(u($page['id']))); ?>"> <button type="action" class="btn btn-secondary"> <img src="../../images/view.png" width="40"/></button> </a></td>
                            <td> <a class="action" href="<?php echo url_for('/admin/pages/edit.php?id=' . h_char(u($page['id']))); ?>"><button type="action" class="btn btn-primary"> <img src="../../images/edit.png" width="40"/></button></td>
                            <td> <a class="action" href="<?php echo url_for('/admin/pages/delete.php?id=' . h_char(u($page['id']))); ?>"><button type="action" class="btn btn-danger"> <img src="../../images/delete.png" width="40"/></button></td>
                </tr>
        <!-- einde van foreach loop !-->
        <?php } ?>
        
        <!-- einde van tabel !-->
    </table>

    <!-- einde van division> !-->
    </div>

<!-- einde van container division !-->
</div>

<!-- gedeelde footer toevoegen !-->
    <?php include(SHARED_PATH .'/admin_footer.php'); ?>

<!-- einde inhoud webpagina !-->
</body>


<!-- LET OP!: Alle opmaakelementen (CSS) komen van Bootstrap 5.3.0_alpha1 !-->