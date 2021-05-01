<!DOCTYPE html>
<html lang="en">

<!-----------This section with the references------------->

<head>
  <title>BigDeal - Basics In-Ear Wired Headphces, Earbuds</title>
  <title></title>
  <link rel="Stylesheet" href="css/landingpage.css">
  <link rel="stylesheet" href="css/resultpage.css">
  <link rel="Stylesheet" type="text/css" href="css/detailpage.css">
  <link rel="Stylesheet" type="text/css" href="css/iconfont.css">

  <script src="js/productdetail.js"></script>

</head>

<body>
  <!-- start of header -->
  <div class="header" method="get">
    <a href="index.php"> <img src="images/ImagesOfResultPage/logo.png" alt="" class="logo1"></a>
    <div class="topSearch">
      <form action="resultpage.php">
        <input type="text" class="inputBox" placeholder="Search for Our Products" id="searchproducts" name="search">
        <!-- <button class="searchButton" onclick="visitPage();">Search</button> -->
        <!-- <input class="searchButton" value="Search" onclick="visitPage()"> -->
        <input type="submit" class="searchButton">
      </form>
    </div>
    <div class=" download">
      <h4>Download our App: </h4>
      <a href="#"> <img src="images/ImagesOfResultPage/AppDown.png" alt="" class="app1">
      </a>
      <a href="#"> <img src="images/ImagesOfResultPage/PlayDown.png" alt="" class="app2">
      </a>
    </div>
  </div>
  <!-- end of header -->
  <!-- start of top bar -->
  <div class="top">
    <div class="topLeft">
      <a href="resultpage.php">Electronics</a>
      <a href="#">Computers</a>
      <a href="#">Fashion</a>
      <a href="#">Kitchen</a>
      <a href="#">Health</a>
      <a href="#">SkinCare</a>

    </div>
    <div class="topRight">
      <a href="#">Login</a>
      <a href="#">Sign up</a>
      <a href="#">Messages</a>
      <a href="#">View Cart</a>
    </div>
  </div>
  <!-- end of top bar -->




  <!-- start of product detail -->
  <?php

  $mysqli = new mysqli('localhost', 'root', '', 'bigdeal') or die($mysqli->connect_error);
  $table = 'products';

  $id = $_GET['id'];


  // in here we select all the data from the table one by one (by id). 
  $result = $mysqli->query("SELECT * FROM $table WHERE id = '$id'") or die($mysqli->error);

  //The first statement here is to print out the begining of the search result list.
  $output = "<div class='w itemmain'><div class='productpicture' id='productpicture'>";
  // Create a data variable to get all the information related to one product from the database.
  while ($data = $result->fetch_assoc()) {
    // print_r($data);

    $output .= "<div><img class='image' src = '{$data['imgUrl']}' width='150' heigh='150'></div>";
    $output .= "</div>";
    $output .= "<div class='productinfo' id='productinfo'>
    <div class='functions'>"; //will append things later
    $output .= "<i>Select quantity: </i>";
    $output .= "<input min='1' type='number' name='qty' value='1' class='quantity_selection_box' id='quantity_selection_box' />";
    $output .= "<div class='total_price' id='total_price'>Total price:</div>";
    $output .= "<a href='#' class='choiceButton'><div id='add_to_cart'>Add to cart</div></a>";
    $output .= "<a href='#' class='choiceButton'><div id='buy_now'>Buy now</div></a>";
    $output .= "<div class='clause'>";
    $output .= "<input type='checkbox'>Try <a href='#'><strong>BigDeal Prime</strong></a> and start saving today with fast,free delivery on millions of items <br>";
    $output .= "<input type='checkbox'> <a href='#'><strong>2 Year PC Peripheral Protection Plan</strong></a> for CDN$ 4.99</div>";
    $output .= "<div class='description' id='description'><ul>"; //start Of the discription


    $description_array = explode("||", $data['description']);
    for ($x = 0; $x < count($description_array); $x++) {
      $output .= "<li>{$description_array[$x]}</li>";
    }

    $output .= "</ul></div>";

    $output .= "</div><div class='box'>"; //end of function and start box(actually on top of function)
    $output .= "<div class='intro'>{$data['intro']}</div>";
    $output .= "<p class='price'>CDN\$<i>{$data['price']}</i></p>";
    $output .= "<p class='sold'>{$data['sold']}&nbspsold</p>";
    $output .= "<div class='stars-outer'><div class='stars-inner'></div></div>";
    $output .= "<i class='number-rating'>{$data['number-rating']}</i>";
    $output .= "</div></div>"; //close the box,then the product info

    $output .= "";


    $output .= "</div></div>";
  }

  echo $output;

  ?>

  <!-- end of product detail -->

















  <!-- start of footer -->

  <div class="offer">
    <div class="smallcontainer">
      <div class="row">
        <div class="column7">
          <p1>Exclusively Available on Goodwill</p1>
          <h2>
            <font color=red>Monster Killer 2.0</font>
          </h2>
          <small>
            <font color=white>We launched Monster Killer 2.0 with a lot of different functionalities.
              We made this awesome product for our loving ones.Noise cancellation is also an important
              feature of our product.</font>
          </small><br>
          <ahref="" class="btn">Buy Now &#10132;</ahref>
        </div>
        <div class="column6">
          <img src="images\imagesOfLandingPage\06aQBP.jpg">
        </div>
      </div>
    </div>
  </div>
  <div class="brands">
    <div class="row">
      <div class="column5">
        <img src="images\imagesOfLandingPage\Skullcandy-Logo-768x432.png">
      </div>
      <div class="column5">
        <img src="images\imagesOfLandingPage\new-beats-saudio-png-logo-0.png">
      </div>
      <div class="column5">
        <img src="images\imagesOfLandingPage\apple-iphone-logo-png-1.png">
      </div>
      <div class="column5">
        <img src="images\imagesOfLandingPage\red-sony-music-png-logos-23.png">
      </div>
    </div>

  </div>

  <div class="footer">
    <div class="main">
      <div class="row">
        <div class="footercol1">
          <h3>Download Our App</h3>
          <p>
            <font color=white>Download App for Android and IOS</font>
          </p>
          <div class="applogo">
            <img src="images\imagesOfLandingPage\play-store-logo-nisi-filters-australia-11.png"><br>
            <img src="images\imagesOfLandingPage\download-on-app-store-png-open-2000.png">
          </div>
        </div>
        <div class="footercol2">
          <center><img src="images\imagesOfLandingPage\onlinelogomaker-021321-1107-3224.png" width=300px>
          </center>
          <br>
          <p2>
            <font color=white><i>"Our Aim is to Serve Good Quality Products to Our Valuable Customers in
                a Better Price"</i></font>
          </p2>
        </div>
        <div class="footercol3">
          <h3>Useful Links</h3>
          <ul1>
            <li>Coupons</li>
            <li>Blog Post</li>
            <li>Return Policy</li>
            <li>Offers</li>
          </ul1>
        </div>
        <div class="footercol4">
          <h3>Follow Us</h3>
          <ul1>
            <li>Facebook</li>
            <li>Twitter</li>
            <li>Instagram</li>
            <li>Youtube</li>
          </ul1>
        </div>
      </div>
      <hr>
      <center>
        <p class="copyright">Copyright 2020 - <i>BIG DEAL</i></p>
      </center>
    </div>
  </div>
  <!-- end of footer -->



</body>