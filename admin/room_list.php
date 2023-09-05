<?php 
include_once "../inc/header.php";
require_once "../model/functions.php" ;
$listRoom = roomlist();
?>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th class="id_room bg-secondary link-light" >Id Room</th>
                <th class="room_number bg-secondary link-light">Room Number</th>
                <th class="price bg-secondary link-light">Price</th>
                <th class="persons bg-secondary link-light">Persons</th>
                <th class="category bg-secondary link-light">Category</th>
                <th class="room_state bg-secondary link-light">Room State</th>
                <th class="hotel_id bg-secondary link-light">Hôtel Id</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($listRoom as $room){ ?>
                <tr>
                    <td class="idRoom border-success-subtle border-3 mt-2"><?= $room["id_room"]; ?></td>
                    <td class="roomNumber border-success-subtle border-3 mt-2"><?= $room["room_number"]; ?></td>
                    <td class="pricee border-success-subtle border-3 mt-2"><?= $room["price"]; ?></td>
                    <td class="personss border-success-subtle border-3 mt-2"><?= $room["persons"]; ?></td>
                    <td class="categoryy border-success-subtle border-3 mt-2 fa-bitcoin-sign fa-bitcoin-sign link-warning"><?= $room["category"]; ?></td>
                    <td class="roomState border-success-subtle border-3 mt-2"><?= $room["room_state"]; ?></td>
                    <td class="hotelId border-success-subtle border-3 mt-2"><?= $room["hotel_id"]; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>    

<?php include_once "../inc/footer.php"; ?>
