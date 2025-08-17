<?php
session_start();
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    if (isset($_GET['logout'])) {
        session_destroy();
        header('location:login.php');
        exit;
    }

    $servername = 'localhost';
    $username = 'root';
    $password = ''; // Enter the correct password if set
    $dbname = 'medicine_search'; // Update this if your database name is different

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Handle answer submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['question_id'], $_POST['answer'])) {
        $questionId = $_POST['question_id'];
        $answer = $conn->real_escape_string($_POST['answer']);

        // Update the FAQ table with the admin's answer
        $updateQuery = "UPDATE faqs SET answer = '$answer', is_user_submitted = 0 WHERE id = $questionId";
        if ($conn->query($updateQuery) === TRUE) {
        } else {
        }
    }

    // Handle question deletion
    if (isset($_GET['delete'])) {
        $deleteId = intval($_GET['delete']);
        $deleteQuery = "DELETE FROM faqs WHERE id = $deleteId";
        if ($conn->query($deleteQuery) === TRUE) {
        } else {
        }
    }

    // Fetch unanswered questions
    $query = "SELECT id, question, date_added FROM faqs WHERE answer IS NULL OR answer = ''";
    $result = $conn->query($query);
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Manage FAQs</title>
        <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
            crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                    <div class="faq-container">
                        <h2 class="text-center">Manage FAQs</h2>

                        <?php if ($result->num_rows > 0) { ?>
                            <?php while ($row = $result->fetch_assoc()) { ?>
                                <div class="faq-item">
                                    <h4>Question: <?php echo htmlspecialchars($row['question']); ?></h4>
                                    <p>Submitted on: <?php echo $row['date_added']; ?></p>
                                    <form class="faq-form" method="POST">
                                        <textarea name="answer" class="form-control" rows="4" placeholder="Enter your answer here..."
                                            required></textarea>
                                        <input type="hidden" name="question_id" value="<?php echo $row['id']; ?>">
                                        <br>
                                        <input type="submit" class="btn" value="Submit">
                                        <a href="?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                                    </form>
                                </div>
                            <?php } ?>
                        <?php } else { ?>
                            <p class="text-center" style="color: #666;">No unanswered questions available.</p>
                        <?php } ?>
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
