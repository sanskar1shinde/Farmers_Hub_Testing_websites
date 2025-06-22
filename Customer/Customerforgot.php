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
    body{
        background-image: url(images/bag.jpg);
        background-position: center;
        background-size: cover;
    }
.main-content{
    width: 50%;
    border-radius: 20px;
    box-shadow: 0 5px 5px rgba(0,0,0,.4);
    margin: 5em auto;
    display: flex;
}
.company__info{
    background-image: url(images/cust.jpg);
    background-size: 200px 500px;
    background-position: center;
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: #fff;
}
.fa-android{
    font-size:3em;
}
@media screen and (max-width: 640px) {
    .main-content{width: 90%;}
    .company__info{
        display: none;
    }
    .login_form{
        border-top-left-radius:20px;
        border-bottom-left-radius:20px;
    }
}
@media screen and (min-width: 642px) and (max-width:800px){
    .main-content{width: 70%;}
}
.row > h2{
    color:#008080;
}
.login_form{
    background-color: #fff;
    border-top-right-radius:20px;
    border-bottom-right-radius:20px;
    border-top:1px solid #ccc;
    border-right:1px solid #ccc;
}
form{
    padding: 0 2em;
}
.form__input{
    width: 100%;
    border:0px solid transparent;
    border-radius: 0;
    border-bottom: 1px solid #aaa;
    padding: 1em .5em .5em;
    padding-left: 2em;
    outline:none;
    margin:1.5em auto;
    transition: all .5s ease;
}
.form__input:focus{
     margin-right: 5px;
    border-bottom-color: #008080;
    box-shadow: 0 0 5px rgba(0,80,80,.4); 
    border-radius: 4px;
}
.btn{
    transition: all .5s ease;
    width: 70%;
    border-radius: 30px;
    color:#008080;
    font-weight: 800;
    background-color: #fff;
    border: 1px solid #008080;
    margin-top: 1.5em;
    margin-bottom: 1em;
}
.btn:hover, .btn:focus{
    background-color: #008080;
    color:#fff;
}
.row input[type="checkbox"] {
    width: 20px; 
    height: 20px;  
    margin-right: 10px;  
    vertical-align: middle;  
}
 .row label[for="remember_me"] {
    font-size: 16px;  
    vertical-align: middle;  
}
.row p {
    font-size: 16px; 
    font-weight: bold; 
    margin-bottom: 1;  
}

 .row a {
    font-size: 16px;  
    color: #007bff;  
    text-decoration: none;  
}
 
.row a:hover {
    text-decoration: underline;  
}
.text_label {
    margin-bottom: -30px;
}
 
.btn1 {
    display: flex;
    flex-wrap: wrap;
    padding: 10px 20px;
    margin-right: 10px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    border-radius: 30px;  
    transition: background-color 0.3s ease, color 0.3s ease; 
}

 .btn1[value="Update"] {
    background-color: #4CAF50;
    color: white;
}

 .btn1[value="Cancel"] {
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
                                <li><a href="Customerlogin.php"><i class="fas fa-user"> Customer Login</i></a></li>
     <li><a href="../index.html "><i class="fas fa-user"> Go Back</i></a></li>
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
    
 
<body>
    <!-- Main Content -->
    <div class="container-fluid">
        <div class="row main-content bg-success text-center">
            <div class="col-md-4 text-center company__info">
                <span class="company__logo"><h2><span class="fa fa-android"></span></h2></span>
                 
            </div>
            <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
                <div class="container-fluid">
                    <div class="row">
                        <h2>Update Password</h2>
                    </div>
                    <div class="row">
                        <form control="" class="form-group" id="updateForm">
                            <div class="row">
                                <label class="text_label" for="text">Enter Username:</label>
                                <input type="text" name="username" id="username" class="form__input"  >
                            </div>
                            <div class="row">
                                <label class="text_label" for="text">Enter Password:</label>
                                <input type="password" name="password" id="password" class="form__input" maxlength="12" minlength="8"  >
                            </div>
                            <div class="row">
                                <label class="text_label" for="text">Confirm Password:</label>
                                <input type="password" name="npassword" id="npassword" class="form__input" maxlength="12" minlength="8"  >
                            <div class="row">
                                <input type="submit" value="Update" class="btn1">
                                <input type="button" value="Cancel" class="btn1" id="cancelButton">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <script>
    document.addEventListener("DOMContentLoaded", function () {
        const updateForm = document.getElementById("updateForm");
        const cancelButton = document.getElementById("cancelButton");

        cancelButton.addEventListener("click", function (event) {
            event.preventDefault();
            alert("Update process cancelled");
        });

        updateForm.addEventListener("submit", function (event) {
            const password = document.getElementById("password").value;
            const confirmPassword = document.getElementById("npassword").value;

            if (password !== confirmPassword) {
                event.preventDefault();
                alert("Passwords do not match");
            } else {
                const username = document.getElementById("username").value;
                
                if (!username || !password || !confirmPassword) {
                    event.preventDefault();
                    alert("All fields are required");
                } else {
                    alert("Form submitted successfully");
                }
            }
        });
    });
</script>
 
</body>
</section>
    
</body>

</html>