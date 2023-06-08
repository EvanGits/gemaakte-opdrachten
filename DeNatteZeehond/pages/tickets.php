<?php
$ticketDate = ""; $check = "";
?>

<!-- admin / member check -->
<?php if(Customer::getCustomerById($_SESSION["user"]->getId())->getcustomerStatusId() == 2) : ?>     
    <section class="text-center mt-5">
        <h2>Alle Tickets</h2>
    </section>
<?php else : ?>
    <section class="text-center mt-5">
        <h2>Uw Tickets</h2>
    </section>     
<?php endif; ?>

<section class="container mt-5">
    <?php if(Customer::getCustomerById($_SESSION["user"]->getId())->getcustomerStatusId() == 2) : ?>
        <!--search by name  -->
        <div class="mb-3" style="float:left">
            <form class="form-horizontal" method="post">
                <input type="text" list="customers" class="form-control" name="customer" placeholder="Zoek op naam...">
                <datalist id="customers">
                    <?php foreach(Customer::selectCustomerList() as $customer) : ?>
                        <option class="form-control fs-4" value="<?=$customer["name"]?>"></option>
                    <?php endforeach; ?>    
                    <input type="submit" class="btn button-color-non text-light btn-md" name="search">
                </datalist>
            </form>
        </div>
        <form class="mb-3" style="float:left" method="post">
            <input type="submit" class="btn button-color-non text-light btn-md" name="viewAll" value="alle klanten">
        </form>
    <?php endif;?>  
    <div class="mb-3 text-center" style="float:right">
        <a href="<?= ROOT ?>/tickets/addTicket"> <button type="button" class="btn btn-success">Toevoegen</button></a>
    </div>                    
</section>

<div class="container">
    <table class="table mt-5 bdr shadow" >
        <thead style="background-color: #7895B2;">
            <tr class="text-white">
                <th>Ticket Nummer</th> 
                <th>Datum</th>
                <th>Naam</th>
                <th>Wijzigen</th>
                <th>Verwijderen</th>
            </tr>
        </thead>
        <tbody>
            <!-- admin / member check -->
            <?php if(Customer::getCustomerById($_SESSION["user"]->getId())->getcustomerStatusId() == 2) : ?>     
                <?php if(isset($_POST["search"])) : ?>
                    <?php $ticket = Tickets::getAllTicketsByName($_POST["customer"])?>
                <?php else : ?>
                    <?php $ticket = Tickets::getAllTickets(); ?>
                <?php endif; ?>
            <?php else : ?>
                <?php $ticket = Tickets::getAllTicketsById($_SESSION["user"]->getId()); ?>
            <?php endif; ?>
            <?php for ($i = 0; $i < count($ticket); $i++) : ?>
                <?php if($ticketDate != $ticket[$i]['date']){$check = !$check;}?>
                <tr class="<?=($check) ? "bg-light text-dark" : "";?>">
                    <?php for ($j = 0; $j < (count($ticket[$i]) / 2); $j++) : ?>
                        <?php if($j == 0) : ?>
                            <td>
                                <?php if($ticket[$i][$j] < 10) : ?>
                                    <?= date("ymd", strtotime($ticket[$i]["date"])) ?>00<?=$ticket[$i][$j]?> 
                                <?php elseif($ticket[$i][$j] > 9 && $ticket[$i][$j] < 100) : ?>
                                    <?= date("ymd", strtotime($ticket[$i]["date"])) ?>0<?=$ticket[$i][$j]?> 
                                <?php else : ?>
                                    <?= date("ymd", strtotime($ticket[$i]["date"])) ?><?=$ticket[$i][$j]?> 
                                <?php endif; ?>
                            </td>
                        <?php elseif ($j == 1) : ?>
                            <td>
                                <?= date("d-m-Y", strtotime($ticket[$i][$j])) ?>
                                vanaf:
                                <?= date("H:i", strtotime($ticket[$i][$j])) ?>
                            </td>
                        <?php elseif ($j == 2) : ?>
                            <td><?=ucwords($ticket[$i][$j])?></td>
                        <?php elseif ($j == 3 || $j == 4) : ?>
                            <!-- usage buttons -->
                            <td>
                                <div class="btn-group d-flex">
                                    <a href="<?= ROOT ?>/tickets/editTicket?id=<?=$ticket[$i][$j]?>"> <button type="button" class="btn btn-info">Wijzigen</button></a>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group d-flex">
                                    <a href="<?= ROOT ?>/tickets/deleteTicket?id=<?=$ticket[$i][$j]?>"> <button type="button" class="btn btn-danger">Verwijderen</button></a>
                                </div>
                            </td>
                        <?php else : ?>
                            <td><?=$ticket[$i][$j]?></td>
                        <?php endif; ?>
                    <?php endfor; ?>
                </tr>
                <?php $ticketDate = $ticket[$i]['date']; ?>
            <?php endfor; ?>  
        </tbody>
    </table>
</div>