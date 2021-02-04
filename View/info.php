<?php require 'View/includes/header.php'?>
<?php include 'View/includes/subMenu.php' ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-3 sideBar">
                <ul>
                    <li>
                        <div class="sideIcon">
                            <a href=""><img src="assets/icons/Icon_right.png" alt=""></a>
                        </div>
                    </li>
                    <li>
                        <div class="sideIcon"><a href=""><img src="assets/icons/Icon_left.png" alt=""> </a></div>
                    </li>
                    <li>
                        <div class="sideIcon"><a href=""><img src="assets/icons/pending.png" alt=""></a></div>
                    </li>
                    <li>
                        <div class="sideIcon"><a href=""><img src="assets/icons/Favorite.png" alt=""></a></div>
                    </li>
                </ul>
                </div>
                <div class="col contentSection">
                One of three columns
                </div>
                
            </div>
        </div>


    </section>
<?php require 'includes/footer.php'?>
<style>
    .sideIcon img{
        height: auto;
        width: 40px;
    }
    .contentSection{
        background-color: gray;
    }
    .sideBar ul{
        position: fixed;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
</style>