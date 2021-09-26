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

    <title>Food Order Website - order</title>
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
    <section class="content bg-light">
        <div class="container">
            <h5 class="text-left">Manage Order</h5>
            <div class="row">
                <table class="table table-border">
                    <thead>
                        <tr>
                            <th scope="col">S.N</th>
                            <th scope="col">Food</th>
                            <th scope="col">Price</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Total</th>
                            <th scope="col">Order Date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1.</th>
                            <td>Mixed Pizza</td>
                            <td>10.00</td>
                            <td>2</td>
                            <td>20.00</td>
                            <td>2020-11-30 04:07:17</td>
                            <td class="text-success">Delivered</td>
                            <td>Jana Bush</td>
                            <td>+1 (562) 101-2028</td>
                            <td>tydujy@mailinator.com</td>
                            <td>Minima iure ducimus</td>
                            <td>Update Order</td>
                        </tr>
                        <tr>
                            <th scope="row">2.</th>
                            <td>Best Burger</td>
                            <td>4.00</td>
                            <td>4</td>
                            <td>16.00</td>
                            <td>2020-11-30 03:52:43</td>
                            <td class="text-success">Delivered</td>
                            <td>Kelly Dillard</td>
                            <td>+1 (908) 914-3106</td>
                            <td>fexekihor@mailinator.com</td>
                            <td>Incidunt ipsum ad d</td>
                            <td>Update Order</td>
                        </tr>
                        <tr>
                            <th scope="row">3.</th>
                            <td>Sadeko Momo</td>
                            <td>6.00</td>
                            <td>3</td>
                            <td>18.00</td>
                            <td>2020-11-30 03:49:48</td>
                            <td class="text-danger">Cancelled</td>
                            <td>Bradley Farrell</td>
                            <td>+1 (576) 504-4657</td>
                            <td>zuhafq@malinator.com</td>
                            <td>Duis aliqua Qui lor</td>
                            <td>Update Order</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

    </section>
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