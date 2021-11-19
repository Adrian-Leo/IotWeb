
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/login.css">
    <title>Login</title>
</head>
<body>
<div class="container">
        <div class="signup">
            <div class="kotak-kiri">
                <div class="logo">
                    <img src="imgOno/logo.png" alt="logo">
                    <h2>Special</h2>
                    <h2 class="huruf-kedua">Corp</h2>
                </div>
                <div class="judul">
                    <h2>Log In</h2>
                    <h3>Log in to continue</h3>
                
                </div>
                <div class="formulir">
                    <form action="" method="POST">
                        <input type="email" name="email" placeholder="email" id="email" autofocus = "off" value="">
                        <input type="password" name="password" placeholder="password" id="password" autofocus = "off" value="">   
                        </div>
                        <div class="btnLogin">
                            <button type="submit" name="submit" value="Login">LogIn</button>
                        </div>
                        <div class="btnSignUp">
                            <p>Doesn't have an account? <a href="signup.php">Sign Up</a> here</p>
                        </div>
                    </form>
                </div>
            <div class="kotak-kanan">
                <img src="imgOno/login.svg" alt="dunia">
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/891b41940f.js%22%3E"></script>
</body>
</html>


<?php
    include('koneksi.php');
  
    if(isset($_POST['submit']))
    {   
        
        //Process for Login
        //1. Get the Data from Login form
        // $username = $_POST['username'];
        // $password = md5($_POST['password']);
        $email = $_POST["email"];
        // $password = md5($_POST['password']);
        $raw_password = md5($_POST['password']);
        $password = mysqli_real_escape_string($conn, $raw_password);

        //2. SQL to check whether the user with username and password exists or not
        // $sql = "SELECT * FROM tbl_user WHERE email='$email' AND password='$password'";
        $sql = "SELECT * FROM tbl_user WHERE email='$email'AND password='$password'";

        //3. Execute the Query
        $res = mysqli_query($conn, $sql);

        //4. COunt rows to check whether the user exists or not
        $count = mysqli_num_rows($res);
        

        if($count===1)
        {

            // $row= mysqli_fetch_assoc($res);
            // header("location: http://localhost/iot-web/dashboard.php");
            
            // $_SESSION["login"] = true;
            header('location:'.SITEURL.'dashboard.php');
            // exit;
        
            //User AVailable and Login Success
            // $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
            // $_SESSION['email'] = $email; //TO check whether the user is logged in or not and logout will unset it

            //REdirect to HOme Page/Dashboard
           
        }
        // else
        // {
            //User not Available and Login FAil
            // $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match.</div>";
            //REdirect to HOme Page/Dashboard
            // header('location:'.SITEURL.'login.php');
            // header("location: login.php");
        $error=true;
        // }


    }



?>