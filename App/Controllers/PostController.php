<?php
namespace App\Controllers;

use App\Models\Post;
use App\Controllers\BaseController;

class PostController extends BaseController {
  
  public function getIndex($id, $title) {
    $post = Post::where('id', $id)->first();

    if ($post) {
      return $this->render('post.twig', ['post' => $post]);
    }

    header('Location: '.BASE_URL);
  }

}

?>