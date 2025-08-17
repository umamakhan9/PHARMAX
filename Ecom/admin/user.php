<?php
require('../connect.php'); 
session_start();
if(isset($_SESSION['id'])){
  $id = $_SESSION['id'];
if(isset($_GET['logout'])){
  session_destroy();
  header('location:login.php');
}
if(isset($_SESSION['id'])){
  $id = $_SESSION['id'];
  
}
if(isset($_POST['save'])){
  $id =  $_POST['id'];
 $name = $_POST['name'];
 $email = $_POST['email'];
 $pass = $_POST['pass'];
 $gen = $_POST['gen'];
 $pnum = $_POST['pnum'];
 $nic = $_POST['nic'];
 $city = $_POST['city'];
 $count_id = $_POST['country'];
 $des = $_POST['des'];
 $dob = $_POST['dob'];
  $image = $_POST['image'];

 $query = "UPDATE `register` SET `name`='$name',`email`='$email',`pass`='$pass',`gen`='$gen',`pnum`='$pnum',`image`='$image',`dob`='$dob',`nic`='$nic',`city`='$city',`country_id`='$count_id',`des`='$des' WHERE id = '$id'";
  $res = mysqli_query($con ,$query);
  
}
if(isset($_POST['profile'])){
  $id = $_POST['id'];
  $image = $_FILES['profile']['name'];
$tmp_name =  $_FILES['profile']['tmp_name'];
$folder = "assets/img";
$target = $folder.basename($image);
move_uploaded_file($tmp_name,$target);
$query = "UPDATE `register` SET image = '$target' WHERE id = '$id'";
$res = mysqli_query($con ,$query);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    Black Dashboard by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />

</head>

<body class="">
  <div class="wrapper">
  <?php require('components/sidebar.php')?>
    <div class="main-panel">
      <!-- Navbar -->
      <?php require('components/navbar.php')?>
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Edit Profile</h5>
              </div>
              <div class="card-body">
                <form action="user.php" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-5 pr-md-1">
                      <div class="form-group">
                        <?php 
                        $query = "SELECT * FROM register where id = $id";
                        $res =  mysqli_query($con,$query);
                        $data = mysqli_fetch_assoc($res);
                        ?>
                        <input type="hidden" name="id" value=" <?php echo $data['id']?>">
                        <input type="hidden" name="pass" value=" <?php echo $data['pass']?>">
                   
                        <label>Name</label>
                  
                        <input type="text" class="form-control" name="name" placeholder="Company" value="<?php echo $data['name']?>">
                        <input type="hidden" class="form-control" name="image"  value="<?php echo $data['image']?>">


                     
                      </div>
                    </div>
                    <div class="col-md-3 px-md-1">
                      <div class="form-group">
                        <label>Gender</label>
                        <input type="text" name="gen" value="<?php echo $data['gen']?>" class="form-control" placeholder="Username">
                      </div>
                    </div>
                    <div class="col-md-4 pl-md-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" placeholder="@email.com"  name="email" value="<?php echo $data['email']?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-md-1">
                      <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" class="form-control" name="pnum" placeholder="Company"  value="<?php echo $data['pnum']?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-md-1">
                      <div class="form-group">
                        <label>Nic</label>
                        <input type="text" class="form-control" value="<?php echo $data['nic'] ?>" name="nic" placeholder="Nic" >
                      </div>
                    </div>
                  </div>
                 
                  <div class="row">
                    <div class="col-md-4 pr-md-1">
                      <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control" value="<?php echo $data['city'] ?>" placeholder="City" name="city">
                      </div>
                    </div>
                    <div class="col-md-4 px-md-1">
                      <div class="form-group">
                        <label>Country</label>

                        <div class="mb-3">
                        
                          <select
                            class="form-control form-select-lg"
                            name="country"
                            id=""
                            <?php echo $datas['CountryName'] ?>
                          >
                     
                        <?php
                        
                        $query = "SELECT * FROM country ";
                        $res = mysqli_query($con,$query);
                       while( $datas =  mysqli_fetch_assoc($res))
                       
                       {
                        ?>
                      
                            <option style="color:black;" value="<?php echo $datas ['count_id']?>"><?php echo $datas['country']?>
                              
                          </option>
                           <?php }
                           if($datas['country']){
                            echo  $datas['country'];
                           }
                           ?>
                        
                          </select>
                          
                        </div>
                        
                        <!-- <input type="text" class="form-control" placeholder="Country" value="Andrew"> -->
                      </div>
                    </div>
                    <div class="col-md-4 pl-md-1">
                      <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="date" class="form-control" name="dob" value="<?php echo $data['dob'] ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-8">
                      <div class="form-group">
                        <label>About Me</label>
                        <textarea rows="4" cols="80" value="" class="form-control" placeholder="Here can be your description" name="des"><?php echo $data['des'] ?></textarea>
                     
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                <button type="submit" class="btn " name="save">Save</button>
              </div>
              </form>
              </div>
          
            </div>
            
            
          </div>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="card-body">
                <p class="card-text">
                  <div class="author">
                    <div class="block block-one"></div>
                    <div class="block block-two"></div>
                    <div class="block block-three"></div>
                    <div class="block block-four"></div>
                    <a href="javascript:void(0)">
                      <img class="avatar" src="<?php echo $data['image']?>" alt="...">
                      <h5 class="title"><?php echo $data['name'] ?></h5>
                    </a>
                    <p class="description mt-3">
                    <?php echo $data['email'] ?>
                    </p>
                  </div>
                </p>
                <div class="card-descriptions mt-3" style="text-align:center;"  >
                <?php echo $data['des'] ?>
                </div>
              </div>
              <div class="card-footer">
                <form action="user.php" method="post" enctype="multipart/form-data">
                <?php 
                        $query = "SELECT * FROM register where id = $id";
                        $res =  mysqli_query($con,$query);
                        $data = mysqli_fetch_assoc($res);
                        ?>
                        <input type="hidden" name="id" value=" <?php echo $data['id']?>">
                        <br>
            <input type="file" name="profile" id="" class="form-control btn">
            <center>
            <button type="submit" class="btn " style="background-color:#6B92AC" name="profile">Save</button>
            </center>
          </form>
                <div class="button-container">
                  <button href="javascript:void(0)" class="btn btn-icon btn-round btn-facebook">
                    <i class="fab fa-facebook"></i>
                  </button>
                  <button href="javascript:void(0)" class="btn btn-icon btn-round btn-twitter">
                    <i class="fab fa-twitter"></i>
                  </button>
                  <button href="javascript:void(0)" class="btn btn-icon btn-round btn-google">
                    <i class="fab fa-google-plus"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php require('components/footer.php')?>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Background</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger background-color">
            <div class="badge-colors text-center">
              <span class="badge filter badge-primary active" data-color="primary"></span>
              <span class="badge filter badge-info" data-color="blue"></span>
              <span class="badge filter badge-success" data-color="green"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="adjustments-line text-center color-change">
          <span class="color-label">LIGHT MODE</span>
          <span class="badge light-badge mr-2"></span>
          <span class="badge dark-badge ml-2"></span>
          <span class="color-label">DARK MODE</span>
        </li>
        <li class="button-container">
          <a href="https://www.creative-tim.com/product/black-dashboard" target="_blank" class="btn btn-primary btn-block btn-round">Download Now</a>
          <a href="https://demos.creative-tim.com/black-dashboard/docs/1.0/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block btn-round">
            Documentation
          </a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-info"><i class="fab fa-twitter"></i> &middot; 45</button>
          <button id="facebook" class="btn btn-round btn-info"><i class="fab fa-facebook-f"></i> &middot; 50</button>
          <br>
          <br>
          <a class="github-button" href="https://github.com/creativetimofficial/black-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
        </li>
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "black-dashboard-free"
      });
  </script>
</body>

</html>

<?php 
}
else{
  header('location:login.php');
}
?>