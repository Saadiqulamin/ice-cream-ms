<?php
if (isset($_GET['product_id'])) {
    
}else{
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Single Product | Saddiq</title>
    <!-- link for fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-Tra7ei4cu/bOQ7qgFBz2CTdOOvqpgZUZSlBjgI2PnEme50CbB8ZEm8Nz6uprs8RnRYAfGKic5Km9ZWUAd5aCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/993071b7c9.js" crossorigin="anonymous"></script>



    <!-- link for bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- link for css -->
    <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>
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
    <!-- single product -->
    <section class="container single-product my-5 pt-5">
        <div class="row mt-5">
            <div class="col-lg-5 col-md-6 col-sm-12">
                <img class="image-fluid w-100 pb-1" id="mainImg" src="./assets/images/brand2.png" alt="" />
                <div class="small-img-group">
                    <div class="small-img-col">
                        <img src="./assets/images/small-img1.jpeg" alt="" class="small-img" />
                    </div>
                    <div class="small-img-col">
                        <img src="./assets/images/small-img2.jpeg" alt="" class="small-img" width="100%" />
                    </div>
                    <div class="small-img-col">
                        <img src="./assets/images/small-img3.jpeg" alt="" class="small-img" />
                    </div>
                    <div class="small-img-col">
                        <img src="./assets/images/small-img4.jpeg" alt="" class="small-img" />
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <h3 class="py-4">Flavoured ice cream</h3>
                <h2>Kes 250</h2>
                <input type="number" value="1" />

                <button class="buy-btn btn btn-secondary">Add To Cart</button>
                <h5 class="mt-3 mb-3">Product Details</h5>
                <span>The details of the product will be shown here
                    The details of the product will be shown here
                    The details of the product will be shown here
                </span>
            </div>
        </div>
    </section>

    <!-- related products -->
    <section id="related-products my-5 pb-5">
        <div class="container text-center mt-5">
            <h3>Related products</h3>
            <hr class="mx-auto" />
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
                    <a href="<?php echo "single_product.php?product_id=". $row['product_id']; ?>"><button
                            class="buy-btn">Order Now</button></a>


                </div>
                <?php } ?>
            </div>
    </section>

    <footer id="footer" class="mt-5 py-5 bg-dark text-white">
        <div class="container mx-auto pt-5">
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
                        <input type="text" class="form-control" placeholder="Enter your email" />
                        <input type="submit" class="btn btn-success mt-2" value="Subscribe" />
                    </form>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
    var mainImg = document.getElementById("mainImg");
    var smallImg = document.getElementsByClassName("small-img");

    smallImg[0].onclick = function() {
        mainImg.src = smallImg[0].src;
    };
    smallImg[1].onclick = function() {
        mainImg.src = smallImg[1].src;
    };
    smallImg[2].onclick = function() {
        mainImg.src = smallImg[2].src;
    };
    smallImg[3].onclick = function() {
        mainImg.src = smallImg[3].src;
    };
    </script>
</body>

</html>