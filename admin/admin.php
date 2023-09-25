<?php 
session_start();
// si $_SESSION["role"] est définie mais que sa valeur est différente de "admin" ou bien $_SESSION["role"] n'est pas définie
if(!isset($_SESSION["role"]) || $_SESSION["role"] != "admin"){
  header("Location: http://localhost/login.php");
}
include_once "../inc/header.php"; 
?>

<div class="container d-flex justify-content-around border border-success-subtle" >
    <div class="card mt-5 m-3 w-25 border-success-subtle" style="width: 18rem;">
      <i class="fa-solid fa-plus text-center mt-3 fs-4 link-secondary mb-2"></i>  
      <div class="card-body bg-secondary link-light" >
        <h5 class="card-title mt-2 ">Ajout hôtel</h5>
        <p class="card-text">Cliquez ici pour ajouter un hôtel</p>
        <a href="add_hotel.php" class="btn btn-primary  bg-secondary  border-success-subtle">Ajouter un hôtel</a>
      </div>
    </div>
    <div class="card mt-5 m-3 w-25 border-success-subtle" style="width: 18rem;">
      <i class="fa-solid fa-plus text-center mt-3 fs-4 link-secondary mb-2"></i>  
      <div class="card-body bg-secondary link-light">
        <h5 class="card-title mt-2">Ajout chambre</h5>
        <p class="card-text">Cliquez ici pour ajouter une chambre</p>
        <a href="add_room.php" class="btn btn-primary bg-secondary  border-success-subtle">Ajouter une chambre</a>
      </div>
    </div>
    <div class="card mt-5 m-3 w-25 border-success-subtle" style="width: 18rem;">
      <i class="fa-solid fa-list text-center mt-3 fs-4 link-secondary mb-2"></i>
      <div class="card-body bg-secondary link-light">
        <h5 class="card-title mt-2">Liste réservation</h5>
        <p class="card-text">Cliquez ici pour voir la liste des réservations</p>
        <a href="#" class="btn btn-primary bg-secondary  border-success-subtle">Liste réservation</a>
      </div>
    </div>
    <div class="card mt-5 m-3 w-25 border-success-subtle" style="width: 18rem;">
      <i class="fa-solid fa-list text-center mt-3 fs-4 link-secondary mb-2"></i>
      <div class="card-body bg-secondary link-light">
        <h5 class="card-title mt-2">Liste Hôtel</h5>
        <p class="card-text">Cliquez ici pour voir la liste des hôtel</p>
        <a href="hotel_list.php" class="btn btn-primary bg-secondary  border-success-subtle">Liste hôtel</a>
      </div>
    </div>
    <div class="card mt-5 m-3 w-25 border-success-subtle" style="width: 18rem;">
      <i class="fa-solid fa-list text-center mt-3 fs-4 link-secondary mb-2"></i>
      <div class="card-body bg-secondary link-light">
        <h5 class="card-title mt-2">Liste chambre</h5>
        <p class="card-text">Cliquez ici pour voir la liste des chambres</p>
        <a href="room_list.php" class="btn btn-primary bg-secondary  border-success-subtle">Liste chambre</a>
      </div>
    </div>
</div>

<?php include_once "../inc/footer.php"; ?>