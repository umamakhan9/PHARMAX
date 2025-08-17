<?php 
$connect = mysqli_connect('localhost', 'root', '', 'pharmacy_db');

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['query']) && !empty($_GET['query'])) {
    $query = mysqli_real_escape_string($connect, $_GET['query']);
    $sql = "SELECT med_name FROM medicine WHERE med_name LIKE '%$query%' LIMIT 5";
    $result = mysqli_query($connect, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $suggestions = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $suggestions[] = $row['med_name'];
        }
        echo json_encode($suggestions);
    } else {
        echo json_encode([]);
    }
}

mysqli_close($connect);
?>
