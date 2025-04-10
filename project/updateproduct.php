<?php
include 'connectDB.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Debugging: Print received data
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $productID = isset($_POST['editproduct-id']) ? intval($_POST['editproduct-id']) : '';
    $productName = isset($_POST['editproduct-name']) ? htmlspecialchars($_POST['editproduct-name']) : '';
    $productCategory = isset($_POST['editproduct-category']) ? htmlspecialchars($_POST['editproduct-category']) : '';
    $productQuantity = isset($_POST['editproduct-quantity']) ? intval($_POST['editproduct-quantity']) : '';
    $productPrice = isset($_POST['editproduct-price']) ? floatval($_POST['editproduct-price']) : '';

    
         // Debugging: Print the SQL query
        $sql = "UPDATE product SET P_Name = ?, P_Category = ?, P_Quantity = ?, P_Price = ? WHERE P_ID = ?";
        echo "SQL Query: $sql<br>";
        echo "Parameters: $productName, $productCategory, $productQuantity, $productPrice, $productID<br>";

        // Update product data in the database
        $stmt = $connect->prepare($sql);
        $stmt->bind_param("ssidi", $productName, $productCategory, $productQuantity, $productPrice, $productID);

        if ($stmt->execute()) {
            echo "Product updated successfully.";
        } else {
            echo "Error updating product: " . $stmt->error;
        }

        $stmt->close();
        $connect->close();

        // Redirect back to the main page
        header("Location: Products.php");
        exit();
    } else {
        echo "Invalid request.";
    }
   

?>