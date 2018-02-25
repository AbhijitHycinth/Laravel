<?php

namespace App\Http\Controllers;
use App\Http\Controllers\PostController;
class PagesController extends Controller{
  public function getIndex(){
    $postController=new PostController();
    $data=$postController->index();
    return view('pages/welcome')->withData($data);
  }

  public function getContact(){
    $firstName = 'Abhijit';
    $lastName= "Hycinth";
    $full= $firstName . " " .$lastName;
    $email="abhijeethycinth@gmail.com";
    $phoneNumber="7767985877";

    $data=array("fullName" => $full,
                 "email" => $email,
                 "phoneNumber" =>$phoneNumber
                );
    return view('pages/contact')->withData($data);
  }

  public function getAboutUs(){
    return view('pages/aboutus');
  }

}
