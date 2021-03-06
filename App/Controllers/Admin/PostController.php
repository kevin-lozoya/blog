<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Post;
use Sirius\Validation\Validator;

class PostController extends BaseController {
  
  public function getIndex() {
    // admin/posts or admin/posts/index

    $blogPosts = Post::all();

    return $this->render('admin/posts.twig', ['blogPosts' => $blogPosts]);
  }

  public function getCreate() {
    // admin/posts/create
    return $this->render('admin/insert-post.twig');
  }

  public function postCreate() {
    $errors = [];
    $result = false;
    $validator = new Validator();
    $validator->add('title', 'required');
    $validator->add('content', 'required');

    if ($validator->validate($_POST)) {
      $blogPost = new Post([
        'title' => $_POST['title'],
        'content' => $_POST['content']
      ]);

      if ($_POST['img']) {
        $blogPost->img_url = $_POST['img'];
      }
      $blogPost->save();
      $result = true;
    }
    else {
      $errors = $validator->getMessages();
    }

    

    return $this->render('admin/insert-post.twig', [
      'result' => $result,
      'errors' => $errors
    ]);
  }

}
?>