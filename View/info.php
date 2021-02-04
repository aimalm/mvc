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
                What is Lorem Ipsum?
                </div>
            </div>
        </div>


    </section>
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
    #searchField {
        border-radius: 5px;
        border: 3px solid transparent;
        margin-left: 5px;
    }

    #searchField:focus { 
    outline: none;
    border-color: #CCE5FF;
    box-shadow: 0 0 10px #CCE5FF;
    }
</style>

<?php require 'includes/footer.php'?>