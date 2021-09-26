<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">

    <title>Food Order Website - Home Page</title>
</head>

<body>
    <!-- narbar starts -->
    <section class="narbar">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/logo.png" alt="logo_food" class="logo">
                </div>
                <div class="col-md-6 menu">
                    <ul class="nav justify-content-end text-center">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="categories.php">Categories</a>
                        </li>
                        <li>
                            <a href="foods.php">Foods</a>
                        </li>
                        <li>
                            <a href="#footer">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- form order start -->
    <section id="form-oder">
        <section class="form-content">
            <h1>Fill this form to confirm your oder.</h1>
            <fieldset class="border-form select-food">
                <legend>Selected Food</legend>
                <div class="food-infor order">
                    <div class="food-img">
                        <img src="images/menu-pizza.jpg" alt="pizza">
                    </div>
                    <div class="description">
                        <h3>Food Title</h3>
                        <p class="price">$2.3</p>
                        <h4 class="quantity">Quantity</h4>
                        <input type="number" value="1">
                    </div>
                    <div class="clear"></div>
                </div>
            </fieldset>

            <fieldset class="border-form delivery-details">
                <legend>Delivery Details</legend>
                <form>
                    <h4>Full Name</h4>
                    <input type="text" placeholder="E.g. Vijay Thapa">
                    <h4>Phone Number</h4>
                    <input type="text" placeholder="E.g. 0986xxxxxxxx">
                    <h4>Email</h4>
                    <input type="text" placeholder="E.g. hi@gmail.com">
                    <h4>Address</h4>

                    <textarea rows="10" placeholder="E.g. Street, City, Country"></textarea>

                    <br>
                    <input type="button" value="Confirm Oder" id="order-btt">
                </form>

            </fieldset>
        </section>
        <!-- form order end -->
        <!-- social start -->
        <section class="social ">
            <div class="container text-center">
                <ul>
                    <li>
                        <a class="#"><img src="https://img.icons8.com/color/48/000000/facebook.png" alt="facebook"></a>
                    </li>
                    <li>
                        <a class="#"><img src="https://img.icons8.com/color/48/000000/instagram-new--v2.png"
                                alt="instagram"></a>
                    </li>
                    <li>
                        <a class="#"><img src="https://img.icons8.com/fluency/48/000000/twitter.png" alt="twitter"></a>
                    </li>
                </ul>
            </div>

        </section>
        <!-- social end -->

        <!-- footer start -->
        <section id="footer">
            <div class="container  text-footer">
                <p>All rights reserved.Designed By <a href="#">Khanh Huyen</a></p>
            </div>

        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>

</html>