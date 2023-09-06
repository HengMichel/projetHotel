<?php 
session_start();
require_once "model/functions.php";
include_once "inc/header.php"; 
$userBookList = userBookList($_SESSION["id_user"]);
$price = 0;

?>

<div class="container bg-secondary">
    <table class="table  bg-secondary">
        <thead >
            <tr>
                <th class="id_hotel bg-secondary link-light">Id Reservation</th>
                <th class="start_date bg-secondary link-light">Start Date</th>
                <th class="end_date bg-secondary link-light">End Date</th>
                <th class="state bg-secondary link-light">State</th>
                <th class="price bg-secondary link-light">Price</th>
                <th class="action bg-secondary link-light m-3">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($userBookList as $book){ 
                $price+=$book['booking_price'];?>
                <tr>
                    <td class="idbook border-success-subtle border-3 mt-2"><?= $book["id_booking"]; ?></td>
                    <td class="booking_start_date border-success-subtle border-3 mt-2"><?= $book["booking_start_date"]; ?></td>
                    <td class="booking_end_date border-success-subtle border-3 mt-2"><?= $book["booking_end_date"]; ?></td>
                    <td class="booking_state border-success-subtle border-3 mt-2"><?= $book["booking_state"]; ?></td>
                    <td class="booking_price border-success-subtle border-3 mt-2"><?= $book["booking_price"]; ?></td>
                    <td class="btn btn-success-subtle m-3 border-success-subtle border-3 mt-2"><a href="model/db_booking.php?id_book=<?=$book['id_booking']; ?>">Cancel</a></td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr class="table-active">
                <td class="total_reservation border-success-subtle border-3 mt-2 border-top alert-link" colspan="4">Total de vos réservations:</td>
                <td class="price border-success-subtle border-3 mt-2 border-top alert-link"><?= $price; ?></td>
            </tr>
        </tfoot>
    </table>
</div>    

<?php include_once "inc/footer.php"; ?>