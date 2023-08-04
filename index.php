<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home | saddiq</title>
    <!-- link for fontawesome -->
    <script src="https://kit.fontawesome.com/993071b7c9.js" crossorigin="anonymous"></script>
    <!-- link for bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- link for css -->
    <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top py-3">
        <div class="container">
            <a class="navbar-brand" href="#">Saddiq</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" class="nav-buttons" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop.html">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="cart.html"><i class="fa fa-shopping-cart" href=""></i></a>
                        <a href="account.html"><i class="fas fa-user" href="#"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- end of navbar -->
    <section id="home">
        <div class="container">
            <h5>NEW ARRIVAL ICE CREAM FLAVORS</h5>
            <h1><span>Best Prices</span>This Month</h1>
            <p>Popular ice cream with affordable prices</p>
            <button class="btn btn-primary">Order Now</button>
        </div>
    </section>

    <!-- end of home section -->

    <!-- start of brands section -->
    <section id="brands" class="container p-t-20rem">
        <div class="row">
            <img src="assets/images/ice1.jpeg" alt="" class="image-fluid col-lg-3 col-md-6 col-sm-12" />
            <img src="assets/images/ice2.jpeg" alt="" class="image-fluid col-lg-3 col-md-6 col-sm-12" />
            <img src="assets/images/ice3.jpeg" alt="" class="image-fluid col-lg-3 col-md-6 col-sm-12" />
            <img src="assets/images/ice4.jpeg" alt="" class="image-fluid col-lg-3 col-md-6 col-sm-12" />
        </div>
    </section>

    <!-- New -->
    <section id="new" class="w-100">
        <div class="row p-0 m-0">
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img src="assets/images/brand1.png" alt="" class="img-fluid" />
                <div class="details">
                    <h2>Chocolate</h2>

                    <button class="btn btn-secondary">Order Now</button>
                </div>
            </div>
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img src="assets/images/brand2.png" alt="" class="img-fluid" />
                <div class="details">
                    <h2>Vanilla</h2>
                    <button class="btn btn-secondary">Order Now</button>
                </div>
            </div>
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img src="assets/images/brand3.png" alt="" class="img-fluid" />
                <div class="details">
                    <h2>Strawberry</h2>
                    <button class="btn btn-secondary">Order Now</button>
                </div>
            </div>
        </div>
    </section>

    <!-- featured -->
    <section id="featured my-5 pb-5">
        <div class="container text-center mt-5">
            <h3>Our Featured</h3>
            <hr />
            <p>Here you can checkout our featured ice creams categories</p>


            <div class="col-lg-6 col-md-12 col-sm-12">
                <img src="assets/images/ice5.jpeg" alt="" class="img-fluid" />
            </div>

            <div class="row mx-auto container-fluid">
                <?php include("server/get_featured_products.php"); ?>
                <?php while ($row = $featured_products->fetch_assoc()) { ?>
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img src="assets/images/<?php echo $row['product_image']; ?>" alt="" class="img-fluid mb-3" />
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
                    <p class="p-price">Kes <?php echo $row['product_price']; ?></p>
                    <button class="buy-btn">Order Now</button>
                </div>
                <?php } ?>
            </div>
    </section>


    <!-- footer -->
    <footer id="footer" class="container-fluid bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h4>Pages</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h4>Top Products Categories</h4>
                    <ul>
                        <li><a href="#">Chocolate</a></li>
                        <li><a href="#">Vanilla</a></li>
                        <li><a href="#">Strawberry</a></li>
                        <li><a href="#">Mango</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h4>Where to find us</h4>
                    <p>
                        <strong>Saddiq</strong>
                        <br />
                        123, Mombasa Road
                        <br />
                        Nairobi
                        <br />
                        <strong>Kenya</strong>
                    </p>
                    <a href="#">Go to contact page</a>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h4>Get the news</h4>
                    <p>
                        We will send you our latest news about our products and offers
                    </p>
                    <form action="">
                        <input type="text" class="form-control" placeholder="Enter Email" />
                        <button class="btn btn-primary mt-2">Subscribe</button>
                </div>
            </div>
        </div>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>