<?php
session_start();
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    if (isset($_GET['logout'])) {
        session_destroy();
        header('location:login.php');
    }

  
    $conn = mysqli_connect('localhost','root','','medicine_search');

  

    if ( isset($_POST['submit']) ){
        $title =$_POST['title'];
        $excerpt = $_POST['excerpt'];
        $content = $_POST['content'];

        $insertQuery = "INSERT INTO health_tips (title, excerpt, content) VALUES ('$title', '$excerpt', '$content')";
        if ($conn->query($insertQuery) === TRUE) {
            echo "<script>alert('Health Tip added successfully');</script>";
        } else {
            echo "<script>alert('Error adding Health Tip');</script>";
        }
    }

    if (isset($_GET['delete'])) {
        $id = $conn->real_escape_string($_GET['delete']);
        $deleteQuery = "DELETE FROM health_tips WHERE id = '$id'";

        if ($conn->query($deleteQuery) === TRUE) {
            echo "<script>alert('Health Tip deleted successfully');</script>";
            // Refresh the page to reflect the deletion
            echo "<script>window.location.href = 'healthtips.php';</script>";
        } else {
            echo "<script>alert('Error deleting Health Tip');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add and Manage Health Tips</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
    <link href="assets/demo/demo.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <link href="assets/demo/demo.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <style>
            .row {
                display: flex;
                justify-content: center;
                align-items: center;
                padding-top: 80px;
                padding-bottom: 30px;
                height: auto;
            }
    </style>
</head>
<body>
    <?php require('components/sidebar.php'); ?>
    <?php require('components/navbar.php'); ?>

    <div class="container-fluid">
        <div class="row">
            <main class="col-md-9 ms-sm-auto col-lg-6 px-4">
                <div class="form-container">
                    <h2 class="text-center">Add Health Tip</h2>
                    <form method="POST">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" id="title" name="title" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="excerpt" class="form-label">Excerpt</label>
                            <textarea id="excerpt" name="excerpt" class="form-control" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea id="content" name="content" class="form-control" rows="5" required></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn ">Add Tip</button>
                    </form>
                </div>

                <!-- Display existing health tips -->
                <div class="mt-5">
                    <h3 class="text-center">All Health Tips</h3>
                    <?php
                    // Fetch all health tips
                    $conn = mysqli_connect('localhost','root','','medicine_search');
                    $result = $conn->query("SELECT * FROM health_tips");
                    $query = "SELECT * FROM health_tips";
                    $result = mysqli_query($conn,$query);
                    
                    
                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($row) {
                            echo '<div class="card mb-3">';
                            echo '<div class="card-body">';
                            echo '<strong><h4 class="card-title" style="color:black">' . $row['title'] . '</h4></strong>';
                            echo '<p class="card-text"><strong>Excerpt: </strong>' . $row['excerpt'] . '</p>';
                            echo '<p class="card-text">' . $row['content'] . '</p>';
                            echo '<a href="?delete=' . $row['id'] . '" class="btn btn-danger">Delete</a>';
                            echo '</div>';
                            echo '</div>';
                        }else {
                            echo '<p class="text-center">No health tips found.</p>';
                        }
                    } 
                    ?>
                </div>
            </main>
        </div>
    </div>

    <?php require('components/footer.php'); ?>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <script src="assets/js/black-dashboard.min.js?v=1.0.0"></script>
</body>
</html>

<?php
} else {
    header('location:login.php');
}
?>
