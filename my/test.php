<?php
include "conn.php";
// session_start()
// if($_SESSION['user']!=''){
//     $username=$_SESSION['user'];
//     $sql='select username from user whers username="$username"';
//     $ret=mysqli_query($conn, $sql);
//     while($res=mysqli_fetch_assoc($ret)){
//         $name=$res['username'];
//     }
// }else{
//     header('Location:test1.php');
// }

?>

<!DOCTYPE html>
<html dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="الوصف"  >
        <title>markta</title>
        <!-- css -->
<link href="css/styless.css" rel="stylesheet">
    </head>
    <body id="page-top" >
        <nav dir="auto" class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <h1 style="color: brown;">market</h1>
                <div class="heeb" id="">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="my.php">الصفحه الرئسيه</a></li>
                    <li class="nav-item"><a class="nav-link" href="mont.php">المنتجات</a></li>
                        <li class="nav-item"><a class="nav-link" href="test.php">اضافة منتاج</a></li>>
                        <li class="nav-item"><a class="nav-link" href="uot.php">تسجيل الخروج</a></li>
                        <li class="nav-item"><a class="nav-link" href="#foo">تصالا بنا</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead">
        
            <form action="" method="post" enctype='multipart/form-data'  >
                <nav>
                <div class="nab"><br>
                    <label>اسم المنتج</label>
                    <input type="text" name= "mname" placeholder="اسم المنتج">
                </div>
                <div class="nab"> <br><br>
                <label for="">السعر</label>
                <input type="text" name= "mpric" placeholder="ادخل السعر">
                </div>
                <div class="nab"><br><br>
                    <label for="">الوصف</label>
                    <textarea class="" name="mdes" placeholder="الوصف"></textarea>
                    </div>
                    <div class="nab"><br>
                        <label>الصوره</label>
                        <input type="file" name="fileto" >
                    </div>
                    <input type="submit" name="add" value="اضف" >
                    <?php
                    if(isset($_POST["add"])){
                        $uploaddir='img/';
                        $uploadfile=$uploaddir . basename($_FILES["fileto"] ["name"]);
                        if(move_uploaded_file($_FILES["fileto"]["tmp_name"], $uploadfile)){
                            $name=$_POST["mname"];
                            $price=$_POST["mpric"];
                            $des=$_POST["mdes"];
                            $fileto=$_FILES["fileto"]["name"];
                            $sql= "insert into items(name,price,descrp,img)values('$name','$price','$des','$fileto')";
                            $ret=mysqli_query($conn,$sql);
                            if($ret){
                                echo'<p>تمت الاضافه</p>';
                            }
                        }
                        else{
                            echo 'erro';
                        }
                    }
                    ?>
            </form>
            </nav>
        </header>
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