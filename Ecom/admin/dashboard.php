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
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      color: white;
    }

    .overview-cards {
      color: white;
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      margin-bottom: 20px;
    }

    .card {
      flex: 1 1 calc(33.333% - 20px);
      background-color: #2C3A5B;
      border-radius: 10px;
      padding: 20px;
      color: white;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    }

    .card h4 {
      margin: 0;
      font-weight: 600;
      font-size: 18px;
      margin-bottom: 10px;
      color: white;

    }

    .card p {
      color: white;
      font-size: 24px;
      font-weight: 500;
    }

    .chart-section, .recent-activities, .quick-links {
      margin-bottom: 20px;
      background-color: #2C3A5B;
      padding: 20px;
      border-radius: 10px;
      color: white;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .recent-activities ul, .quick-links ul {
      list-style: none;
      padding: 0;
      
    }

    .recent-activities li, .quick-links li {
      padding: 10px 15px;
      background: #2E3C5B;
      margin-bottom: 10px;
      border-radius: 5px;
      color: #fff;
      display: flex;
      align-items: center;
    }

    .recent-activities li::before, .quick-links li::before {
      content: "\f0a4";
      font-family: 'Font Awesome 6 Free';
      font-weight: 900;
      margin-right: 10px;
      color: #f5365c;
    }

    .quick-links a {
      color: #fff;
      text-decoration: none;
      transition: color 0.3s;
    }

    .quick-links a:hover {
      color: #f5365c;
    }
    .h{
      color: white;
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <?php require('components/sidebar.php') ?>
    <div class="main-panel">
      <?php require('components/navbar.php') ?>

      <!-- Main Content -->
      <div class="content">
        <div class="container-fluid">

          <!-- Overview Section -->
          <div class="overview-cards">
            <div class="card">
              <h4>Total Medicines</h4>
              <p>150</p>
            </div>
            <div class="card">
              <h4>Active Users</h4>
              <p>45</p>
            </div>
          </div>

          <!-- Recent Activities Section -->
          <div class="recent-activities">
            <h4 class="h">Recent Activities</h4>
            <ul>
              <li>Added new medicine: Panadol</li>
              <li>User John Doe registered</li>
              <li>Order #12345 completed</li>
            </ul>
          </div>

          <!-- Quick Links Section -->
          <div class="quick-links">
            <h4 class="h">Quick Links</h4>
            <ul>
              <li><a href="#">Add New Medicine</a></li>
              <li><a href="#">Manage Users</a></li>
              <li><a href="#">View Reports</a></li>
            </ul>
          </div>

        </div>
      </div>

      <?php require('components/footer.php') ?>
    </div>
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
