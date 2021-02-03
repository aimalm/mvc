
<?php require 'includes/header.php'?>


<form action="" method="post" >
<input type="text" name="firstName" value="<?php echo $_SESSION["firstName"]; ?>" >
<input type="text" name="lastName"  value="<?php echo $_SESSION["lastName"]; ?>">
<input type="text" name="password" value="<?php echo $_SESSION["password"]; ?>">
<input type="text" name="profilepicture"value="<?php echo $_SESSION["profilepicture"]; ?>" >
<p> <?php echo $_SESSION['showerror'];?> </p>



<button type="submit" name="update">Edit</button>


</form> 

<?php require 'includes/footer.php'?>
