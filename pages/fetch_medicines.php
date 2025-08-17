<?php
$connect = mysqli_connect('localhost', 'root', '', 'pharmacy_db');

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

$data = '';
$searchResult = null;
$relatedResult = null;

if (isset($_GET['data']) && !empty($_GET['data'])) {
    $data = mysqli_real_escape_string($connect, $_GET['data']);

    // Query to find the formula_id of the entered medicine
    $formulaQuery = "SELECT formula_id FROM medicine WHERE med_name LIKE ? LIMIT 1";
    $stmt = $connect->prepare($formulaQuery);
    $queryParam = "%$data%";
    $stmt->bind_param('s', $queryParam);
    $stmt->execute();
    $formulaResult = $stmt->get_result();

    if ($formulaResult && $formulaResult->num_rows > 0) {
        $formulaRow = $formulaResult->fetch_assoc();
        $formulaId = $formulaRow['formula_id'];

        // Query to find the searched medicine (exact match) with category name
        $searchQuery = "SELECT m.med_name, m.price, c.category AS category_name, f.formula, m.uses, m.company, m.side_effects, m.image
                        FROM medicine m
                        JOIN formula f ON m.formula_id = f.id
                        JOIN categories c ON m.category = c.id
                        WHERE m.med_name LIKE ? 
                        LIMIT 1";
        $stmt = $connect->prepare($searchQuery);
        $stmt->bind_param('s', $queryParam);
        $stmt->execute();
        $searchResult = $stmt->get_result();

        // Query to find all related medicines with the same formula_id (excluding the exact match) with category name
        $relatedQuery = "SELECT m.med_name, m.price, c.category AS category_name,  f.formula, m.uses, m.company, m.side_effects, m.image
                         FROM medicine m
                         JOIN formula f ON m.formula_id = f.id
                          JOIN categories c ON m.category = c.id
                         WHERE m.formula_id = ? AND m.med_name NOT LIKE ?";
        $stmt = $connect->prepare($relatedQuery);
        $stmt->bind_param('is', $formulaId, $queryParam);
        $stmt->execute();
        $relatedResult = $stmt->get_result();
    }
}

mysqli_close($connect);
?>

<!doctype html>
<html lang="en">

<head>
    <title>Pharmacy Search</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <style>
        .suggestions-list {
            border: 1px solid #ddd;
            max-height: 150px;
            overflow-y: auto;
            position: absolute;
            z-index: 1000;
            background-color: white;
            width: 100%;
        }

        .suggestion-item {
            padding: 10px;
            cursor: pointer;
        }

        .suggestion-item:hover {
            background-color: #f0f0f0;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row mt-4" id="results">
            <?php
            if (isset($_GET['data']) && !empty($_GET['data'])) {
                if ($searchResult && $searchResult->num_rows > 0) {
                    while ($row = $searchResult->fetch_assoc()) {
                        echo '<div class="col-md-4 mb-4">';
                        echo '<div class="card">';
                        echo '<div class="card-body">';
                        echo '<img src="' . htmlspecialchars($row['image']) . '" alt="' . htmlspecialchars($row['med_name']) . '" width="250px" height="250px">';
                        echo '<h5 class="card-title">' . htmlspecialchars($row['med_name']) . '</h5>';
                        echo '<h6 class="card-subtitle mb-2 text-muted">Company: ' . htmlspecialchars($row['company']) . '</h6>';
                        echo '<p class="card-text"><strong>Price:</strong> ' . htmlspecialchars($row['price']) . '</p>';
                        echo '<p class="card-text"><strong>Category:</strong> ' . htmlspecialchars($row['category_name']) . '</p>';
                        echo '<p class="card-text"><strong>Formula:</strong> ' . htmlspecialchars($row['formula']) . '</p>';
                        echo '<p class="card-text"><strong>Uses:</strong> ' . htmlspecialchars($row['uses']) . '</p>';
                        echo '<p class="card-text"><strong>Side Effects:</strong> ' . htmlspecialchars($row['side_effects']) . '</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                }

                if ($relatedResult && $relatedResult->num_rows > 0) {
                    while ($row = $relatedResult->fetch_assoc()) {
                        echo '<div class="col-md-4 mb-4">';
                        echo '<div class="card">';
                        echo '<div class="card-body">';
                        echo '<img src="' . htmlspecialchars($row['image']) . '" alt="' . htmlspecialchars($row['med_name']) . '" width="250px" height="250px">';
                        echo '<h5 class="card-title">' . htmlspecialchars($row['med_name']) . '</h5>';
                        echo '<h6 class="card-subtitle mb-2 text-muted">Company: ' . htmlspecialchars($row['company']) . '</h6>';
                        echo '<p class="card-text"><strong>Price:</strong> ' . htmlspecialchars($row['price']) . '</p>';
                        echo '<p class="card-text"><strong>Category:</strong> ' . htmlspecialchars($row['category_name']) . '</p>';
                        echo '<p class="card-text"><strong>Formula:</strong> ' . htmlspecialchars($row['formula']) . '</p>';
                        echo '<p class="card-text"><strong>Uses:</strong> ' . htmlspecialchars($row['uses']) . '</p>';
                        echo '<p class="card-text"><strong>Side Effects:</strong> ' . htmlspecialchars($row['side_effects']) . '</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo '<p class="text-center">No matches found.</p>';
                }
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        crossorigin="anonymous"></script>
</body>

</html>
