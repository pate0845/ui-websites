<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1,
      shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <title>e-commerce website</title>


</head>

<body>


  <!-- Page Content -->
  <div class="container">
    <a href="index.html">
      <button type="button" class="button-head">
        <h1>RETRO</h1>
      </button>
    </a>

    <div class="row">

      <div class="col-lg-3">

        <div class="list-group">
          <form>
            <input class="sch" type="text" name="search" placeholder="search..">
          </form>
          <a href="index2.php" class="list-group-item">Mobiles</a>
          <a href="laptop.php" class="list-group-item">Laptops</a>
          <a href="telivision.php" class="list-group-item">Telivision</a>
          <a href="elecacces.php" class="list-group-item">Electronic
            Accessories</a>
          <a href="sign.php" class="list-group-item">Sign up</a>
          <a href="filter.php" class="list-group-item">Filter</a>
          <a href="#cart" class="list-group-item">shopping cart</a>
        </div>

      </div>


      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="images/tv2.jpg" alt="First
                  slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="images/tv3.jpg" alt="Second
                  slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="images/tv6.jpg" alt="Third
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
              <a href="#"><img class="card-img-top" src="images/tv9.jpg" alt="mobile"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">One Plus TV 55 Q1 Pro</a>
                </h4>
                <h5>$680.34</h5>
                <button type="button" class="but-cart">Add To Cart</button>
                <form action="action.php">
                  <label for="quantity">Quantity:</label>
                  <input type="number" class="selector" name="quantity" min="1" max="10">
                </form>
                <p class="card-text">
                <ol>
                  <li>Screen Size 138.8cm with resolution 3840 x 2160</li>
                  <li>Picture Processor Gamma
                  </li>
                  <li>Dolby Vision HDR10,HDR10+ sound surround system</li>
                  <li>Wi-fi 2.4 GHz with installed apps like Netflix,Youtube
                  </li>
                </ol>
                </p>

              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733;
                  &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="images/tv2.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Sony 65" 4K UHD HDR Android TV</a>
                </h4>
                <h5>$1,199.99</h5>
                <button type="button" class="but-cart">Add To Cart</button>
                <form action="action.php">
                  <label for="quantity">Quantity:</label>
                  <input type="number" class="selector" name="quantity" min="1" max="10">
                </form>
                <p class="card-text">
                <ol>
                  <li>Ultra HD display with 3840 x 2160 resolution </li>
                  <li>4K HDR Processor X1 and 4k X-Reality PRO</li>
                  <li>60Hz refersh rate and Motionflow XR technology with
                    Dolby vision</li>
                  <li>LED with wide viewing angle(178-degrees)</li>
                </ol>
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733;
                  &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="images/tv5.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">LG 65" 4K UHD webOS Smart TV</a>
                </h4>
                <h5>$949.99</h5>
                <button type="button" class="but-cart">Add To Cart</button>
                <form action="action.php">
                  <label for="quantity">Quantity:</label>
                  <input type="number" class="selector" name="quantity" min="1" max="10">
                </form>
                <p class="card-text">
                <ol>
                  <li>
                    65-inch with 4K Ultra resolution (3840 x 2160)
                  </li>
                  <li>
                    60Hz referesh rate and Quad core Processors
                  </li>
                  <li>20W built in speakers with AI sound,ULtra Surround
                    technology</li>
                  <li>
                    3 HDMI 2.0 ports ,2 USB ports,a component A/V input
                  </li>
                </ol>
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733;
                  &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="samsung.html"><img class="card-img-top" src="images/tv6.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="samsung.php"> Samsung 65" 4K UHD Curved TV</a>
                </h4>
                <h5>$1049.99</h5>
                <button type="button" class="but-cart">Add To Cart</button>
                <form action="action.php">
                  <label for="quantity">Quantity:</label>
                  <input type="number" class="selector" name="quantity" min="1" max="10">
                </form>
                <p class="card-text">
                <ol>
                  <li>PurColor technology expresses unbeatable picture</li>
                  <li>Curved Screen provides wider viewing experience</li>
                  <li>Auto game mode optimizes display </li>
                  <li>2 USB media ports and 3 HDMI inputs to hook up
                    multiple HD sources
                  </li>
                </ol>
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733;
                  &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="images/tv3.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Sharp 43" 1080P Smart LED TV</a>
                </h4>
                <h5>$268</h5>
                <button type="button" class="but-cart">Add To Cart</button>
                <form action="action.php">
                  <label for="quantity">Quantity:</label>
                  <input type="number" class="selector" name="quantity" min="1" max="10">
                </form>
                <p class="card-text">
                <ol>
                  <li>Better Detail and Brightre picture with true picture</li>
                  <li>smother picture quality for fast action scane with
                    motion rate 120</li>
                  <li>DTS TruSurround sound feels like it is around you</li>
                  <li>Comes with 1 USB port and 2 HDMI ports</li>
                </ol>
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733;
                  &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="images/tv10.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">65" TU8300 Crystal UHD 4K</a>
                </h4>
                <h5>$950</h5>
                <button type="button" class="but-cart">Add To Cart</button>
                <form action="action.php">
                  <label for="quantity">Quantity:</label>
                  <input type="number" class="selector" name="quantity" min="1" max="10">
                </form>
                <p class="card-text">
                <ol>
                  <li>4,200R Screen Curvature ans 3,840 x 2,160 Resolution</li>
                  <li>Crystal Processor 4K Picture Engine Series 8</li>
                  <li>Dolby Digital Plus Audio EnHancement comes with 20W 2
                    channel speakers</li>
                  <li>Multirooom link and blutooth audio works with alexa</li>
                </ol>
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733;
                  &#9734;</small>
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
      <p class="m-0 text-center text-white">Retro Company Ltd &copy;2020</p>
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