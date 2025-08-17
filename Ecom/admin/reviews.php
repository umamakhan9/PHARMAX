<?php 
session_start();
if(isset($_SESSION['id'])) {
  $id = $_SESSION['id'];
  if(isset($_GET['logout'])) {
    session_destroy();
    header('location:login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>
  <!-- CSS Links -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <link href="assets/demo/demo.css" rel="stylesheet" />
 
</head>

<body>
<div class="wrapper">
  <?php require('components/sidebar.php')?>
    <div class="main-panel">
      <!-- Navbar -->
      <?php require('components/navbar.php')?>
    <div class="content">
      <div class="row   text-center" >
        <?php 
        $query="SELECT * FROM `reviews` ";
        $result = mysqli_query($con,$query);
        while($data =mysqli_fetch_assoc($result)){
        ?>
      <div class="card  " style="width: 18rem;">
  <div class="card-body">
    <h4 class="card-title" style="color:black;"><?php echo $data['name']?></h>
    <br>
    <br>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $data['email']?></h6>
    <br>
    <p class="card-text"><?php echo $data['message']?></p>
  </div>

</div>
<?php } ?>

</div>
</div>
     
              </div>
      
      <?php require('components/footer.php')?>
</div>

  <!-- JS Scripts -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <script src="assets/js/black-dashboard.min.js?v=1.0.0"></script>
</body>
</html>
<?php } else { header('location:login.php'); } ?>
