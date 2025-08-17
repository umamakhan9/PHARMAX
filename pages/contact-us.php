<?php
require('../conn.php');
if (isset($_POST['submit'])) {
    extract($_POST);
    $query = "INSERT INTO `reviews`( `name`, `email`, `message`) VALUES ('$name','$email','$msg')";
    $result = mysqli_query($con, $query);
    if ($result) {
        echo '<script>alert("Thanks for contacting us")</script>';
    } else {
        echo 'failed';
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Contact Us</title>
     <!-- Required meta tags -->
     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!-- css link -->
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
      .nav-link {
            color: #2E073F;
            font-size: 19px;
            font-weight: 600;
            flex-direction: column;
            font-family: "Playfair Display", serif;
            font-optical-sizing: auto;
            font-weight: weight;
            font-style: normal;

        }



        .navbar-brand {
            margin-left: 50px;
            object-fit: contain;

        }

    .fi {
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        position: relative;
        width: 100%;
        padding: 50px 0;
    }

    .fi::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url('../assets/img/AdobeStock_233662828-scaled.jpeg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        filter: blur(0px);
        z-index: -1;
    }

    .bg-light {
        background-color: #f8f9fa !important;
    }

    .text-primary {
        color: black !important;
    }

    .text-dark {
        color: #343a40 !important;
    }

    .text-decoration-none {
        text-decoration: none !important;
    }

    .shadow-sm {
        box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important;
    }

    .rounded {
        border-radius: .25rem !important;
    }
    @media (max-width: 834px) {
        .navbar-brand {
            margin-left: 0;
        }
        .col-md-6 {
            margin-bottom: 20px;
        }

        form {
            width: 100%;
            max-width: 100%;
        }

        .form-control {
            width: 100%;
        }

        .fo {
            width: 100%;
            margin-top: 0px;
        padding-top: 0px;
        padding-right: 50px;
        padding-left: 0px;
            
        }

        .fs {
            padding-bottom: 10px;
            /* margin-top: 0px; */
        padding-top: 0px;
        padding-right: 0px;
        padding-left: 70px;
           
        }
        .ct{
            margin-top: 0px;
        padding-top: 0px;
        padding-right: 50px;
        padding-left: 0px;
    }
    }
    @media (max-width: 768px) {
        .navbar-brand {
            margin-left: 0;
        }
        .col-md-6 {
            margin-bottom: 20px;
        }

        form {
            width: 100%;
            max-width: 100%;
        }

        .form-control {
            width: 100%;
        }

        .fo {
            width: 100%;
            margin-top: 0px;
        padding-top: 0px;
        padding-right: 50px;
        padding-left: 0px;
            
        }

        .fs {
            padding-bottom: 10px;
            /* margin-top: 0px; */
        padding-top: 0px;
        padding-right: 0px;
        padding-left: 70px;
           
        }
        .ct{
            margin-top: 0px;
        padding-top: 0px;
        padding-right: 50px;
        padding-left: 0px;
    }
    }

    @media (max-width: 576px) {
        .col-md-6 {
            margin-bottom: 20px;
        }

        form {
            width: 100%;
            max-width: 100%;
        }

        .form-control {
            width: 100%;
        }

        .fo {
            width: 100%;
            margin-top: 0px;
        padding-top: 0px;
        padding-right: 50px;
        padding-left: 0px;
            
        }

        .fs {
            padding-bottom: 10px;
            /* margin-top: 0px; */
        padding-top: 0px;
        padding-right: 0px;
        padding-left: 70px;
           
        }
        .ct{
            margin-top: 0px;
        padding-top: 0px;
        padding-right: 50px;
        padding-left: 0px;
    }
    }

    .fo {
        width: 100%;
        padding-right: 70px;
    }
    .ct{
        margin-top: 10px;
        padding-top: 10px;
        /* padding-right: 50px; */
        padding-left: 70px;
    }
    /* Additional styling for 'Get in Touch' and 'Feedback and Suggestions' sections */
.contact-section {
    background-color: #f8f9fa;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.contact-section h4 {
    color: #343a40;
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 20px;
    border-bottom: 2px solid #ccc;
    padding-bottom: 10px;
}

.contact-section p {
    color: #555;
    font-size: 16px;
    line-height: 1.8;
    margin-bottom: 15px;
}

.contact-section address {
    font-style: normal;
    color: #555;
}

.contact-section a {
    color: #007bff;
    text-decoration: none;
}

.contact-section a:hover {
    text-decoration: underline;
}

.contact-section .social-icons li {
    margin-bottom: 10px;
}

.contact-section .social-icons li i {
    margin-right: 10px;
    font-size: 18px;
}

</style>

</head>

<body>
    <?php require('../components/header.php') ?>
    </nav>
    </header>
    <div class="container-fluid fi">
        <div class="row gx-5">
            <!-- Contact Information on the left -->
            <div class="col-lg-6 col-md-12 col-sm-12 ct">
                <h2>Contact Us</h2>
                <p class="lead">We're Here to Help</p>
                <p>At <strong>PHARMAX</strong>, your health and satisfaction are our top priorities. Whether
                    you have questions about the medicines listed on our platform, need assistance with navigating our
                    website, or have any other inquiries, we're here to support you.</p>
            </div>

            <!-- Form on the right -->
            <div class="col-lg-6 col-md-12 col-sm-12 fs">
                <form action="" method="post" class="fo">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="msg" class="form-label">Message</label>
                        <textarea name="msg" class="form-control" style="height:120px;"></textarea>
                    </div>
                    <input type="submit" name="submit" class="btn btn-secondary" value="Submit">
                </form>
            </div>
        </div>
    </div>

    <div class="container my-5 p-4">
    <div class="row gx-5">
        <!-- Get in Touch Section -->
        <div class="col-md-6 contact-section">
            <h4 class="mb-4 text-primary">Get in Touch</h4>
            <p><strong>Email:</strong><br>For general inquiries or support, please email us at <a
                    href="mailto:support@pharmax.com" class="text-decoration-none text-dark">support@pharmax.com</a>.
                Our team will respond within 24 hours.</p>
            <p><strong>Phone:</strong><br>Prefer to speak with us directly? Give us a call at <strong
                    class="text-dark">+923337643989</strong>. Our customer service team is available from <strong
                    class="text-dark">9 AM to 6 PM</strong>, Monday through Friday.</p>
            <p><strong>Address:</strong><br>If you wish to reach us by mail or visit our office, our address is:</p>
            <address class="text-dark">
                Pharma<br>
                Latifabad<br>
                Hyderabad<br>
                Pakistan
            </address>
        </div>

        <!-- Feedback and Suggestions Section -->
        <div class="col-md-6 contact-section">
            <h4 class="mb-4 text-primary">Feedback and Suggestions</h4>
            <p>We value your feedback and suggestions as they help us improve our services. Please feel free to share
                your thoughts with us through our <a href="#" class="text-decoration-none text-dark">feedback form</a> or
                by emailing us directly. Your input is crucial in helping us provide the best possible experience.</p>

            <h4 class="mt-4 text-primary">Stay Connected</h4>
            <p>Follow us on social media to stay updated on the latest news, tips, and updates:</p>
            <ul class="list-unstyled social-icons">
                <li><i class="fa-brands fa-facebook-messenger" style="color:#0E8BF1"></i> <strong>Facebook:</strong> <a
                        href="#" class="text-decoration-none text-dark">facebook.com/pharmax</a></li>
                <li><i class="fa-brands fa-twitter" style="color:#1C96E8"></i> <strong>Twitter:</strong> <a href="#"
                        class="text-decoration-none text-dark">twitter.com/pharmax</a></li>
                <li><i class="fa-brands fa-instagram" style="color:#B03992"></i> <strong>Instagram:</strong> <a
                        href="#" class="text-decoration-none text-dark">instagram.com/pharmax</a></li>
            </ul>
        </div>
    </div>
</div>


    <?php require('../components/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4JQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6G6Sbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>
