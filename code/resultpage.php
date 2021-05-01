<!DOCTYPE html>
<html lang="en">

<!-----Header Part------->

<head>
    <title>Bigdeal:earphones</title>
    <link rel="Stylesheet" href="css/landingpage.css">
    <link rel="stylesheet" href="css/resultpage.css">
    <link rel="stylesheet" href="css/iconfont.css">
    <script src="js/list_item.js"></script>
    <script src="js/landing_page.js"></script>
    <script src="js/resultpage.js" defer></script>

</head>

<body onload="document.getElementById('searchBar').value=window.location.search.replace('?search=', '');searchResult(0,0,Infinity)">
    <!-- set up a new top -->

    <div class="header">
        <a href="index.php"> <img src="images/ImagesOfResultPage/logo.png" alt="" class="logo1"></a>

        <div class="topSearch">
            <form action="resultpage.php" method="get">
                <input type="text" class="inputBox" placeholder="search for an item" name="search" id="searchBar">
                <input type="submit" class="searchButton" value="Search">
            </form>
        </div>
        <div class="download">
            <h4>Download our App: </h4>
            <a href="#"> <img src="images/ImagesOfResultPage/AppDown.png" alt="" class="app1">
            </a>
            <a href="#"> <img src="images/ImagesOfResultPage/PlayDown.png" alt="" class="app2">
            </a>
        </div>
    </div>
    <!-- end of this new top -->



    <!-- start of top bar -->
    <div class="top">
        <div class="topLeft">
            <a href="#">Electronics</a>
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

    <!-- start of filter -->
    <div class="filter w">
        <p class="resultText">Showing results for earphones:</p>

        <dl class="rating">
            <dt>Select By Rating:</dt>
            <dd><a href="#" onclick="return searchResult(4,0,Infinity)"> & up</a></dd>
            <dd><a href="#" onclick="return searchResult(3,0,Infinity)"> & up</a></dd>
            <dd><a href="#" onclick="return searchResult(2,0,Infinity)"> & up</a></dd>
            <dd><a href="#?" onclick="return searchResult(1,0,Infinity)"> & up</a></dd>
        </dl>

        <dl class="sortPrice">
            <dt>Sort by Price: </dt>
            <dd><a href="#" onclick="return searchResult(0,0,20)">$0-$20</a></dd>
            <dd><a href="#" onclick="return searchResult(0,20,45)">$20-$45</a></dd>
            <dd><a href="#" onclick="return searchResult(0,45,70)">$45-$70</a></dd>
            <dd><a href="#" onclick="return searchResult(0,70,100)">$70+</a></dd>
            <dd><a href="#" onclick="return searchResult(0,0,Infinity)">All price</a></dd>
        </dl>

        <dl class="sortOrder">
            <dt>Sort by:</dt>
            <dd><button onclick="return sortByPriceOrder(1,0)">Price: Low to High</button></dd>
            <dd><button onclick="return sortByPriceOrder(0,1)">Price: High to Low</button></dd>
        </dl>


    </div>

    <?php



    $mysqli = new mysqli('localhost', 'root', '', 'bigdeal') or die($mysqli->connect_error);
    $table = 'products';

    $result = $mysqli->query("SELECT * FROM $table") or die($mysqli->error);

    $output = "<div class='result w' id='searchItems'>";
    while ($data = $result->fetch_assoc()) {
        // print_r($data);

        $output .= "<div class='box'><img class='image' src = '{$data['imgUrl']}' width='150' heigh='150'>";
        $output .= "<div class='intro'><a href='productpage.php?id={$data['id']}'>{$data['intro']}</a></div>";
        $output .= "<p class='price'>{$data['price']}</p>";
        $output .= "<p class='sold'>{$data['sold']}sold</p>";
        $output .= "<div class='stars-outer'><div class='stars-inner'></div></div>";
        $output .= "<i class='number-rating'>{$data['number-rating']}</i></div>";
    }
    $output .= "</div>";

    // echo $_GET['search'];

    echo $output;




    ?>


    <!-- These are the search results -->


    <!-- <div class="result w" id="searchItems"></div>

    <div class="bottom"></div> -->

    <!-- end of result part -->






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
<script></script>

</html>