<?php

class App
{

  // Static variable
  public static $endpoint = "http://webacademy.se/fakestore/";

  //The Main Method
  public static function main()
  {
    try {
      $array =  self::getData();
      self::viewData($array);
    } catch (Exception $error) {
      echo $error->getMessage();
    }
  }

  // Class method that get data
  public static function getData()
  {
    $json =  @file_get_contents(self::$endpoint);  
    if (!$json)
      throw new Exception("Could not access" . self::$endpoint);

    return json_decode($json, true);
  }

  // Class method that view data
  public static function viewData($array){

    $category = $_GET['category'] ?? null;

    $div = "<div class='row'>";
    $div .= "<h1>$category</h1>";

    foreach ($array as $product) {

     if($category == $product["category"] ) {
      $div .= "
       <div class='col-lg-4 col-md-6 mb-4'>
       <div class='card h-100'>
       <div class='card-body'>
       <img class='card-img-top' src= $product[image]   alt=''>
       <h4 class='card-title pt-3'> $product[title] </h4>
       <h5>$$product[price]</h5>
       <p class='card-text'>$product[description]</p>
       </div>
       <div class='card-footer'>
       <small class='text-muted'>&#9733; &#9733; &#9733; &#9733; &#9734;</small>
       </div>
       </div>
      </div>
       ";
     }
    }
    $div .= "</div>";
    echo $div;
   
  }
}

