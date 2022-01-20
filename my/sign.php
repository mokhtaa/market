<?php
include 'conn.php';
session_start();
if (isset($_SESSION['user'])){
    header('Location:my.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title> market </title>
        <meta charset="UTF-8">
        <meta name="description" content="my web yor all">
        <link rel="stylesheet" href="css/sing.css">
        
    </head>
    <body id="page-top">
        <!-- <header>
            <div class="conta" >
                <a href="#" class="logo">
                     <img src="css/R.png" alt="logo">
                </a>
                </header> -->
                <nav dir="auto" class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
                    <div class="container">
                        <h1 style="color: brown;">market</h1>
                        <div class="heeb" id="">
                            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                                <li class="nav-item"><a class="nav-link" href="test1.php">الصفحه الرئسيه</a></li>
                                <li class="nav-item"><a class="nav-link" href="sign.php">تسجيل</a></li>
                                <li class="nav-item"><a class="nav-link" href="login.php">تسجيل دخول</a></li>
                                <li class="nav-item"><a class="nav-link" href="#foo">تصالا بنا</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <header class="masthead">
                    <form action="" method="post">
                        <!-- <div class="login">
                            <p>login</p>
                        </div> -->
                        <div class="abb">
                        <div class="name">
                            <label>user</label>
                            <input type="text" required placeholder="username" name="user"> 
                        </div>
                        <br>
                        <br>
                        <div>
                        
                            <label>pass</label>
                            <input type="password" required placeholder="pass" name="pass" minlength="10" maxlength="20">
                        </div>
                        <br>
                        <br>
                
                        <!-- <div class="pass">
                        <label>password</label>
                        <input type="password" required placeholder="pass" name="pass" minlength="10" maxlength="20">
                        </div> -->
                        <br>
                        <br>
                        
                        <input type="submit" value="login" class="mm" name="log" >
                        </div>
                        <?php
                        if(isset($_POST['log'])){
                            $user=$_POST['user'];
                            $pass=$_POST['pass'];
                            $sql="select * from user where username='$user' and pass='$pass'";
                            $ret=mysqli_query($conn,$sql);
                            while($rest=mysqli_fetch_assoc($ret)){
                                session_start();
                                $_SESSION['user']=$user;
                                    echo '<script>window.location.href="my.php"</script>';
                                echo "تم";
                            }
                        
                        }
                        
                        ?>
                        <div class="landing">
                        </div>
                        <div class="img">
                        </div>
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
                </header>