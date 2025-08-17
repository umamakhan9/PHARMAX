<?php
require('../connect.php'); 
session_start();
if(isset($_SESSION['id'])) {
  $id = $_SESSION['id'];
  if(isset($_GET['logout'])) {
    session_destroy();
    header('location:login.php');
  }

  // Fetch available formulas from the `formula` table
  $formulas = [];
  $query = "SELECT id, formula FROM formula";
  $result = mysqli_query($conn, $query);
  if ($result) {
      while ($row = mysqli_fetch_assoc($result)) {
          $formulas[] = $row;
      }
  }

  // Fetch available categories from the `categories` table
  $categories = [];
  $category_query = "SELECT id, category FROM categories";
  $category_result = mysqli_query($conn, $category_query);
  if ($category_result) {
      while ($row = mysqli_fetch_assoc($category_result)) {
          $categories[] = $row;
      }
  }

  // Handle form submission
  if (isset($_POST['sub']) && isset($_POST['form_submitted']) && $_POST['form_submitted'] == '1') {
      $med_name = mysqli_real_escape_string($conn, $_POST['med_name']);
      $formula_id = mysqli_real_escape_string($conn, $_POST['formula']);
      $category_id = mysqli_real_escape_string($conn, $_POST['category']);
      $price = mysqli_real_escape_string($conn, $_POST['price']);
      $uses = mysqli_real_escape_string($conn, $_POST['uses']);
      $side_effects = mysqli_real_escape_string($conn, $_POST['side_effects']);
      $company = mysqli_real_escape_string($conn, $_POST['company']);
      $image_path = '';

      // Handle image upload
      if (!empty($_FILES['image']['name'])) {
          $image = $_FILES['image']['name'];
          $tmp_name = $_FILES['image']['tmp_name'];
          $folder = "assets/img/";
          $target = $folder . basename($image);

          // Check if the directory exists
          if (!is_dir($folder)) {
              mkdir($folder, 0777, true); // Create directory if it does not exist
          }

          // Move the uploaded file to the desired directory
          if (move_uploaded_file($tmp_name, $target)) {
              $image_path = $target; // Store the path in the database
          } else {
              echo "<script>alert('Failed to upload file.');</script>";
              $image_path = ''; // Set empty if the upload fails
          }
      }

      // Insert data into the `medicine` table
      $insert_query = "INSERT INTO medicine (med_name, formula_id, category, uses, price, company, side_effects, image) 
                      VALUES ('$med_name', '$formula_id', '$category_id', '$uses', '$price', '$company', '$side_effects', '$image_path')";
      if (mysqli_query($conn, $insert_query)) {
          echo "<script>alert('Medicine added successfully!');</script>";
      } else {
          echo "<script>alert('Failed to add medicine.');</script>";
      }
  }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <title>Add Medicine - Dashboard</title>
    <!-- Fonts and icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
</head>

<body class="white-content">
    <div class="wrapper">
        <?php require('components/sidebar.php'); ?>
        <div class="main-panel">
            <?php require('components/navbar.php'); ?> 

            <!-- Main Content -->
            <div class="content">
                <div class="container-fluid">
                    <h3 class="my-4">Add Medicine</h3>
                    <div class="card">
                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data">
                                <!-- Hidden input to ensure form is submitted by the button -->
                                <input type="hidden" name="form_submitted" value="1">

                                <div class="form-group">
                                    <label for="med_name">Medicine Name:</label>
                                    <input type="text" class="form-control" id="med_name" name="med_name" required>
                                </div>
                                <div class="form-group">
                                    <label for="formula">Formula:</label>
                                    <select class="form-control" id="formula" name="formula" required>
                                        <option value="">Select Formula</option>
                                        <?php foreach ($formulas as $formula) : ?>
                                            <option value="<?= $formula['id']; ?>"><?= $formula['formula']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="category">Category:</label>
                                    <select class="form-control" id="category" name="category" required>
                                        <option value="">Select Category</option>
                                        <?php foreach ($categories as $category) : ?>
                                            <option value="<?= $category['id']; ?>"><?= $category['category']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="price">Price (PKR):</label>
                                    <input type="number" class="form-control" id="price" name="price" step="0.01" required>
                                </div>
                                <div class="form-group">
                                    <label for="uses">Uses:</label>
                                    <textarea class="form-control" id="uses" name="uses" rows="3" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="side_effects">Side Effects:</label>
                                    <textarea class="form-control" id="side_effects" name="side_effects" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="company">Company:</label>
                                    <input type="text" class="form-control" id="company" name="company">
                                </div>
                                <div class="form-group">
                                    <label for="image">Medicine Image:</label>
                                    <input type="file" name="image" class="form-control" id="image"  accept="image/*">
                                </div>
                                <input type="submit" name="sub" class="btn" value="Add Medicine">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php require('components/footer.php'); ?>
        </div>
    </div>

    <!-- Core JS Files -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="assets/js/core/jquery.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/js/plugins/chartjs.min.js"></script>
    <script src="assets/js/black-dashboard.min.js?v=1.0.0"></script>
</body>
</html>
<?php } else { header('location:login.php'); } ?>
