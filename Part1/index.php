<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>E-commerce website</title>
</head>

<body>
    <div class="nav">

        <ul>

            <a href="index.php">
                <button type="button" style="background-color: black;
                        text-decoration: none; border: none;" src="index.html">
                    <h1>RETRO</h1>
                </button>
            </a>

            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="index2.php">Products</a></li>
            <li><a class="active" href="#home">Home</a></li>
            <li><a href="sign.php">Sign up</a></li>
        </ul>
    </div>
    <section>
        <img class="tred-img" src="images/logo.png">
        <img class="tred-img" src="images/laptop1.jpg">
        <img class="tred-img" src="images/abletmobile.jpg">
        <img class="tred-img" src="images/headphones.jpg">
        <img class="tred-img" src="images/iphone2.jpg">
        <img class="tred-img" src="images/teblet.jpg">
    </section>

    <div class="container">

        <div class="row">

            <div class="col-md-8 mb-5">
                <form>
                    <input class="search" type="text" name="search" placeholder="search..">
                </form>
                <h2 id="about">About us</h2>
                <hr>
                <p>We are among the top 10 highest growing company and are
                    listed as number 1 in forbes.We believe customer are
                    king because without their trust in us we haven't grown
                    such big.Our moto is to provide exceptional customer
                    service.Retro was
                    started by a young boy named Rutvik in small town of
                    canada for making deliveries and since then it has done
                    best in its field and owner has occupied first place
                    among the richest person on the earth.
                </p>
                <p>Being a part of our family makes you someone special and
                    our free delivery services are reliable and we deliver
                    products with utmost care with upto 30 days replacement
                    policies.
                </p>

            </div>
            <div class="col-md-4 mb-5">
                <h2 id="contact">Contact Us</h2>
                <hr>
                <address>
                    <strong>Retro Company Ltd</strong>
                    <br>3481 Baseline Rd
                    <br>Nepean Ottawa, CA 90210
                    <br>
                </address>
                <address>
                    <abbr title="Phone">P:</abbr>
                    (123) 333-4521
                    <br>
                    <abbr title="Email">E:</abbr>
                    <a href="mailto:#">retro@sterling.com</a>
                </address>
            </div>
            <div class="feat-pro">
                <h1> Featured Products</h1><br>
            </div>

        </div>
        <div class="row">
            <!-- /.row -->

            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <a href="laptop.php">
                        <img class="card-img-top" src="images/lapto.jpg" alt="" style="height:200px;">
                        <div class="card-body">
                            <h4 class="card-title">Laptops</h4>
                    </a>
                    <p class="card-text">We have wide range of laptops
                        from top brands like Dell , Msi , Acer , Apple
                        and many more with discount ranging from 20% to
                        60% off and extra discounts for students.
                    </p>
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <a href="elecacces.php">
                    <img class="card-img-top" src="images/9.jpg" alt="" style="height: 200px;">
                    <div class="card-body">
                        <h4 class="card-title">Electronic Accessories</h4>
                </a>
                <p class="card-text">We provide wide range of
                    electronic accessories in cluuding charger ,
                    headphone , usb drvie , otg cable , sd card and
                    many more at very low rates from market value
                    and from well known brand like samsung , Toshiba
                    , Phillips , Apple
                    and many more..

                </p>
            </div>
            <div class="card-footer">
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-5">
        <div class="card h-100">
            <a href="telivision.php">
                <img class="card-img-top" src="images/telivision.jpg" alt="" style="height: 200px;">
                <div class="card-body">
                    <h4 class="card-title">Television</h4>
            </a>
            <p class="card-text">Stay togetherr with your family
                and enjoy having fun with them by watching
                television.We have wide range of TV from Samsung
                , Oneplus , TCL , LG and many more..
            </p>
        </div>
        <div class="card-footer">
        </div>
    </div>
    </div>
    </div>
    <!-- /.row -->

    </div>


    <script>
        // Automatic Slideshow - change image every 3 seconds
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("tred-img");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 3000);
        }
    </script>
</body>

</html>