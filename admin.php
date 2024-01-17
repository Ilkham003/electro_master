<?php
session_start();

if($_SESSION['login'] ) {


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Electro - HTML Ecommerce Template</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
    <!-- HEADER -->
    <header>
        <!-- TOP HEADER -->

        <!-- /TOP HEADER -->

        <!-- MAIN HEADER -->
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="admin.php" class="logo">
                                <img src="./img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->

                    <!-- SEARCH BAR -->

                    <!-- /SEARCH BAR -->

                    <!-- ACCOUNT -->
                    <div class="col-md-9 clearfix">
                        <div class="header-ctn">
                            <!-- Wishlist -->

                            <!-- /Wishlist -->

                            <!-- Cart -->
                            <div class="dropdown">
                                <a href="exit.php">
                                    <i class="fa fa-user"></i>
                                    <span>Exit profile</span>
                                </a>

                            </div>
                            <!-- /Cart -->

                            <!-- Menu Toogle -->
                            <div class="menu-toggle">
                                <a href="#">
                                    <i class="fa fa-bars"></i>
                                    <span>Menu</span>
                                </a>
                            </div>
                            <!-- /Menu Toogle -->
                        </div>
                    </div>
                    <!-- /ACCOUNT -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- /MAIN HEADER -->
    </header>
    <!-- /HEADER -->
    <?php
$con = mysqli_connect("localhost", "root", "root", "comp_db");

                         $sql2 = "select * from `clients` where id = '{$_SESSION['user']}'";
                         $res2 = mysqli_query($con, $sql2);
                         for ($data2 = []; $v = $res2->fetch_assoc(); $data2[] = $v);
if($data2[0]['rol'] == 'admin') {
                            ?>
    <!-- NAVIGATION -->
    <nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->
                <ul class="main-nav nav navbar-nav">

                    <form action="" method="post">
                        <ul class="main-nav nav navbar-nav">
                         
                            <li>
                                <input type="submit" name="admin" value="Admin qosıw"
                                    style="background: transparent; border: none;">
                            </li>
                            <li>
                                <input type="submit" name="prod" value="Producta qosıw"
                                    style="background: transparent; border: none;">
                            </li>
                          
                            <li>
                                <input type="submit" name="nout" value="Noutbuklar"
                                    style="background: transparent; border: none;">
                            </li>
                            <li>
                                <input type="submit" name="komp" value="Kompyuterler"
                                    style="background: transparent; border: none;">

                            </li>
                            <li>
                                <input type="submit" name="qur" value="Qurılmalar"
                                    style="background: transparent; border: none;">

                            </li>
                        </ul>
                    </form>
                    </li>

                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->

    <!-- SECTION -->

    <!-- /SECTION -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->

                <!-- /section title -->
                <?php
if (isset($_POST['komp'])) {
    $sql = "select * from `products` where category = 1";
    $res = mysqli_query($con, $sql);
    for ($data = []; $v = $res->fetch_assoc(); $data[] = $v);
} elseif (isset($_POST['nout'])) {
    $sql = "select * from `products` where category = 2";
    $res = mysqli_query($con, $sql);
    for ($data = []; $v = $res->fetch_assoc(); $data[] = $v);
} elseif (isset($_POST['qur'])) {
    $sql = "select * from `products` where category = 3";
    $res = mysqli_query($con, $sql);
    for ($data = []; $v = $res->fetch_assoc(); $data[] = $v);
} else {
    $sql = "select * from `products` ";
    $res = mysqli_query($con, $sql);
    for ($data = []; $v = $res->fetch_assoc(); $data[] = $v);
}

?>
                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <?php
if (isset($_POST['admin'])) {
    ?>
                        <div class="row "
                            style="align-items: center; justify-content: center !important; display: flex;">
                            <div class="col-md-6 order-details">
                                <h3>Admin qosıw</h3>

                                <form action="" method="post">
                                    <div class="form-group">
                                        <input class="input" type="text" name="name" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="text" name="surname" placeholder="Surname">
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="text" name="phone" placeholder="Phone">
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="text" name="email" placeholder="Email">
                                    </div>

                                    <div class="form-group">
                                        <input class="input" type="text" name="password" placeholder="Password">
                                    </div>
                                    <div style="display: flex; align-items: center; justify-content: space-between;">

                                        <input type="submit" class="primary-btn order-submit" name="reg"
                                            value="Admin qosıw">
                                    </div>
                                </form>
                            </div>
                        </div>

                        <?php
} elseif (isset($_POST['prod'])) {
    ?>

                        <div class="row "
                            style="align-items: center; justify-content: center !important; display: flex;">
                            <div class="col-md-6 order-details">
                                <h3>Pradukta qosıw</h3>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input class="input" type="file" name="img" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="text" name="name" placeholder="Atı">
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="text" name="price" placeholder="Baxası">
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="text" name="count" placeholder="Sanı">
                                    </div>
                                    <div class="form-group">
                                        <select name="category" id="" class="input">
                                            <option value="" selected>
                                                Kategoriya saylań
                                            </option>
                                            <option value="1">
                                                Kompyuter
                                            </option>
                                            <option value="2">
                                                Noutbuk
                                            </option>
                                            <option value="3">
                                                Qurılmalar
                                            </option>
                                        </select>
                                    </div>

                                    <div style="display: flex; align-items: center; justify-content: space-between;">

                                        <input type="submit" class="primary-btn order-submit" name="qos" value="Qosıw">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <?php

} else {
    foreach ($data as $v) {

        ?>
                        <div class="product col-md-3" style="padding: 10px;">
                            <div class="product-img">
                                <img src="./img/<?=$v['img']?>" alt="">

                            </div>
                            <div class="product-body">
                                <h3 class="product-name"><a href="#"><?=substr($v['name'],0,10)?></a></h3>
                                <h4 class="product-price"><?=$v['price']?></h4>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product-btns">
                                    <form action="" method="post">
                                        <div
                                            style="display: flex; align-items: center; justify-content: space-between;">
                                            <?php
                       
                                        if($data2[0]['rol'] == 'admin') {
                                            ?>

<a href="add_product.php?id=<?=$v['id']?>">Edit</a>
<input type="submit" value="Delete" name="del"
style="background: transparent; border: none;">
<input type="hidden" name="hidd" value="<?=$v['id']?>">

<?php
}

?>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="add-to-cart">
                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                            </div>
                        </div>
                        <?php
}
}

if (isset($_POST['qos'])) {
    $name = $_POST['name'];
    $img = $_FILES['img']['name'];
    $price = $_POST['price'];
    $count = $_POST['count'];
    $cat = $_POST['category'];
    $sql_q = "insert into `products`(name,img,price,count,category) values('$name','$img','$price','$count','$cat')";
    mysqli_query($con, $sql_q);
    move_uploaded_file($_FILES["img"]["tmp_name"], "img/" . $_FILES['img']['name']);
}

if (isset($_POST['reg'])) {
    $sql_r = "insert into `admins`(rol,name,surname,phone,email,password) values('admin','{$_POST['name']}','{$_POST['surname']}','{$_POST['phone']}','{$_POST['email']}','{$_POST['password']}')";
    mysqli_query($con, $sql_r);
}

if(isset($_POST['del'])) {
    $sql_d = "DELETE FROM `products` WHERE `products`.`id` = '{$_POST['hidd']}'";
    mysqli_query($con,$sql_d);
}
?>



                    </div>
                    <!-- Products tab & slick -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /SECTION -->

        <!-- HOT DEAL SECTION -->
       
        <!-- /NEWSLETTER -->
        <?php
} else {
    ?>

<nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->
                <ul class="main-nav nav navbar-nav">

                    <form action="" method="post">
                        <ul class="main-nav nav navbar-nav">
                         
                            
                            <li>
                                <input type="submit" name="komp" value="Jeke maǵlıwmatlar"
                                    style="background: transparent; border: none;">

                            </li>
                            <li>
                                <input type="submit" name="qur" value="Alǵan zatları"
                                    style="background: transparent; border: none;">

                            </li>
                        </ul>
                    </form>
                    </li>

                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>

<?php
if(isset($_POST['qur'])) {
    $sql4 = "select * from `products`";
    $res4 = mysqli_query($con,$sql4);
    for($data4 = [];$v= $res4 -> fetch_assoc();$data4[]=$v);
   ?>
<div >

<table class="table">
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Count</th>
    </tr>
    <?php
        foreach($data4 as $v) {
            ?>
 <tr>
        <td><?=$v['name']?></td>
        <td><?=$v['price']?></td>
        <td><?=$v['count']?></td>
    </tr>
            <?php
        }
    ?>
   
</table>
</div>
   <?php
}  else {
    $sql4 = "select * from `clients` where id = '{$_SESSION['user']}'";
    $res4 = mysqli_query($con,$sql4);
    for($data4 = [];$v= $res4 -> fetch_assoc();$data4[]=$v);
?>
<div >

<table class="table">
    <tr>
        <th>Name</th>
        <th>surname</th>
        <th>Email</th>
        <th>phone</th>
    </tr>
    <?php
        foreach($data4 as $v) {
            ?>
 <tr>
        <td><?=$v['name']?></td>
        <td><?=$v['surname']?></td>
        <td><?=$v['email']?></td>
        <td><?=$v['phone']?></td>
    </tr>
            <?php
        }
    ?>
   
</table>
</div>

<?php

}
}
                            ?>
        <!-- FOOTER -->
        <footer id="footer">
            <!-- top footer -->
            <div class="section" style="margin-top: <?=($data2[0]['rol'] == 'admin')? '0' : '400px'?>;">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <div class="footer">
                                <h3 class="footer-title">About Us</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut.</p>
                                <ul class="footer-links">
                                    <li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
                                    <li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
                                    <li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6">
                            <div class="footer">
                                <h3 class="footer-title">Categories</h3>
                                <ul class="footer-links">
                                    <li><a href="#">Hot deals</a></li>
                                    <li><a href="#">Laptops</a></li>
                                    <li><a href="#">Smartphones</a></li>
                                    <li><a href="#">Cameras</a></li>
                                    <li><a href="#">Accessories</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="clearfix visible-xs"></div>

                        <div class="col-md-3 col-xs-6">
                            <div class="footer">
                                <h3 class="footer-title">Information</h3>
                                <ul class="footer-links">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Orders and Returns</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6">
                            <div class="footer">
                                <h3 class="footer-title">Service</h3>
                                <ul class="footer-links">
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">View Cart</a></li>
                                    <li><a href="#">Wishlist</a></li>
                                    <li><a href="#">Track My Order</a></li>
                                    <li><a href="#">Help</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>
            <!-- /top footer -->

            <!-- bottom footer -->
            <div id="bottom-footer" class="section" >
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <ul class="footer-payments">
                                <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                                <li><a href="#"><i class="fa fa-credit-card"></i></a></li>
                                <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                                <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                                <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
                                <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
                            </ul>
                            <span class="copyright">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                                    aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </span>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>
            <!-- /bottom footer -->
        </footer>
        <!-- /FOOTER -->

        <!-- jQuery Plugins -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/nouislider.min.js"></script>
        <script src="js/jquery.zoom.min.js"></script>
        <script src="js/main.js"></script>

</body>

</html>

<?php
} else {

    header("Location: index.php ");
    
    
}
?>