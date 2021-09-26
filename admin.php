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

    <title>Food Order Website - Admin</title>
</head>

<body>
    <!-- narbar starts -->
    <section class="narbar">
        <div class="container">
            <div class="row">
                <div class="col menu">
                    <ul class="nav justify-content-center text-center">
                        <li>
                            <a class="menu-admin-text" href="./index.php">Home</a>
                        </li>
                        <li>
                            <a class="menu-admin-text" href="./admin.php">Admin</a>
                        </li>
                        <li>
                            <a class="menu-admin-text" href="./manage_categori.php">Category</a>
                        </li>
                        <li>
                            <a class="menu-admin-text" href="./manage_food.php">Food</a>
                        </li>
                        <li>
                            <a class="menu-admin-text" href="./manage_order.php">Order</a>
                        </li>
                        <li>
                            <a class="menu-admin-text" href="#">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- narbar end -->
    <!-- content start -->
    <div style="padding: 3%; background-color: #f1f2f6;" class="container-fluid">
        <div class="container">
            <h2 style="font-weight: bold">Dashboard</h2>
        </div>

        <div style="margin-top: 5%" class="container-fluid">
            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3 justify-content-center">
                <div class="col">
                    <div style="background-color: white !important" class="p-3 border">
                        <h5 style="font-weight: bold">4</h5>
                        <p>Categories</p>
                    </div>
                </div>
                <div class="col">
                    <div style="background-color: white !important" class="p-3 border">
                        <h5 style="font-weight: bold">6</h5>
                        <p>Foods</p>
                    </div>
                </div>
                <div class="col">
                    <div style="background-color: white !important" class="p-3 border">
                        <h5 style="font-weight: bold">3</h5>
                        <p>Total Orders</p>
                    </div>
                </div>
                <div class="col">
                    <div style="background-color: white !important" class="p-3 border">
                        <h5 style="font-weight: bold" s>$36.00</h5>
                        <p>Revenue Generated</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content end -->
    <!-- footer start -->
    <section id="footer">
        <div class="container-fluid bg-danger text-center">
            <div class="row ">
                <p class="text-white">2020 All rights reserved.Food House.Develop By <a class="text-blue"
                        href="#">CSE485</a></p>
            </div>
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