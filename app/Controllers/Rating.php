<?php 

namespace App\Controllers;

class Rating extends BaseController
{
  public function index ()
  {
    $data = [
      'page'=>'top-rated',
      'title'=>'Top Movies | FanDev',
    ];
    return view('pages/top-rated',$data);
  }
}