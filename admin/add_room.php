<?php 
include_once "../inc/header.php"; 
include_once "../model/functions.php";
$listHotel = hotelList(); 
?>

<div class="container ">
    <form action="../model/db_room.php" method="post" enctype="multipart/form-data">

        <div class="form-group list-group form-select-lg link-light">
            <label>Hôtel :</label>
            <select name="hotel" class=" form-control link-dark mt-3 border-success-subtle border-3">
                <option value="">Choose hôtel</option>
                <?php foreach($listHotel as $hotel){ ?>
                    <option value="<?= $hotel["id_hotel"]; ?>"><?= 
                    $hotel["hotel_name"]; ?></option>
                    <?php } ?>
            </select>
        </div>
       
        <div class="form-group link-light mt-3">
            <label>Room Number :</label>
            <input type="text" class="form-control mt-3 border-success-subtle border-3"  name="room_number" >
        </div>
 
        <div class="form-group link-light mt-3">
            <label>Room Price :</label>
            <input type="text" class="form-control mt-3 border-success-subtle border-3" name="room_price" >
        </div>
 
        <div class="form-group link-light mt-3">
            <label>Persons :</label>
            <input type="number" class="form-control mt-3 border-success-subtle border-3" name="person" >
        </div>
 
        <div class="form-group form-group list-group link-light mt-3 ">
            <label>Category :</label>
            <select name="category" class="form-control mt-3 border-success-subtle border-3">
                <option value="">Choose category</option>
                <option value="classic">Classic</option>
                <option value="vip">Vip</option>
            </select>
        </div>

        <div class="form-group link-light mt-3">
            <label>Photo :</label>
            <input type="file" class="form-control mt-3 border-success-subtle border-3" name="image" >
        </div>
        
        <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5 bg-secondary border-success-subtle border-2" name="add_room" value="submit">Submit</button>
    </form>
</div>

<?php  
include_once "../inc/footer.php";
?>