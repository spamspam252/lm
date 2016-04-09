<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class Helper extends Controller{

  public function activeIfEqual($viewname,$viewpath){
    if($viewname == $viewpath) return 'active';
    return '';
  }


}

 ?>
