
<?php require_once('../../private/initialize.php'); ?>

<?php $page_title = 'Admin menu'; ?>
<?php include(SHARED_PATH .'/admin_header.php'); ?>

<main>
    <div id="content"> 
        <div id="main-menu"> 
        <h2>Hoofdmenu</h2>
            <ul>
                <li>
                    <a href=<?php echo url_for('admin/customers/index.php'); ?>>Klanten</a>
                </li>

                <li>
                    <a href=<?php echo url_for('admin/pages/index.php'); ?>>Pagina's</a>
                </li>
            </ul>
        </div>
    </div>
</main>

<?php include(SHARED_PATH .'/admin_footer.php'); ?>
