<?php
namespace App\Controllers\Admin;

class PostController extends \App\Controllers\BaseController {
  
  public function getIndex() {
    // admin/posts or admin/posts/index

    $blogPosts = \App\Models\BlogPost::all();

    return $this->render('admin/posts.twig', ['blogPosts' => $blogPosts]);
  }

  public function getCreate() {
    // admin/posts/create
    return $this->render('admin/insert-post.twig');
  }

  public function postCreate() {
    $blogPost = new \App\Models\BlogPost([
      'title' => $_POST['title'],
      'content' => $_POST['content']
    ]);
    $blogPost->save();
    $result = true;

    return $this->render('admin/insert-post.twig', ['result' => $result]);
  }

}
?>