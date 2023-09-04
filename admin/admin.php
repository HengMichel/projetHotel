<?php 
include_once "../inc/header.php"; 
?>

<div class="container d-flex justify-content-around" >
    <div class="card mt-5" style="width: 18rem;">
    <i class="fa-solid fa-plus text-center mt-3 fs-4"></i>  
    <div class="card-body " >
        <h5 class="card-title mt-2 ">Ajout hôtel</h5>
        <p class="card-text">Cliquez ici pour ajouter un hôtel</p>
        <a href="add_hotel.php" class="btn btn-primary mt-4 bg-secondary border-0 border-success-subtle">Ajouter un hôtel</a>
      </div>
    </div>
    <div class="card mt-5" style="width: 18rem;">
    <i class="fa-solid fa-plus text-center mt-3 fs-4"></i>  
    <div class="card-body">
        <h5 class="card-title mt-2">Ajout chambre</h5>
        <p class="card-text">Cliquez ici pour ajouter une chambre</p>
        <a href="add_room.php" class="btn btn-primary bg-secondary border-0 border-success-subtle">Ajouter une chambre</a>
      </div>
    </div>
    <div class="card mt-5" style="width: 18rem;">
    <i class="fa-solid fa-list text-center mt-3 fs-4"></i>
      <div class="card-body">
        <h5 class="card-title mt-2">Liste réservation</h5>
        <p class="card-text">Cliquez ici pour voir la liste des réservations</p>
        <a href="#" class="btn btn-primary bg-secondary border-0 border-success-subtle">Liste réservation</a>
      </div>
    </div>
</div>

<?php include_once "../inc/footer.php"; ?>