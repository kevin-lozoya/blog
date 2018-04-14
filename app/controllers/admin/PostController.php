<?php
namespace App\Controllers\Admin;

class PostController extends \App\Controllers\BaseController {
  
  public function getIndex() {
    // admin/posts or admin/posts/index
    global $pdo;

    $query = $pdo->prepare('SELECT * FROM post ORDER BY id DESC');
    $query->execute();

    $blogPosts = $query->fetchAll(\PDO::FETCH_ASSOC);
    return $this->render('admin/posts.twig', ['blogPosts' => $blogPosts]);
  }

  public function getCreate() {
    // admin/posts/create
    return $this->render('admin/insert-post.twig');
  }

  public function postCreate() {
    global $pdo;
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

    return $this->render('admin/insert-post.twig', ['result' => $result]);
  }

}
?>