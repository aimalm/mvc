
<?php 

        //  echo "<pre>";
        //          var_dump($challenges[0]['id']);
        // echo "</pre>";
 ?>

 <?php  
        foreach($challenges as $x => $value){?>
          
           
     

<div class="challengeCard_container"">
    <div class="cardHeader">
        <div class="challengerInfo">
            <div class="imgContainer">
                <img src="" alt="">
                <p class="fullname"><?php echo $value['firstName']; ?></p>
            </div>
        </div>
        
        <div class="opponentInfo">
            <div class="imgContainer">
                <img src="" alt="">
                <p class="fullname">Selin</p>
            </div>
        </div>

    </div>
    <div class="cardContent">
        <div class="card" style="width: 18rem; padding: 10px;">
            <div class="imageContainer_challengeCard">
                <img class="card-img-top" src="assets/profile/1.png" alt="Card image cap">
            </div>
            <div class="card-body">
                <a href="#" class="card-link">like <span> 15 </span></a>
                <a href="#" class="card-link">Dislike <span> 5 </span></a>
            </div>
        </div>

        <div class="icons_challengeCard">
            <img src="assets/icons/icon_right.png" alt="">
            <img src="assets/icons/icon_left.png" alt="">
        </div>

        <div class="card" style="width: 18rem; padding: 10px;">
            <div class="imageContainer_challengeCard">
                <img class="card-img-top" src="assets/profile/1.png" alt="Card image cap">
            </div>
        
            <div class="card-body">
                <a href="#" class="card-link">like <span> 15 </span></a>
                <a href="#" class="card-link">Dislike <span> 5 </span></a>
            </div>
        </div>
    </div>
</div>
<?php
}
?>

<style>
    .challengeCard_container{
        background-color:whitesmoke;
        padding: 10px;
        display: flex;
        flex-direction: column;
        border:steelblue 1x solid;
        margin: 5px;
    }
    .cardHeader{
        display: flex;
        justify-content: space-between;
        padding: 10px;
    }
    .opponentInfo{
        display: flex;
    }
    .challengerInfo{
        display: flex;
        justify-content: flex-end;
    }
    .cardContent{
        display: flex;
        justify-content: space-between;
        padding: 10px;
        
    }
    .icons_challengeCard{
        padding: 8px;
        max-width: 150px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    .icons_challengeCard img{
      height: auto;
      width: 70px;
    }
</style>