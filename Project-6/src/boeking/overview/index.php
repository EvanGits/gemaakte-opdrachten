<!DOCTYPE html>
<html lang="nls">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/src/grid.css" rel="stylesheet" type="text/css">
    <link href="/src/style.css" rel="stylesheet" type="text/css">
    <link href="./style.css" rel="stylesheet" type="text/css">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <title>Boeking overzicht</title>
</head>

<body>
    <div class="row main col-xl-12">
        <div class="col-xl-1"></div>
        <div class="col-xl-9">
            <div class="boeking-title">
                <h2>Boeking overzicht:</h2>
            </div>
            <div class="col-xl-12 boeking">
                <img class="link-startpagina" src="images/donkeytravellogo.png" width="80" height="60">
                <form action="handle-boeking-buttons.php">
                    <table>
                        <tr>
                            <th></th>
                            <th></th>
                            <th>Startdatum</th>
                            <th>Aantal dagen</th>
                            <th>PIN Code</th>
                            <th>Tocht</th>
                            <th>Status</th>
                        </tr>
                        <tr>
                            <?php
                            require_once('../DB_Connection.php');
                            $result = $pdo->prepare("SELECT boekingen.ID, boekingen.Pincode, tochten.AantalDagen, klanten.naam, boekingen.StartDatum, tochten.Omschrijving, statussen.Status 
                                                     FROM boekingen LEFT JOIN klanten ON boekingen.FKklantenID = klanten.ID
                                                                    LEFT JOIN tochten ON boekingen.FKtochtenID = tochten.ID 
                                                                    LEFT JOIN statussen ON boekingen.FKstatussenID = statussen.ID");
                            $result->execute();
                            while ($row = $result->fetch()) {
                            ?>
                        <tr>
                            <td><a class="delete-knop" href="delete-boeking.php?delete=<?= $row['ID'] ?>">Delete</a></td>
                            <td><a class="edit-knop" href="index.php?selected=update-reservation&resId=<?= $row['ID'] ?>">Bijwerken</a></td>
                            <td><?php echo $row['StartDatum']  ?></td>
                            <td><?php echo $row['AantalDagen'] ?></td>
                            <td><?php echo $row['Pincode'] ?></td>
                            <td><?php echo $row['Omschrijving'] ?></td>
                            <td><?php echo $row['Status'] ?></td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <td>
                            <a class="create-reservation-button" href="index.php?selected=create-reservation">+</a>
                        </td>
                    </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class=" col-xl-2"></div>
    </div>
</body>