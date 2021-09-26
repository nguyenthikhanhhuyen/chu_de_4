<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="widd=device-widd, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">

    <title>Food Order Website - category</title>
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
            <h5 class="text-left">Manage Category</h5>
            <form action="">
                <input type="submit" name="submit" value="Add Category" class="buton">
            </form>
            <div class="row">
                <table class="table table-border">
                    <dead>
                        <tr>
                            <th scope="col">S.N</th>
                            <th scope="col">Title</th>
                            <th scope="col">Image</th>
                            <th scope="col">Featured</th>
                            <th scope="col">Active</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </dead>
                    <tbody>
                        <tr>
                            <th scope="row">1.</th>
                            <td>Pizza</td>
                            <td>
                                <img style=" width: 60% " src="images/pizza.jpg" alt="Pizza">
                            </td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>
                                <input type="submit" name="submit" value="Update Category"
                                    class="btn btn-primary bg-success">
                                <input type="submit" name="submit" value="Delete Category"
                                    class="btn btn-primary bg-danger">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2.</th>
                            <td>Burger</td>
                            <td>
                                <img style=" width: 60% " src="images/burger.jpg" alt="Burger">
                            </td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>
                                <input type="submit" name="submit" value="Update Category"
                                    class="btn btn-primary bg-success">
                                <input type="submit" name="submit" value="Delete Category"
                                    class="btn btn-primary bg-danger">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3.</th>
                            <td>Momo</td>
                            <td>
                                <img style=" width: 60% " src="images/momo.jpg" alt="momo">
                            </td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>
                                <input type="submit" name="submit" value="Update Category"
                                    class="btn btn-primary bg-success">
                                <input type="submit" name="submit" value="Delete Category"
                                    class="btn btn-primary bg-danger">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4.</th>
                            <td>Quia est ipum id id</td>
                            <td>
                                <img style=" width: 60% " src="images/pizza.jpg" alt="Quia">
                            </td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>
                                <input type="submit" name="submit" value="Update Category"
                                    class="btn btn-primary bg-success">
                                <input type="submit" name="submit" value="Delete Category"
                                    class="btn btn-primary bg-danger">
                            </td>
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
        integrity="sha384-/bQdsd/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2dRZ" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>

</html>