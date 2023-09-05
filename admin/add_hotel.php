<?php 
include_once "../inc/header.php"; 
require_once "../model/functions.php";
?>

<div class="container">
    <form action="../model/db_hotel.php" method="post">
        <div class="form-group link-light">
            <label >Name :</label>
            <input type="text" class="form-control mt-3 border-success-subtle border-3" name="name_hotel" >
        </div>

        <div class="form-group link-light mt-3">
            <label >Location :</label>
            <input type="text" class="form-control mt-3 border-success-subtle border-3" name="location_hotel" >
        </div>
 
        <div class="form-group link-light mt-3">
            <label >Capacity :</label>
            <input type="number" class="form-control mt-3 border-success-subtle border-3" name="capacity_hotel" >
        </div>

        <button class="btn btn-primary mt-5 mb-5 border-success-subtle bg-secondary border-2" name="add_hotel" value="submit">Add Hotel</button>
    </form>
</div>

<?php include_once "../inc/footer.php"; ?>