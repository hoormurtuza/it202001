<?php

//we'll be including this on most/all pages so it's a good place to include anything else we want on those pages

require_once(__DIR__ . "/../lib/helpers.php");

?>

<!-- CSS -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"

      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">




<!-- jQuery and JS bundle w/ Popper.js -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"

        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"

        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"

        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"

        crossorigin="anonymous"></script>




<div class="container-fluid">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <ul class="navbar-nav mr-auto">

            <li class="nav-item"><a class="nav-link" href="<?php echo getURL("home.php"); ?>">Home</a></li>

            <?php if (!is_logged_in()): ?>

                <li class="nav-item"><a class="nav-link" href="<?php echo getURL("login.php"); ?>">Login</a></li>

                <li class="nav-item"><a class="nav-link" href="<?php echo getURL("register.php"); ?>">Register</a></li>

            <?php endif; ?>

            <?php if (has_role("Admin")): ?>

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"

                       data-toggle="dropdown"

                       aria-haspopup="true" aria-expanded="false">

                        Admin

                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <a class="nav-link" href="<?php echo getURL("test_create_product.php"); ?>">Create

                            Products</a>

                        <a class="nav-link" href="<?php echo getURL("test_list_product.php"); ?>">View

                            Products</a>

                        <a class="nav-link" href="<?php echo getURL("test_create_cart.php"); ?>">Create

                            Cart</a>




                        <a class="nav-link" href="<?php echo getURL("test_list_cart.php"); ?>">View

                            Cart</a>

                    </div>

                </li>

            <?php endif; ?>

            <?php if (is_logged_in()): ?>

                <li class="nav-item"><a class="nav-link" href="<?php echo getURL("shop.php"); ?>">Shop</a></li>

                <li class="nav-item"><a class="nav-link" href="<?php echo getURL("my_cart.php"); ?>">Cart</a></li>

                <li class="nav-item"><a class="nav-link" href="<?php echo getURL("profile.php"); ?>">Profile</a></li>

                <li class="nav-item"><a class="nav-link" href="<?php echo getURL("logout.php"); ?>">Logout</a></li>

            <?php endif; ?>

        </ul>

        <span class="navbar-text">Balance: <?php echo getBalance(); ?></span>

    </nav>

</div>