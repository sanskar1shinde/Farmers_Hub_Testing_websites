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
    background-position-y: center;
    background-repeat: no-repeat;

}

.login_form {
    margin-top: 3rem;
    height: cover;
    width: 500px;
    background: rgb(255, 255, 255);
    background: linear-gradient(180deg, rgba(255, 255, 255, 1) 23%, rgba(247, 255, 238, 1) 81%, rgba(242, 255, 225, 1) 100%);
    border-radius: 0 0 50px 0;
    padding: 60px 50px;
    box-shadow: 5px 5px 10px #4d4d4d30, -5px -5px 10px #45454530;
}

.login_form h5 {
    text-align: center;
    /*  background: url('images/bag.webp');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;  */
    color: #00885a;
    font-size: 40px;
    letter-spacing: 3px;
    font-weight: 600;
    text-transform: uppercase;
    margin-bottom: 10px;
}

.login_form .form-control {
    background-color: rgba(255, 255, 255, 0) !important;
    border: 0.5px solid #00885b6e;
    /* border-radius: 0 0 12px 0;
    border-top: none;
    border-right: none;
    border-left: none; */
    border-radius: 18px;
}
 
.login_email_input label,
.login_password_input label {
    color: #00885a;
    font-weight: 600;
}

.login_email_input,
.login_password_input {
    margin-bottom: 12px;
}
  
.title{
    text-align: right;
    padding-top: 30px;
    padding-right: 40px;
}
.title h4{
    margin-top: 3rem;
    font-size:60px;
    opacity: 0.6;
    color: #ffffff;
}
.title h5{
    font-size:20px;
    opacity: 0.8;
    color: #ffffff;
}
 
.btn1 {
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    font-size: 16px;
    border-radius: 5px;
    margin: 5px;
}

.btn1[value="Update"] {
    background-color: green;
    color: white;
}

.btn1[value="Cancel"] {
    background-color: red;
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
                                    <a href="index.html"><img src="images/logo.png" alt="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9" > 
                       <div class="limit-box">
                                        <nav class="main-menu">
                                            <ul class="menu-area-main">
                                                <li> <a href="../index.html">Home</a> </li>
                                                <li> <a href="../index.html">About</a> </li>
                                                <li><a href="../index.html">Products</a></li>
                                                <li><a href="../index.html">Testimonial</a></li>
                                                <li><a href="../index.html">Contact Us</a></li>
                                                 
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
                                <li><a href="Farmerlogin.php"><i class="fas fa-user">  Farmer Login</i></a></li>
                               
                                <li><a href="Farmerlogin.php "><i class="fas fa-user"> Go Back</i></a></li>
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
   <div class="container login_page">
    <div class="row">
        <div class="col-md-4">
            <form id="updatePasswordForm">
                <div class="login_form">
                    <h5>Update Password</h5>

                    <div class="login_email_input">
                        <label for="uname" class="form-label">Enter Username</label>
                        <input type="text" class="form-control" name="uname" id="uname" placeholder="">
                    </div>

                    <div class="login_password_input">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="passwordInput" maxlength="12" minlength="8" 
                            placeholder="">
                    </div>
                    <div class="login_password_input">
                        <label for="npassword" class="form-label">Retype Password</label>
                        <input type="password" class="form-control" name="npassword" id="npasswordInput" maxlength="12" minlength="8" 
                            placeholder="">
                    </div>

                    <div class="row">
                        <input type="submit" class="btn1" value="Update">
                        <input type="reset" class="btn1" value="Cancel" id="cancelButton">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-8">
            <div class="title">
                <h4>Farmers Hub</h4>
                <h5>Your Market Your Place</h5>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById("updatePasswordForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent the form from submitting

        var uname = document.getElementById("uname").value;
        var password = document.getElementById("passwordInput").value;
        var npassword = document.getElementById("npasswordInput").value;

        if (uname === "" || password === "" || npassword === "") {
            alert("All fields must be filled out.");
        } else if (password !== npassword) {
            alert("Passwords do not match.");
        } else {
            alert("Form submitted successfully!");
            // You can add code here to submit the form to the server if needed
        }
    });

    document.getElementById("cancelButton").addEventListener("click", function() {
        alert("Cancelled.");
    });
</script>

</section>
     
  
</body>

</html>