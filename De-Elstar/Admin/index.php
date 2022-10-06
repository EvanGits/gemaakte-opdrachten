<?php
session_start();
require_once './config/config.php';
require_once 'includes/auth_validate.php';


$db = getDbInstance();


$numUserAccounts = $db->getValue("accounts", "count(*)");
$numAdminAccounts = $db->getValue("admin_accounts", "count(*)");
$numFietsen = $db->getValue("bikes", "count(*)");

include_once('includes/header.php');
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>

    </div>

    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="glyphicon glyphicon-user fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $numUserAccounts; ?></div>
                            <div>Klanten</div>
                        </div>
                    </div>
                </div>


                <a href="customers.php">
                    <div class="panel-footer">
                        <span class="pull-left">Bekijk Klanten</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="glyphicon glyphicon-console fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $numAdminAccounts; ?></div>
                            <div>Medewerkers</div>
                        </div>
                    </div>
                </div>
                <a href="admin_users.php">
                    <div class="panel-footer">
                        <span class="pull-left">Bekijk Medewerkers</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="glyphicon glyphicon-plus-sign fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $numFietsen; ?></div>
                            <div>Fietsen</div>
                        </div>
                    </div>
                </div>
                <a href="bike.php">
                    <div class="panel-footer">
                        <span class="pull-left">Bekijk Fietsen</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">

        </div>
    </div>

</div>

<div class="col-lg-4">


</div>

</div>

</div>

<?php include_once('includes/footer.php'); ?>