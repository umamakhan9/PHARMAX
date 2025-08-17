<?php 
session_start();
require('../connect.php');
if(isset($_POST['log'])){
    $email  = $_POST['email'];
    $pass  = $_POST['pass'];
echo   $query = "SELECT * FROM register where email = '$email' and pass = $pass ";
   $res =  mysqli_query($con,$query);
    $data = mysqli_fetch_assoc($res);
    if($data){
        $_SESSION['id']  = $data['id'];
        header('location:dashboard.php');
    }
}
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <style>
            body{
                background-color:black;
            }
            .f{
                background-color:white;
                border-radius:10px;
                padding:20px;
                margin-top:50px
            }
            @media (max-width:768px) {
                .f{
                margin: 18px;
                width: auto;
            }
            }
            .link{
                text-decoration: none;
                color: gray;
            }
        </style>
    </head>

    <body>
    <center><h1 style="font-family:Ariel;color:white;margin:20px">ADMIN LOGIN FORM</h1></center>
 <div class="container f">
  
    <form action="login.php" method="post">
<div class="mb-3">
    <label for="" class="form-label">Email</label>
    <input
        type="email"
        class="form-control"
        name="email"
        id=""
        required
        aria-describedby="emailHelpId"
        placeholder="abc@mail.com"
    />
    
</div>

<div class="mb-3">
    <label for="" class="form-label">Password</label>
    <input
        type="password"
        class="form-control"
        name="pass"
        id=""
        required
        placeholder=""
    />
</div>
<input type="submit" value="Login" name="log" class="btn" style="background-color:black;color:white;margin-bottom:10px;">
<br>
<a href="register.php " class="link"  >Don't have an account <span style="color:brown;"> Sign-up</span></a>
    </form>
 </div>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
