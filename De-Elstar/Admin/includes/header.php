<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Elstar Medewerkers</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link href="assets/js/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="assets/css/sb-admin-2.css" rel="stylesheet">
    <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>

</head>

<body>

    <div id="wrapper">

        <?php if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] == true) : ?>
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="">De Elstar Medewerkers</a>
                </div>

                <ul class="nav navbar-top-links navbar-right">

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="../"><i class="glyphicon glyphicon-share-alt fa-fw"></i> Terug naar home</a></li>
                            <li><a href="edit_admin.php?admin_user_id=<?php echo $_SESSION['user_id']; ?>&operation=edit"><i class="fa fa-gear fa-fw"></i> Gebruiker Profiel</a></li>
                            <li class="divider"></li>
                            <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Log uit</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li><a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>
                            <li<?php echo (CURRENT_PAGE == 'customers.php' || CURRENT_PAGE == 'add_customer.php') ? ' class="active"' : ''; ?>>
                                <a href="#"><i class="fa fa-user-circle fa-fw"></i> Klanten<i class="fa arrow"></i></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="customers.php"><i class="fa fa-list fa-fw"></i> Lijst</a></li>
                                    <li><a href="add_customer.php"><i class="fa fa-plus fa-fw"></i> Nieuw toevoegen</a></li>
                                </ul>
                                </li>
                                <li<?php echo (CURRENT_PAGE == 'bike.php' || CURRENT_PAGE == 'add_bike.php') ? ' class="active"' : ''; ?>>
                                    <a href="#"><i class="fa fa-user-circle fa-fw"></i> Fietsen<i class="fa arrow"></i></a>
                                    <ul class="nav nav-second-level">
                                        <li><a href="bike.php"><i class="fa fa-list fa-fw"></i> Lijst</a></li>
                                        <li><a href="add_bike.php"><i class="fa fa-plus fa-fw"></i> Nieuw toevoegen</a></li>
                                    </ul>
                                    </li1>
                                    <li><a href="admin_users.php"><i class="fa fa-users fa-fw"></i> Medewerkers</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        <?php endif; ?>