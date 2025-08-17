<?php
// submit_question.php

// Database connection
require('db.php'); // Include your database connection file

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the question from the form
    $question = trim($_POST['question']);

    // Start a transaction to ensure both inserts happen together
    $conn->begin_transaction();

    try {
        // Insert into user_questions table
        $sql = "INSERT INTO user_questions (question, date_submitted) VALUES (?, NOW())";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $question);
        $stmt->execute();

        // Insert into faqs table
        $sql_faq = "INSERT INTO faqs (question, is_user_submitted, date_added) VALUES (?, 1, NOW())";
        $stmt_faq = $conn->prepare($sql_faq);
        $stmt_faq->bind_param("s", $question);
        $stmt_faq->execute();

        // Commit the transaction
        $conn->commit();

        // Redirect back to the page with a success message
        header("Location: index.php?success=1");
        exit();
    } catch (Exception $e) {
        // Rollback the transaction if an error occurs
        $conn->rollback();
        echo "Error: " . $e->getMessage();
    }

    // Close the statement and connection
    $stmt->close();
    $stmt_faq->close();
    $conn->close();
}
?>
