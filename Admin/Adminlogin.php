<?php
session_start();
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
    $username = $_POST["username"];
    $password = $_POST["password"]; 
 

     $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "farmers_hub";

    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

     if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

     $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
         header("Location: AdminDashboard.php");
        exit();
    } else {
         echo "<script>alert('Invalid username or password');</script>";
    }

     $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Farmers Online Hub</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
      <!-- style css -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <style>
     body {
    background-image: url('images/bag.webp');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;

}
     
#logreg-forms {
    background-image: url('images/banner.webp');
    background-size: cover;
    background-position-y: center;
    background-repeat: no-repeat;
    width: 412px;
    margin: 10vh auto;
    background-color: #f3f3f3;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
    transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
     border-radius: 40px;
}
#logreg-forms form {
    width: 100%;
    max-width: 410px;
    padding: 15px;
    margin: auto;
}
#logreg-forms .form-control {
    position: relative;
    box-sizing: border-box;
    height: auto;
    padding: 10px;
    font-size: 16px;
} 
 .btn1[value="Submit"] {
    margin-left: 20px;
    background-color: #4CAF50;
    color: white;
}

 .btn1[value="Reset"] {
    margin-right: 20px;
    background-color: #FF5733;
    color: white;
}
 
.btn1:hover {
    background-color: gray;  
    color: white;
}    
 
</style>
 
</head>
<!-- body -->

<body class="main-layout ">
    
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">

            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.php"><img src="images/logo.png" alt="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9" > 
                       <div class="limit-box">
                                        <nav class="main-menu">
                                            <ul class="menu-area-main">
                                                <li> <a href="../index.php">Home</a> </li>
                                                <li> <a href="../index.php">About</a> </li>
                                                <li><a href="../index.php">Products</a></li>
                                                <li><a href="../index.php">Testimonial</a></li>
                                                <li><a href="../index.php">Contact Us</a></li>
                                                 
                                            </ul>

                                        </nav>
                                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 location_icon_bottum">
                       <div class="row">
                            <div class="col-md-8 ">
                                                       <div class="limit-box">

                                <div class="menu-area">
                                    <div class="location_icon_bottum_tt">
                                        <nav class="main-menu">
                            <ul>
                                <li><a href="Adminlogin.php"><i class="fas fa-user">  Admin Login</i></a></li>
                                
                                <li><a href="../index.php "><i class="fas fa-user"> Go Back</i></a></li>
                            </ul>
                        </nav>
                        </div>
                                    </div>
                                </div>

                            </div>
                            
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
    <!-- end header -->
    <section class="vh-100">
 <div id="logreg-forms">
    <form class="form-signin" method="post">
        <h1 class="h3 mb-3 font-weight-normal" style="text-align: center; color:white;">Sign in</h1>
         
        <input type="text" id="username" class="form-control" name="username" placeholder="Enter Username " required />
        <br> 
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Enter Password" maxlength="12" minlength="0" required />
        
        <div class="row">
            <input type="submit" value="Submit" class="btn1">
            <input type="reset" value="Reset" class="btn1">
        </div>
        <br><a href="AdminForgot.php" id="forgot_pswd" style="color:white; font: bold;">Forgot password?</a>
        
    </form>
     
    <br />
</div> 
</section>
     
</body>

</html>