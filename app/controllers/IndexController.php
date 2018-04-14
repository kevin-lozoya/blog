<?php
namespace App\Controllers;

class IndexController extends BaseController {
  
  public function getIndex() {
    $blogPosts = \App\Models\BlogPost::query()->orderBy('id', 'desc')->get();
    
    return $this->render('index.twig', ['blogPosts' => $blogPosts]);
  }

}

?>