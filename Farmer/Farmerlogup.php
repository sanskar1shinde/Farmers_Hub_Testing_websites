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
.forget_password{
    color: #00885a;
    font-size: 14px;
}
.forget_password a{
    text-decoration: none;
    color: #00885a;
}
.forget_password span{
    float: left;
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

.login_button {
    width: 100%;
    text-align: center;
    margin-top: 16px;
}

.login_button .login_button {
    width: 100%;
    border-radius: 26px;
    font-size: 18px;
    padding: 6px 26px;
    background-color: #00885a;
    color: #ffffff;
}
.login_button .login_button:hover {
    background-color: #026141;
    color: #ffffff;
}

.user_buttons{
    margin-bottom: 40px !important;
    /* border-bottom: 1px solid #c9ff7c; */
}
.user_buttons div .user_button{
    padding: 0 auto;
    background-color: #ffffff;
    color: #00885a;
    
}
.user_login, .admin_login{
    display: none;
}
.active{
    display: block !important;
}
.active_button{
    border-bottom: 1px solid #00885b8f !important;
    /* border-radius: 0 !important; */
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
                               
                                <li><a href="Farmerlogin.php"><i class="fas fa-user"> Go Back</i></a></li>
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
                <form>
                <div class="login_form">
                    <h5>Registration </h5>
                     
                    <div class="user_login active" id="div1">
                        <div class="login_email_input">
                            <label for="name" class="form-label">Enter Full Name</label>
                            <input type="name" class="form-control" name="name" id="" placeholder="" required>
                        </div>
                         
                        <div class="login_email_input">
                            <label for="uname" class="form-label">Enter Username</label>
                            <input type="uname" class="form-control" name="username" id="" placeholder="" required>
                        </div>
                        <div class="login_email_input">
                            <label for="pnumber" class="form-label">Phone no</label>
                            <input type="pnumber" class="form-control" name="phoneno" id="" placeholder="" maxlength="10" minlength="10" required>
                        </div><div class="login_email_input">
                            <label for="email" class="form-label">Enter Email Id</label>
                            <input type="email" class="form-control" name="email" id="" placeholder="" required>
                        </div>
                         <div class="login_email_input">
                            <label for="age" class="form-label">Enter Your Age</label>
                            <input type="age" class="form-control" name="age" id="" placeholder="" required>
                        </div>
                         <div class="login_email_input">
                            <label for="address" class="form-label">Enter Your Address</label>
                            <input type="address" class="form-control" name="address" id="" placeholder=""  required>
                        </div>
                        <div class="login_password_input">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="passwordInput"
                                placeholder="" maxlength="12" minlength="8" required>
                        </div>
                        <div class="login_password_input">
                            <label for="password" class="form-label">Retype Password</label>
                            <input type="password" class="form-control" name="npassword" id="passwordInput"
                                placeholder="" maxlength="12" minlength="8" required>
                        </div>
                        <div class="forget_password">
                            <input type="checkbox" id="check" required> I accept the terms and conditions !
                             
                            <span><a href="Farmerlogin.php">I have an Alredy account !</a></span>
                        </div>

                        <div class="login_button">
                            <button class="btn login_button">Logup</button>
                        </div>
                    </div>
 
                </div>
            </form>
            </div>
            <div class="col-md-8">
                <div class="title">
                    <h4>Farmers Hub</h4>
                    <h5>Your Market Your Place </h5>
                </div>
            </div>
        </div>
    </div>
</section>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");
    form.addEventListener("submit", function(event) {
        event.preventDefault();
        
        const name = form.querySelector("[name='name']").value;
        const uname = form.querySelector("[name='username']").value;
        const phoneno = form.querySelector("[name='phoneno']").value;
        const email = form.querySelector("[name='email']").value;
        const age = parseInt(form.querySelector("[name='age']").value);
        const address = form.querySelector("[name='address']").value;
        const password = form.querySelector("[name='password']").value;
        const npassword = form.querySelector("[name='npassword']").value;
        
         if (!/^[a-zA-Z ]+$/.test(name)) {
            alert("Name should contain only letters.");
            return;
        }
        
         else if (uname.trim() === "") {
            alert("Username must not be empty.");
            return;
        }
        
        else if (!/^[6-9]\d{9}$/.test(phoneno)) {
            alert("Phone number should start with a digit between 6 to 9 and have 10 digits.");
            return;
        }
        
         else if (!email.endsWith("@gmail.com")) {
            alert("Email should end with @gmail.com.");
            return;
        }
        
         else if (age < 19 || age > 100) {
            alert("Age should be between 19 and 100.");
            return;
        }
        
         else if (address.trim() === "") {
            alert("Address must not be empty.");
            return;
        }
        
         else if (password !== npassword) {
            alert("Passwords do not match.");
            return;
        }
        
         alert("Registration successful!");
        form.reset();
    });
});

    </script>
  
</body>

</html>