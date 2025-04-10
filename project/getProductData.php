<?php
include 'connectDB.php';

if (isset($_GET['id'])) {
    $productID = $_GET['id'];

    // Fetch product data from the database
    $sql = "SELECT * FROM product WHERE P_ID = ?";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param("i", $productID);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo json_encode($row); // Return product data as JSON
    } else {
        echo json_encode(array('error' => 'Product not found'));
    }

    $stmt->close();
    $connect->close();
} else {
    echo json_encode(array('error' => 'No product ID provided'));
}
?>