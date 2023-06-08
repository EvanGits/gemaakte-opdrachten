<?php require_once('../../../private/initialize.php'); ?>


<?php 
//id is waarde van $_GET['id'] óf waarde 1
$id = $_GET['id'] ?? '1'; 
?>

<!-- paginatitel !-->
<?php $page_title = 'Paginainfo';?>

<!-- header !-->
<?php include(SHARED_PATH .'/admin_header.php'); ?>

<div id="content">

    <!-- terug link !-->
    <a class = "terug" href="<?php echo url_for('/staff/pages/index.php'); 
    ?>">&laquo; Terug naar paginaoverzicht</a>

    <div class= "pagina bekijken">

         <!-- ID pagina ophalen !-->
        PAGINA ID: <?php echo h_char($id); ?>

    </div>

</div>

<!-- footer!-->
<?php include(SHARED_PATH .'/admin_footer.php'); ?>