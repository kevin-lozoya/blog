<?php
$result = false;

if (!empty($_POST)) {
  $sql = 'INSERT INTO post (title, content)
              VALUES (:title, :content)';
  $query = $pdo->prepare($sql);
  $query->execute([
    'title' => $_POST['title'],
    'content' => $_POST['content']
  ]);
  $result = true;
}
?>

<!DOCTYPE html>
<html lang='es'>
<head>
  <meta charset="utf-8"/>
  <title>Blog</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
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
          <a class="btn btn-secondary" href="posts.php">Back</a>
        </p>
        <?php
          if ($result) {
            echo '<div class="alert alert-success">Post Saved</div>';
          }
        ?>
        <form action="insert-post.php" method="post">
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
            <a href="admin/index.php">Admin Panel</a>
          </footer>
      </div>
    </div>

  </div>
  
  <script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>