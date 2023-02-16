<?php

require_once('includes/database.php');
$page_title = "Add Video";
require_once ('includes/header.php');

?>
  <div class="container wrapper">
  <ul class="breadcrumb">
    <li><a href="home.php">Home</a></li>
    <li class="active">Add Video</li>
  </ul>

  <h1 class="text-center">ADD Video</h1>
  <p class="lead text-center">Please add your video </p>
  <div class="col-xs-8 col-xs-offset-2">
    <form class="form-horizontal" role="form" action="videoprocess.php" method="get" enctype="text/plain">
      <div class="form-group">
        <label for="newVideoName" class="col-sm-3 control-label">Title</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="newVideoName" name="clip_name" placeholder="Video Title" required>
        </div>
      </div>
      
      <div class="form-group">
        <label for="newVideo" class="col-sm-3 control-label">Video Path</label>
        <div class="col-sm-9">
          <input type="text" id="newVideo" class="form-control" name="clip_path" placeholder="Enter path" required>
        </div>
      </div>
      
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-success">Add Video</button>
        </div>
      </div>
    </form>
  </div>
</div>

<?php
  include('includes/footer.php');
?>