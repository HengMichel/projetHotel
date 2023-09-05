<?php 
session_start();
include_once "inc/header.php"; 
require_once "model/functions.php";
$listRoom = roomList();
?>

<div class="container d-flex flex-wrap justify-content-around">
    <?php foreach($listRoom as $room){ ?>
        <div class="card border-success-subtle" style="width: 28rem;">
            <div class="img_room">
                <img src="assets/imgs/<?= $room["room_imgs"] ?> " class="card-img-top" alt="image">
            </div>
            <div class="card-body">
                <p class="card-text fa-2x"><?= $room["price"]; ?>€/nuit</p>
                <p class="card-text fa-bitcoin-sign fa-bitcoin-sign link-warning"><?= $room["category"]; ?></p>
                <p class="card-text"><?= $room["persons"]; ?> Persons</p>
                <a class="btn btn-info bg-secondary border-success-subtle border-2 link-light" href="./booking.php?room=<?= $room["id_room"]; ?>&price=<?= $room['price'] ?>">Book this Room</a>
            </div>
        </div>
    <?php } ?>
</div>
<?php include_once "inc/footer.php"; ?>