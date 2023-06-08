<?php require_once('../../../private/initialize.php'); ?>
<?php
            $customers = [
            ['id' => '1', 'firstname' => 'Evan', 'surname' => 'Geerts', 'Email' => 'evan.geerts@testmail.com', 'phone' => '06029121'],
            ['id' => '2', 'firstname' => 'Peter', 'surname' => 'Obelix', 'Email' => 'peter.obelix@testmail.com', 'phone' => '06387532' ],
            ['id' => '3', 'firstname' => 'Maria', 'surname' => 'Asterix', 'Email' => 'maria.asterix@testmail.com', 'phone' => '06239436'],
            ['id' => '4', 'firstname' => 'Philip', 'surname' => 'Chateau', 'Email' => 'philip.chateau@testmail.com', 'phone' => '06764156'],
            ];
?>

<body>
            <?php $page_title = 'Klanten'; ?>
            <?php include(SHARED_PATH .'/admin_header.php'); ?>
        
            
            <div class= "container d-flex justify-content-center align-items-center" role="main"> 
                <div class= "clearfix">

                <div class=" col-8 shadow mt-5 mb-5 px-3 py-3 border border-secondary border-3 peliculla-theme";> 
                        <h1>Klantenoverzicht</h1>
                </div>
            
          
                <div class="col-4 mb-2">
               <a href="<?php echo url_for('admin/customers/new.php'); ?>"> <button type= "action" class="btn btn-success">Nieuwe klant toevoegen</button> </a>
                </div>


         
             
            <table class= "table shadow mb-5 px-3 py-3 border border-secondary border-3"> 
                <tr class="peliculla-theme">
                    <th>ID</th>
                    <th>Voornaam</th>
                    <th>Achternaam</th>
                    <th>Email</th>
                    <th>Telefoonnummer</th>

                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
                

            <?php foreach($customers as $customer) { ?>
                <tr>
                            <td><?php echo h_char($customer['id']); ?></td>
                            <td><?php echo h_char($customer['firstname']); ?></td>
                            <td><?php echo h_char($customer['surname']); ?></td>
                            <td><?php echo h_char($customer['Email']); ?></td>
                            <td><?php echo h_char($customer['phone']); ?></td>

                            <td> <a class="action" href="<?php echo url_for('/admin/customers/view.php?id=' . h_char(u($customer['id']))); ?>"> <button type="action" class="btn btn-secondary"> <img src="../../images/view.png" width="40"/></button> </a></td>
                            <td> <a class="action" href="<?php echo url_for('/admin/customers/edit.php'); ?>"> <button type="action" class="btn btn-primary"> <img src="../../images/edit.png" width="40"/></button></a></td>
                            <td><button type="action" class="btn btn-danger"> <img src="../../images/delete.png" width="40"/></button></td>
                </tr>
            <?php } ?>
            </table>
            </div>
    </div>
    <?php include(SHARED_PATH .'/admin_footer.php'); ?>
</body>

