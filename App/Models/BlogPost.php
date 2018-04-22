<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {
  protected $table = 'post';
  // Para hacer los inserts en solo esos datos
  protected $fillable = ['title', 'content'];
}
?>