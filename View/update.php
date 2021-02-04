
<?php require 'includes/header.php'?>


<form action="" method="post" >
<input type="text" name="firstName" value="<?php echo $_SESSION["firstName"]; ?>" >
<input type="text" name="lastName"  value="<?php echo $_SESSION["lastName"]; ?>">
<input type="text" name="password" value="<?php echo $_SESSION["password"]; ?>">
<p> <?php echo $_SESSION['showerror'];?> </p>

<div class="image-field">
    <input type="file" name="profilepicture"value="<?php echo $_SESSION["profilepicture"]; ?>" >

    <!-- <input type="submit" name="imagebutton" value="Upload image"> -->
    <!-- imagebutton needs to be hidden while styling -->

</div>

<button type="submit" name="update">Edit</button>


</form> 

<?php require 'includes/footer.php'?>
