
<?php require 'includes/header.php'?>


<form action="" method="post" >
<input type="text" name="firstName" value="<?php if (isset($_POST["update"])) {echo $_SESSION["firstName"];} ?>" >
<input type="text" name="lastName"  >
<input type="text" name="password" >
<input type="text" name="profilepicture" >


<button type="submit" name="update">Edit</button>


</form> 

<?php require 'includes/footer.php'?>
