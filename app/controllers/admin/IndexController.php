<?php
namespace App\Controllers\Admin;

class IndexController extends \App\Controllers\BaseController {

  public function getIndex() {
    return $this->render('admin/index.twig');
  }

}
?>