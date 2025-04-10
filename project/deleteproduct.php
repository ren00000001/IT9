<?php
include 'connectDB.php';

if(isset($_GET['id'])){
    $productID = $_GET['id'];

    $sql = "DELETE FROM product WHERE P_ID = ?";
    $stmt = $connect -> prepare($sql);
    $stmt -> bind_param("i", $productID);

    if($stmt -> execute()){
        echo "Product successfully deleted.";
    }
    else{
        echo "Error deleting the product: " . $stmt -> error;
    }

    $stmt -> close();
    $connect -> close();

    header("Location: Products.php");

    exit();
}

    else{
        echo "No product ID provided.";
    }


?>