<?php require 'includes/header.php'?>

<!-- <?php
    function whatIsHappening() {
        echo '<pre>';
        echo '<h2>$_FILES</h2>';
        var_dump($_FILES);
        echo '<h2>$_POST</h2>';
        var_dump($_POST);
        echo '</pre>';
        echo '<br>';
    }
    whatIsHappening();
?> -->

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  New Challenge
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Challenge</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="challengeStartDate">Start Date</label>
                        <input type="text" class="form-control" id="challengeStartDate" placeholder="YYYY-MM-DD" name="challengeStartDate">
                    </div>
                    <div class="form-group">
                        <label for="challengeEndDate">End Date</label>
                        <input type="text" class="form-control" id="challengeEndDate" placeholder="YYYY-MM-DD" name="challengeEndDate">
                    </div>
                    <div class="form-group">
                        <label for="challengeTitle">Title</label>
                        <input type="text" class="form-control" id="challengeTitle" placeholder="Title" name="challengeTitle">
                    </div>
                    <div class="form-group">
                        <label for="challengeDescription">Description</label>
                        <input type="text" class="form-control" id="challengeDescription" placeholder="Description" name="challengeDescription">
                    </div>
                    <div class="form-group">
                        <label for="mediaFile">Choose a file</label><br>
                        <input type="file" id="mediaFile" name="mediaFile">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="createChallengeBtn">Create Challenge</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php require 'includes/footer.php'?>