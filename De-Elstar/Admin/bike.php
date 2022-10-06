<?php
session_start();
require_once 'config/config.php';
require_once BASE_PATH . '/includes/auth_validate.php';

// Costumers class
require_once BASE_PATH . '/lib/Bikes/Bikes.php';
$bike = new Bikes();

// Get Input data from query string
$order_by    = filter_input(INPUT_GET, 'order_by');
$order_dir    = filter_input(INPUT_GET, 'order_dir');
$search_str    = filter_input(INPUT_GET, 'search_str');

// Per page limit for pagination
$pagelimit = 15;

// Get current page
$page = filter_input(INPUT_GET, 'page');
if (!$page) {
    $page = 1;
}

// If filter types are not selected we show latest added data first
if (!$order_by) {
    $order_by = 'fietsnummer';
}
if (!$order_dir) {
    $order_dir = 'Desc';
}

// Get DB instance. i.e instance of MYSQLiDB Library
$db = getDbInstance();
$select = array('fietsnummer', 'merk', 'model', 'grootte', 'type', 'conditie', 'prijs');

// Start building query according to input parameters
// If search string
if ($search_str) {
    $db->where('fietsnummer', '%' . $search_str . '%', 'like');
    $db->orwhere('merk', '%' . $search_str . '%', 'like');
}
// If order direction option selected
if ($order_dir) {
    $db->orderBy($order_by, $order_dir);
}

// Set pagination limit
$db->pageLimit = $pagelimit;

// Get result of the query
$rows = $db->arraybuilder()->paginate('bikes', $page, $select);
$total_pages = $db->totalPages;
?>
<?php include BASE_PATH . '/includes/header.php'; ?>
<!-- Main container -->
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-6">
            <h1 class="page-header">Fietsen</h1>
        </div>
        <div class="col-lg-6">
            <div class="page-action-links text-right">
                <a href="add_bike.php?operation=create" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Nieuw toevoegen</a>
            </div>
        </div>
    </div>
    <?php include BASE_PATH . '/includes/flash_messages.php'; ?>

    <!-- Filters -->
    <div class="well text-center filter-form">
        <form class="form form-inline" action="">
            <label for="input_search">Zoek</label>
            <input type="text" class="form-control" id="input_search" name="search_str" value="<?php echo htmlspecialchars($search_str, ENT_QUOTES, 'UTF-8'); ?>">
            <label for="input_order">In volgorde</label>
            <select name="order_by" class="form-control">
                <?php
                foreach ($bike->setOrderingValues() as $opt_value => $opt_name) : ($order_by === $opt_value) ? $selected = 'selected' : $selected = '';
                    echo ' <option value="' . $opt_value . '" ' . $selected . '>' . $opt_name . '</option>';
                endforeach;
                ?>
            </select>
            <select name="order_dir" class="form-control" id="input_order">
                <option value="Asc" <?php
                                    if ($order_dir == 'Asc') {
                                        echo 'selected';
                                    }
                                    ?>>Asc</option>
                <option value="Desc" <?php
                                        if ($order_dir == 'Desc') {
                                            echo 'selected';
                                        }
                                        ?>>Desc</option>
            </select>
            <input type="submit" value="Zoek" class="btn btn-primary">
        </form>
    </div>
    <hr>

    <table class="table table-striped table-bordered table-condensed">
        <thead>
            <tr>
                <th width="5%">Fietsnummer</th>
                <th width="5%">Merk</th>
                <th width="5%">Model</th>
                <th width="5%">Grootte</th>
                <th width="5%">Type</th>
                <th width="5%">Conditie</th>
                <th width="5%">Prijs €</th>
                <th width="1%">Acties</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $row) : ?>
                <tr>
                    <td><?php echo $row['fietsnummer']; ?></td>
                    <td><?php echo $row['merk']; ?></td>
                    <td><?php echo $row['model']; ?></td>
                    <td><?php echo $row['grootte']; ?></td>
                    <td><?php echo $row['type']; ?></td>
                    <td><?php echo $row['conditie']; ?></td>
                    <td><?php echo "€ " . $row['prijs']; ?></td>
                    <td>
                        <a href="edit_bike.php?bike_id=<?php echo $row['fietsnummer']; ?>&operation=edit" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="delete_bikes.php?bike_fietsnummer=<?php echo $row['fietsnummer']; ?>&operation=delete" class="btn btn-danger delete_btn" data-toggle="modal" data-target="#confirm-delete-<?php echo $row['fietsnummer']; ?>"><i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                </tr>

                <div class="modal fade" id="confirm-delete-<?php echo $row['id']; ?>" role="dialog">
                    <div class="modal-dialog">
                        <form action="delete_bikes.php" method="POST">

                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Bevestigen</h4>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" name="del_id" id="del_id" value="<?php echo $row['id']; ?>">
                                    <p>Weet je zeker dat je deze rij wilt verwijderen?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-default pull-left">Ja</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Nee</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="text-center">
        <?php echo paginationLinks($page, $total_pages, 'bike.php'); ?>
    </div>
</div>
<?php include BASE_PATH . '/includes/footer.php'; ?>