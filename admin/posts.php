<?php
$query = $pdo->prepare('SELECT * FROM post ORDER BY id DESC');
$query->execute();

$blogPosts = $query->fetchAll(PDO::FETCH_ASSOC);
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
        <h2>Posts</h2>
        <a class="btn btn-primary" href="insert-post.php">New Post</a>
        <table class="table">
            <tr>  
              <th>Title</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          <?php
            foreach ($blogPosts as $post) {
            echo "<tr>
              <td>{$post['title']}</td>
              <td>Edit</td>
              <td>Delete</td>
            </tr>";
            }
          ?>
        </table>
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