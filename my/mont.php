<?php
include "conn.php"
?>
<!DOCTYPE html>
<html dir="">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="الوصف"  >
        <title>markta</title>
        <!-- css -->
<link href="css/test1.css" rel="stylesheet">
    </head>
    <body id="page-top" >
        <nav dir="auto" class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <h1 style="color: brown;">market</h1>
                <div class="heeb" id="">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="my.php">الصفحه الرئسيه</a></li>
                        <li class="nav-item"><a class="nav-link" href="mont.php">المنتجات</a></li>
                        <li class="nav-item"><a class="nav-link" href="test.php">اضافة منتاج</a></li>
                        <li class="nav-item"><a class="nav-link" href="uot.php">تسجيل الخروج</a></li>
                        <li class="nav-item"><a class="nav-link" href="#foo">تصالا بنا</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="con">
            <div class="roww">
            <?php
            $sql="select * from `items` GROUP BY name";
            
            $ret=mysqli_query($conn, $sql ,);

            while($rest=mysqli_fetch_assoc($ret)){
                echo '<div class="col">
                <div class="mor" >
                <center  ><h3> النوع: <b> '.$rest['name'].'</b></h3></center>
                <img class="" src="img/'.$rest['img'].'" alt="...">
                <p class="sp" styles="margin-top: 0px; margin-left: 0px;"> '.$rest['descrp'].'</p>
                </div>
                
                <a class="mz" type="button" href="bey.php">شراء</a>
                </div>
            ';
            
            ;
            }
            ?>
                
            </div>
            
        </div>
        </div>
             <!-- Footer-->
       <footer class="footer py-4" id="foo">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start"> &copy; Your Website 2021</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">instagram</a>
                        <a class="link-dark text-decoration-none" href="#!">facebook</a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>