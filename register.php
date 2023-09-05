<?php 
session_start();
include_once "inc/header.php"; ?>
<div class="container">
    <form action="model/inscription.php" method="post">
        <div class="form-group mt-5 mb-5 d-flex">
            <label class="me-xl-5 link-light">Gender :</label>
            <div class="form-check">
                <input class="form-check-input border-success-subtle border-3 mt-3 translate-middle-y " type="radio" name="gender"  value="M">
                <label class="form-check-label link-light lh-lg">Male</label>
            </div>
            <div class="form-check">
                <input class="form-check-input border-success-subtle border-3 mt-3 translate-middle-y  m-0 float-md-none" type="radio" name="gender"  value="F">
                <label class="form-check-label link-light lh-lg">Female</label>
            </div>
            <div class="form-check">
                <input class="form-check-input border-success-subtle border-3 mt-3 translate-middle-y m-0 float-md-none" type="radio" name="gender" value="O">
                <label class="form-check-label link-light lh-lg" >Other</label>
            </div>
        </div>
 
        <div class="form-group link-light">
            <label for="firstname">Firstname :</label>
            <input type="text" class="form-control border-success-subtle border-3 mt-3" id="firstname" name="firstname" >
        </div>
 
        <div class="form-group link-light mt-3">
            <label for="lastname link-light">Lastname :</label>
            <input type="text" class="form-control border-success-subtle border-3 mt-3" id="lastname" name="lastname" >
        </div>
 
        <div class="form-group link-light mt-3">
            <label for="email link-light">Email :</label>
            <input type="email" class="form-control border-success-subtle border-3 mt-3" id="email" name="email" >
        </div>
 
        <div class="form-group link-light mt-3">
            <label for="password link-light">Password :</label>
            <input type="password" class="form-control border-success-subtle border-3 mt-3" id="password" name="password" >
        </div>

        <div class="form-group link-light mt-3">
            <label>Address :</label>
            <input type="text" class="form-control border-success-subtle border-3 mt-3" name="address" >
        </div>
        
        <div class="form-group link-light mt-3">
            <label>Phone number :</label>
            <input type="text" class="form-control border-success-subtle border-3 mt-3" name="phone" >
        </div>

        <div class="form-group link-light mt-3">
            <label>Birthday:</label>
            <input type="date" class="form-control border-success-subtle border-3 mt-3" name="birthday" >
        </div>
    
    
        <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5 border-success-subtle border-3 mt-2 bg-secondary" name="submit" value="submit">Submit</button>
    </form>
</div>
<?php include_once "inc/footer.php"; ?>