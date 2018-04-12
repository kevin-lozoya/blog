<?php
include_once 'config.php';

$query = $pdo->prepare('SELECT * FROM post ORDER BY id DESC');
$query->execute();

$blogPosts = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang='es'>
<head>
  <meta charset="utf-8"/>
  <title>Blog</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
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
        <?php
          foreach ($blogPosts as $post) {
            echo '<div class="blog-post">';
            echo "<h2>{$post['title']}</h2>";
            echo '<p>Jan 1, 2020 by <a href="#">Alex</a></p>
                    <div class="blog-post-image">
                      <img src="images/image1.jpg" alt="">
                    </div>
                    <div class="blog-post-content">';
            echo $post['content'];
            echo '</div>
                  </div>';
          }    
        ?>
      </div>
      <div class="col-md-4">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum animi porro laudantium! Architecto adipisci laboriosam, maiores eveniet quidem praesentium inventore temporibus aliquid reprehenderit esse unde minima voluptates, ullam, ratione optio.
      </div>
    </div>
    <div class="row">
      <footer>
        This is a footer.
      </footer>
    </div>

  </div>
  
  <script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>