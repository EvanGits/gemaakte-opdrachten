<?php
$id = $_GET['id']; 

if(is_post_request()) {

    $_SESSION['message'] = 'De klant is succesvol verwijderd.'
    redirect_to(url_for('/administration/overview'))

}else{

}



// $customer= Customer::getCustomerById($_GET['id']); 

// $customer = new customer();
// $customer->deleteCustomerById();
?>
    <div class="container"> 
        <div class="row"> 
            <div class="col-sm-12"> 
                <h2 class="p-3 col text-center mt-5 text-white bg-primary">Klant verwijderen</h2>
            </div>

                <h2 class="p-2 col text-center mt-5 alert alert-success"> 

        </div>
    </div>