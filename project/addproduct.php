<?php
include "connectDB.php";

// Get user inputs and sanitize them
$add_productname = isset($_POST['addproduct-name']) ? htmlspecialchars($_POST['addproduct-name']) : '';
$add_productcategory = isset($_POST['addproduct-category']) ? htmlspecialchars($_POST['addproduct-category']) : '';
$add_productquantity = isset($_POST['addproduct-quantity']) ? intval($_POST['addproduct-quantity']) : 0;
$add_productprice = isset($_POST['addproduct-price']) ? floatval($_POST['addproduct-price']) : 0.0;

// Check if the form is submitted and all fields are filled
if (isset($_POST['addsubmit']) && $add_productname && $add_productcategory && $add_productquantity && $add_productprice) {
    // Use prepared statements to prevent SQL injection
    $sql = "INSERT INTO product (P_Name, P_Category, P_Quantity, P_Price) VALUES (?, ?, ?, ?)";
    $stmt = $connect->prepare($sql);

    if ($stmt) {
        // Bind parameters to the prepared statement
        $stmt->bind_param("ssid", $add_productname, $add_productcategory, $add_productquantity, $add_productprice);

        // Execute the query
        if ($stmt->execute()) {
            echo "<script>
                    alert('Product has been added successfully');
                    window.location.href = 'Products.php';
                  </script>";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $connect->error;
    }

    // Close the database connection
    $connect->close();
} 

?>