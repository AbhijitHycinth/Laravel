<?php

namespace App\Http\Controllers;

class PagesController extends Controller{
  public function getIndex(){
    return view('pages/welcome');
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
