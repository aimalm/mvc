
<?php require 'includes/header.php'?>

<form action="" method="post" >

<div class="container">

    <p class="alert alert-danger" role="alert"> <?php echo $_SESSION['showerror'];?> </p>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">First name</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="firstName" placeholder="Enter your firstname... "value="<?php echo $_SESSION["firstName"];  ?>" >
    </div>
 </div>

 <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Last name</label>
    <div class="col-sm-10">
       <input type="text" class="form-control" name="lastName" placeholder="Enter your lastname..." value="<?php echo $_SESSION["lastName"]; ?>">
    </div>
 </div>

 <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
        <input type="password" class="form-control" name="password" placeholder="Enter your new password..." value="<?php echo $_SESSION["password"]; ?>">
    </div>
 </div>

 <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Profile Image</label>
    <div class="col-sm-10">
        
        <input type="file" class="btn btn-primary" name="profilepicture" placeholder="Upload your profile image..." value="<?php echo $_SESSION["profilepicture"]; ?>" >
        <!-- <input type="file" name="imagebutton" class="btn btn-primary"> -->

    </div>
 </div>



 <div class="text-center">
    <div class="btn pull-right" >
        <button type="submit" id="editbtn"class=" btn btn-primary" name="update">SAVE CHANGES </button>
    </div>
</div>





</div>


</form> 

<?php require 'includes/footer.php'?>

<style>


#editbtn{
    height:40px;
}

</style>
