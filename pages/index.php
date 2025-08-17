<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- icon -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Protest+Guerrilla&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!-- css link -->
    <link rel="stylesheet" href="../assets/style.css" />
    <link rel="stylesheet" href="../assets/index.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

</head>
<style>

</style>

<body>

    <?php require('../components/header.php'); ?>
    <div class="  pp">
        <div class="container  sp">
            <h1 class="search-title text-center" style="color:black;">Discover the Right Medicine for You</h1>
            <p class="search-subtitle text-center text-dark">Easily search by name and find the best options available
            </p>
            <div class="mb-3 position-relative" id="ss">
                <input type="text" class="form-control search-bar " style="color:maroon;" id="medicineInput" placeholder="Enter medicine name"
                    autocomplete="off">
                <div id="suggestions" class="suggestions-list"></div>

            </div>

            <div class="row mt-4" id="results"></div>
        </div>
    </div>
    </nav>
    </header>
    <div class="container " id="p" style="" >
        <!-- Popular Searches Section -->
        <div class="section">
            <h3 class="section-title text-center">Popular Searches</h3>
            <div class="d-flex flex-wrap justify-content-center">
                <?php
                require('db.php');
                $sql = "SELECT name FROM popular_searches";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="category-item"><a href="#">' . htmlspecialchars($row['name']) . '</a></div>';
                    }
                } else {
                    echo '<p>No popular searches available.</p>';
                }
                ?>
            </div>
        </div>

        <!-- Health Tips and Advice Section -->
        <div class="section" id="h">
            <h3 class="section-title text-center">Health Tips and Advice</h3>
            <div class="d-flex flex-wrap justify-content-center">
                <?php
                $sql = "SELECT title, excerpt,content FROM health_tips ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '
                    <div class="card mx-2 my-3" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">' . htmlspecialchars($row['title']) . '</h5>
                            <p class="card-text">' . htmlspecialchars($row['excerpt']) . '</p>
                            <p class="card-text">' . htmlspecialchars($row['content']) . '</p>

                        </div>
                    </div>';
                    }
                } else {
                    echo '<p>No health tips available.</p>';
                }
                ?>
            </div>
        </div>

        <!-- Frequently Asked Questions Section -->
        <div class="section" id="f">
            <h3 class="section-title text-center">Frequently Asked Questions</h3>
            <div class="accordion" id="faqAccordion">
                <?php
                $sql = "SELECT id, question, answer FROM faqs ORDER BY id ASC";
                $result = $conn->query($sql);
                
                if ($result && $result->num_rows > 0) {
                    $first = true;
                    while ($row = $result->fetch_assoc()) {
                        $show = $first ? 'show' : '';
                        $first = false;
                        if ( $row['question'] && $row['answer']) {
                          
                        
                        echo '
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading' . htmlspecialchars($row['id']) . '">
                            <button class="accordion-button ' . $show . '" type="button" data-bs-toggle="collapse" data-bs-target="#collapse' . htmlspecialchars($row['id']) . '" aria-expanded="true" aria-controls="collapse' . htmlspecialchars($row['id']) . '">
                                ' . htmlspecialchars($row['question']) . '
                            </button>
                        </h2>
                        <div id="collapse' . htmlspecialchars($row['id']) . '" class="accordion-collapse collapse ' . $show . '" aria-labelledby="heading' . htmlspecialchars($row['id']) . '" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                ' . htmlspecialchars($row['answer']) . '
                            </div>
                        </div>
                    </div>';
                    }
                }
                } else {
                    echo '<p>No FAQs available.</p>';
                }
                ?>
            </div>
        </div>

        <!-- Ask a Question Section -->
        <div class="section" id="u">
            <h3 class="section-title text-center">Ask a Question</h3>
            <form action="submit_question.php" method="post" class="mt-3">
                <div class="mb-3">
                    <label for="question" class="form-label">Your Question</label>
                    <textarea class="form-control" id="question" name="question" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
            </form>
        </div>
    </div>

    <?php require('../components/footer.php') ?>
    <script>
        document.getElementById('medicineInput').addEventListener('input', function () {
            const query = this.value;
            if (query.length > 0) {  // Start fetching suggestions after 1 character
                fetchSuggestions(query);
            } else {
                clearSuggestions();
            }
        });

        document.getElementById('medicineInput').addEventListener('keydown', function (e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                const query = this.value;
                fetchMedicines(query);
            }
        });

        function fetchSuggestions(query) {
            fetch('fetch_suggestions.php?query=' + query)
                .then(response => response.json())
                .then(data => {
                    const suggestionsBox = document.getElementById('suggestions');
                    clearSuggestions();
                    data.forEach(item => {
                        const div = document.createElement('div');
                        div.className = 'suggestion-item';
                        div.textContent = item;
                        div.onclick = function () {
                            document.getElementById('medicineInput').value = item;
                            fetchMedicines(item);
                            clearSuggestions();
                        };
                        suggestionsBox.appendChild(div);
                    });
                });
        }

        function fetchMedicines(query) {
            fetch('fetch_medicines.php?data=' + query)
                .then(response => response.text())
                .then(data => {
                    document.getElementById('results').innerHTML = data;
                });
        }

        function clearSuggestions() {
            document.getElementById('suggestions').innerHTML = '';
        }

    </script>
    <script>

        $(document).on('click', '.mb-3', function () {
            $("#ss").click(function () {
                $("#f").hide();
                $("#h").hide();
                $("#u").hide();
                $("#p").hide();



            });
        });
        $(document).on('click', '.mb-3', function () {
            $(".position-relative").on('click', function () {
                $(".nav").css({
                    'background-image': 'none',
                    'height': 'auto'
                });
                $(".pp").css({
                  'margin-top':'50px',
                    'height': 'auto'
                });
                $(".sp").show();
                $(".search-bar").css({
                    'animation': 'none'
                });
            });
        });


    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        crossorigin="anonymous"></script>
</body>

</html>