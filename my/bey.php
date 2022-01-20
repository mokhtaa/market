 <?php
include 'conn.php';
?> 
<!DOCTYPE html>
<html dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="الوصف"  >
        <title>markta</title>
        <!-- css -->
<link href="css/bey1.css" rel="stylesheet">
    </head>
    
        <body id="page-top" >
            <nav dir="auto" class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
                <div class="container">
                    <h1 style="color: brown;">market</h1>
                    <div class="heeb" id="">
                        <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="my.php">الصفحه الرئسيه</a></li>
                            <li class="nav-item"><a class="nav-link" href="sign.php">تسجيل</a></li>
                            <li class="nav-item"><a class="nav-link" href="uot.php">تسجيل الخروج</a></li>
                            <li class="nav-item"><a class="nav-link" href="#foo">تصالا بنا</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <form action="" method="post">
            <div class="narmal">
                <label>الاسم</label>
                <input type="text" name="name"> <br><br>
                <label>رقم البطاقه</label>
                <input type="datetime" name="nam"><br><br>
                <label>انتهاء الصلاحيه</label>
                <input type="datetime" name="ter"><br><br>
                <label>csv</label>
                <input type="datetime" name="csv"><br><br>
<label>الكميه</label>
<input type="number" name="na"> <br><br>
<input class="nav-link" type="submit" value=" شراء" name="bay" id="ac">  </input>
            </div>
            <?php
                         if(isset($_POST["bay"])){
                            
                            $name=$_POST["name"];
                            $nam=$_POST["nam"];
                            $ter=$_POST["ter"];
                            $csv=$_POST["csv"];
                            $na=$_POST["na"];
                            if($csv==$csv){
                            $sql= "insert into order1(name,namb,ter,csv,cam)values('$name','$nam','$ter','$csv','$na')";
                            $ret=mysqli_query($conn,$sql);
                            if($ret){
                                echo'<div clacc="zz"> <p> تمت العمليه بنجاح</p><div>';
                            }
                            else{
                                echo "ارجاء اعادة المحوله";
                            }
                        }
                        }
                    
                    
                    
                    ?>
                </form>
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