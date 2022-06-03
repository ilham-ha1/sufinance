<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sufinance</title>
    <!--Bootstrap 4 Link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #00C897;
            position: relative;
            font-size: 16px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container-fluid {
            background-color: white;
            border-radius: 0 0 200% 50%;
            padding-right: 100px;
        }

        .nav-item a:hover {
            background-color: #FFD365;
            color: black;
        }
    </style>
</head>

<body>
    <div class="container-fluid view">
        <div class="row">
            <div class="col-8">
                <!-- logo -->
                <a class="navbar-brand" href="#">
                    <img src="assets/img/logo.png" alt="logo" style="width:170px;">
                </a>
            </div>
            <div class="col-4">
                <!-- Links -->
                <nav class="navbar navbar-expand-sm justify-content-center">
                    <ul class="navbar-nav ">
                        <li class="nav-item ">
                            <a class="nav-link" href="#">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CONTACT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">LOGIN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">REGISTER</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="4">
                <div class="image-responsive">
                    <img src="assets/img/pic1.PNG" alt="">
                </div>
            </div>
            <div class="text col-8 justify-content-center">
                <p class="animated fadeInRight">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quod veniam rerum autem aspernatur. Temporibus ea cum
                    cupiditate earum id iusto! Quasi odio quo illo veritatis
                    molestiae fuga nam. Reiciendis corporis sit dolorem officiis
                    aut. Quo quisquam doloremque qui ipsam consectetur at maxime
                    hic veniam, sit doloribus ipsum modi dolores asperiores?</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione
                    explicabo cupiditate, totam quae architecto odio commodi dolore
                    officiis eius, accusamus ad, beatae ipsum? Cupiditate dicta optio
                    ducimus libero beatae neque.</p>
            </div>
        </div>
    </div>
    <div class="text jusify-content-center" style="text-align:right ; padding-right: 20%;;">
        <p class="info" style="color:white">
            JOIN US<br>
            AND BUILD YOUR <br>
            OWN FINANCE!
        </p>
    </div>
</body>

</html>