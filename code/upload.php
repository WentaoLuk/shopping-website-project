<?php
// Create database connection
$bigdeal_database = mysqli_connect("localhost", "root", "", "bigdeal");

// Initialize message variable
$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {
    // Get image name
    $image_name = $_FILES['image']['name'];
    $image_temp_name = $_FILES['image']['tmp_name'];
    // Get all the information uploaded
    $product_title = $_POST['product_title'];
    $product_price = $_POST['product_price'];
    $product_sold = $_POST['product_sold'];
    $product_rating = $_POST['product_rating'];
    $product_description = $_POST['product_description'];

    // image file directory
    $file_destination = "images/imagesOfResultPage/" . basename($image_name);

    // insert into 
    $sql_insert = "INSERT INTO products (imgUrl, intro, price, sold, `number-rating`, description)
     VALUES ('$file_destination', '$product_title', '$product_price', '$product_sold', '$product_rating','$product_description')";
    // execute query
    mysqli_query($bigdeal_database, $sql_insert);

    move_uploaded_file($image_temp_name, $file_destination);
}
?>


<!DOCTYPE html>
<html>

<head>
    <link rel="Stylesheet" href="css/landingpage.css">
    <link rel="stylesheet" href="css/resultpage.css">
    <link rel="Stylesheet" type="text/css" href="css/detailpage.css">
    <link rel="Stylesheet" href="css/upload.css">

    <title>Product Upload -BigDeal.com</title>

</head>

<body>

    <!-- start of header -->
    <div class="header" method="get">
        <a href="index.php"> <img src="images/ImagesOfResultPage/logo.png" alt="" class="logo1"></a>
        <div class=" download">
            <h4>Download our App: </h4>
            <a href="#"> <img src="images/ImagesOfResultPage/AppDown.png" alt="" class="app1">
            </a>
            <a href="#"> <img src="images/ImagesOfResultPage/PlayDown.png" alt="" class="app2">
            </a>
        </div>
    </div>
    <!-- end of header -->

    <!-- This container will contain the form to upload items to the product page. -->
    <div id="content" class="w container">
        <form method="POST" action="upload.php" enctype="multipart/form-data">
            <!-- <input type="hidden" name="size" value="1000000"> -->
            <div>

                <input type="file" name="image" class="upload_button">
            </div>
            <div class="information">

                <div class="row">
                    <div class="col-25">
                        <label for="fname">Product title: </label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="product_title" placeholder="Product name" class="input_box">
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="fname">Product price:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="product_price" class="input_box">
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="fname">Product rating:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="product_rating" placeholder="number 1 - 5" class="input_box">
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="fname">Product sold:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="product_sold" class="input_box">
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="subject">Procuct introduction:</label>
                    </div>
                    <div class="col-75">
                        <textarea id="text" cols="40" rows="4" name="product_description" placeholder="Description of the product. Please divide each paragraph by '||'"></textarea>
                    </div>
                </div>

            </div>
            <div class="row">
                <button type="submit" name="upload" class="upload_button">Upload</button>
            </div>
        </form>
    </div>

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

</html>