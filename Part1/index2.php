<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Mobiles</title>



</head>

<body>


    <!-- Page Content -->
    <div class="container">
        <a href="index.php">
            <button type="button" class="button-head">
                <h1>RETRO</h1>
            </button>
        </a>

        <div class="row">

            <div class="col-lg-3">

                <div class="list-group">
                    <form>
                        <input id="search" class="sch" type="text" name="search" onkeyup="myfunction()" placeholder="search..">
                    </form>
                    <a href="index2.php" class="list-group-item">Mobiles</a>
                    <a href="laptop.php" class="list-group-item">Laptops</a>
                    <a href="telivision.php" class="list-group-item">Telivision</a>
                    <a href="elecacces.php" class="list-group-item">Electronic
                        Accessories</a>
                    <a href="sign.php" class="list-group-item">Sign
                        up</a>
                    <a href="filter.php" class="list-group-item">Filter</a>
                    <a href="#cart" class="list-group-item">shopping cart</a>
                </div>

            </div>


            <div class="col-lg-9">

                <div id="carouselExampleIndicators" class="carousel slide
                        my-4" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="images/11pro.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="images/google.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="images/iphone11.jpg" alt="Third
                                    slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="mobile.php"><img class="card-img-top" src="images/samsungedg.jpg" alt="a"></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="mobile.php">Samsung Galaxy S7</a>
                                </h4>
                                <h5>$178</h5>
                                <button type="button" class="but-cart">Add
                                    To Cart</button>
                                <form action="action.php">
                                    <label for="quantity">Quantity:</label>
                                    <input type="number" class="selector" name="quantity" min="1" max="10">
                                </form>
                                <p class="card-text">
                                <ol class="align">
                                    <li>OS Android 9.0 Qualcomm
                                        Snapdragon 845</li>
                                    <li>Octa-core processor with Kryo
                                        385 Silver 4GB RAM</li>
                                    <li>Rear comera with
                                        12.2MP,f/1.8(wide)and Dual-LED
                                        flash</li>
                                    <li>2915mAh battery with Fast
                                        Charging mode </li>
                                </ol>
                                </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733;
                                    &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>


                  

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="images/iphone.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">iphone 6</a>
                                </h4>
                                <h5>$200</h5>
                                <button type="button" class="but-cart">Add
                                    To Cart</button>
                                <form action="action.php">
                                    <label for="quantity">Quantity:</label>
                                    <input type="number" class="selector" name="quantity" min="1" max="10">
                                </form>
                                <p class="card-text">
                                <ol class="align">
                                    <li>Retina Display with LED-backlit
                                        widescreen </li>
                                    <li>Multi-touch display with IPS
                                        technology</li>
                                    <li>Fingerprint-resistant oleophobic
                                        coating coating on front</li>
                                    <li>A8 chip with 64-bit architecture
                                        and M8 motion coprocessor</li>
                                </ol>
                                </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733;
                                    &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="images/iphonese.png" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">iphone 4s</a>
                                </h4>
                                <h5>$103.99</h5>
                                <button type="button" class="but-cart">Add
                                    To Cart</button>
                                <form action="action.php">
                                    <label for="quantity">Quantity:</label>
                                    <input type="number" class="selector" name="quantity" min="1" max="10">
                                </form>
                                <p class="card-text">
                                <ol class="align">
                                    <li>Retina display with multi-touch
                                        display </li>
                                    <li>8 megapixel camera with night
                                        vision mode</li>
                                    <li>Front camera with VGA-quality
                                        photos and videos up to 30 fps</li>
                                    <li>Stand by time of up to 200 hours
                                        and video playback of 10 hours</li>
                                </ol>
                                </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733;
                                    &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="images/googlepxle.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">google pixel 3</a>
                                </h4>
                                <h5>$224.99</h5>
                                <button type="button" class="but-cart">Add
                                    To Cart</button>
                                <form action="action.php">
                                    <label for="quantity">Quantity:</label>
                                    <input type="number" class="selector" name="quantity" min="1" max="10">
                                </form>
                                <p class="card-text">
                                <ol class="align">
                                    <li>OS Android 9.0 Qualcomm
                                        Snapdragon 845</li>
                                    <li>Octa-core processor with Kryo
                                        385 Silver 4GB RAM</li>
                                    <li>Rear comera with
                                        12.2MP,f/1.8(wide)and Dual-LED
                                        flash</li>
                                    <li>2915mAh battery with Fast
                                        Charging mode </li>
                                </ol>
                                </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733;
                                    &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="images/11pro.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">iphone 11pro </a>
                                </h4>
                                <h5>$1009</h5>
                                <button type="button" class="but-cart">Add
                                    To Cart</button>
                                <form action="action.php">
                                    <label for="quantity">Quantity:</label>
                                    <input type="number" class="selector" name="quantity" min="1" max="10">
                                </form>
                                <p class="card-text">
                                <ol class="align">
                                    <li>HDR display with 2436-by-1125
                                        pixel resolution at 458ppi</li>
                                    <li>Wide colour display with haptic
                                        touch and True tone display
                                    </li>
                                    <li>Rated IP68 maximum depth off 4
                                        meters up to 30 minutes</li>
                                    <li>Triple 12MP Ultra Wide camera
                                        with f/2.4 aperture </li>
                                </ol>
                                </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733;
                                    &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="images/iphone11.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">iphone 11</a>
                                </h4>
                                <h5>$800</h5>
                                <button type="button" class="but-cart">Add
                                    To Cart</button>
                                <form action="action.php">
                                    <label for="quantity">Quantity:</label>
                                    <input type="number" class="selector" name="quantity" min="1" max="10">
                                </form>
                                <p class="card-text">
                                <ol class="align">
                                    <li>Liquid retina display with 3D
                                        touch technology</li>
                                    <li>1792-by-828-pixel resolution at
                                        326ppi</li>
                                    <li>True tone display with haptic
                                        touch and fingerprint</li>
                                    <li>625 nits max brightness and
                                        rated IP68 under IEC Standard</li>
                                </ol>
                                </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733;
                                    &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Retro Company Ltd
                &copy;2020</p>
        </div>
        <!-- /.container -->
    </footer>


    <!-- Bootstrap core JavaScript -->

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"
        integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d"
        crossorigin="anonymous"></script>

</body>

</html>