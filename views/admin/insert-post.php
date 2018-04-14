<!DOCTYPE html>
<html lang='es'>
<head>
  <meta charset="utf-8"/>
  <title>Blog</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Blog Title</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <h2>New Post</h2>
        <p>
          <a class="btn btn-secondary" href="<?php echo BASE_URL; ?>admin/posts">Back</a>
        </p>
        <?php
          if (isset($result) && $result) {
            echo '<div class="alert alert-success">Post Saved</div>';
          }
        ?>
        <form method="post">
          <div class="form-group">
            <label for="inputTitle">Title</label>
            <input class="form-control" type="text" id="inputTitle" name="title">
          </div>
          <textarea class="form-control" id="inputContent" name="content" rows="5"></textarea>
          <br>
          <input class="btn btn-primary" type="submit" value="Save">
        </form>
      </div>
      <div class="col-md-4">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum animi porro laudantium! Architecto adipisci laboriosam, maiores eveniet quidem praesentium inventore temporibus aliquid reprehenderit esse unde minima voluptates, ullam, ratione optio.
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
          <footer>
            This is a footer.<br>
            <a href="<?php echo BASE_URL; ?>admin">Admin Panel</a>
          </footer>
      </div>
    </div>

  </div>
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>