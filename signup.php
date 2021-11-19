
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="styles/SignUp.css">
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
                    <h2>Sign Up</h2>
                    <h3>Create your account here</h3>
                </div>
                <div class="formulir">
                    <form action="" method="POST">
                        <input type="text" name="email" placeholder="email" autofocus = "off" value="">
                        <input type="text" name="username" placeholder="username" autofocus = "off" value="">
                        <input type="password" name="password" placeholder="password" autofocus = "off" value="">
                        
                    
                        </div>
                        <div class="btnSignUp">
                            <button type="submit" name="submit" id="submit">SignUp</button>
                        </div>
                        <div class="btnLogin">
                            <p>have an account? <a href="login.php">Log in</a> here</p>
                        </div>
                    </form>
            </div>
            <div class="kotak-kanan">
                <img src="imgOno/dunia.svg" alt="dunia">
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/891b41940f.js%22%3E"></script>
</body>
</html>

<?php 
    //Process the Value from Form and Save it in Database

    //Check whether the submit button is clicked or not
    include('koneksi.php');
    if(isset($_POST['submit']))
    {
        // Button Clicked
        //echo "Button Clicked";

        //1. Get the Data from form
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = md5($_POST['password']); //Password Encryption with MD5

        //2. SQL Query to Save the data into database
        $sql = "INSERT INTO tbl_user SET 
            email='$email',
            username='$username',
            password='$password'
        ";
 
        //3. Executing Query and Saving Data into Datbase
        $res = mysqli_query($conn, $sql) or die(mysqli_error());

        //4. Check whether the (Query is Executed) data is inserted or not and display appropriate message
        if($res==TRUE)
        {
            //Data Inserted
            //echo "Data Inserted";
            //Create a Session Variable to Display Message
            // $_SESSION['add'] = "<div class='success'>user Added Successfully.</div>";
            //Redirect Page to Manage Admin
            header("location:".SITEURL.'login.php');
        }
        else
        {
            //FAiled to Insert DAta
            //echo "Faile to Insert Data";
            //Create a Session Variable to Display Message
            // $_SESSION['add'] = "<div class='error'>Failed to Add user.</div>";
            //Redirect Page to Add Admin
            header("location:".SITEURL.'signup.php');
        }

    }
    
?>