<?php 

require('../connect.php');
if(isset($_POST['reg'])){
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$gen = $_POST['gen'];
$pnum = $_POST['pnum'];
$image = $_FILES['image']['name'];
$tmp_name =  $_FILES['image']['tmp_name'];
$folder = "assets/img";
$target = $folder.basename($image);
move_uploaded_file($tmp_name,$target);
$query = "INSERT INTO `register`(`name`, `email`, `pass`, `gen`, `pnum`, `image`, `dob`, `nic`, `city`, `country_id`, `des`) VALUES ('$name','$email','$pass','$gen','$pnum','$target','','','','1','')";
$res = mysqli_query($con ,$query);
if($res){
    header('location:login.php');
}
else{
    echo "<script>alert('failed')</script>";
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
            *{
                box-sizing: border-box;
                margin: 0px;
                padding: 0px;
            }
            body{
                background-color:black;
            }
            .f{
                background-color:white;
                border-radius:10px;
                padding:20px;
                margin:0px 0px 50px 50px;
                
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
    <center><h1 style="font-family:Ariel;color:white;margin:20px">USER REGISTER FORM</h1></center>
 <div class="container f">
  
    <form action="register.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input
                type="text"
                class="form-control"
                name="name"
                id=""
                aria-describedby="helpId"
                placeholder="Enter your Name"
            />
        </div>
        
<div class="mb-3">
    <label for="" class="form-label">Email</label>
    <input
    required
        type="email"
        class="form-control"
        name="email"
        id=""
        aria-describedby="emailHelpId"
        placeholder="abc@mail.com"
    />
  
</div>

<div class="mb-3">
    <label for="" class="form-label">Password</label>
    <input
    required
        type="password"
        class="form-control"
        name="pass"
        id=""
        placeholder=""
    />
</div>
<div class="form-check">
    <input class="form-check-input" type="radio" name="gen" required value="Male" />
    <label class="form-check-label" for=""> Male </label>
</div>
<div class="form-check">
    <input
        class="form-check-input"
        type="radio"
        name="gen" required
 
      value="Female"
    />
    <label class="form-check-label" for="">
        Female
    </label>
</div>
<div class="mb-3">
    <label for="" class="form-label">Phone Number</label>
    <input
        type="number"
        class="form-control"
        name="pnum"
        id=""
        required
        aria-describedby="helpId"
        placeholder="Enter your Phone Number"
    />
</div>
<div class="mb-3">
    <label for="" class="form-label">Upload Your Image</label>
    <input
        type="file"
        class="form-control"
        name="image"
        required
        accept="image/*"
        placeholder=""
        aria-describedby="fileHelpId"
    />
</div>

<input type="submit" value="Register" name="reg" class="btn" style="background-color:black;color:white;margin-bottom:10px;">
<br>
<a href="login.php " class="link"  >Already have an account <span style="color:brown;"> Login</span></a>

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
