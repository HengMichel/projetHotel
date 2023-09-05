<?php 
include_once "../inc/header.php  "; 
require_once "../model/functions.php" ;
$listHotel = hotelList(); 
// print_r($listHotel);
?>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th class="id_hotel bg-secondary link-light">Id Hôtel</th>
                <th class="hotel_name bg-secondary link-light">Hôtel Name</th>
                <th class="location bg-secondary link-light">Location</th>
                <th class="capacity bg-secondary link-light">Capacity</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($listHotel as $hotel){ ?>
                <tr>
                    <td class="idHotel border-success-subtle border-3 mt-2"><?= $hotel["id_hotel"]; ?></td>
               
                    <td class="hotelName border-success-subtle border-3 mt-2"><?= $hotel["hotel_name"]; ?></td>
               
                    <td class="locationn border-success-subtle border-3 mt-2"><?= $hotel["location"]; ?></td>
               
                    <td class="capacityyy border-success-subtle border-3 mt-2"><?= $hotel["capacity"]; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>    

<?php 
include_once "../inc/footer.php"; 
?>
