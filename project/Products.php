<?php
include 'addproduct.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel = "stylesheet" href = "style.css">

</head>
<body>

    <footer>
        <nav>
            <input type = "checkbox" id = "sidebar-active">
            <label for = "sidebar-active" class = "open-sidebar-button">
                <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#000000"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
            </label>

              <label id = "overlay" for = "sidebar-active"></label>
                    <div class="links-container">
              <label for = "sidebar-active" class = "close-sidebar-button">
                        <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#000000"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
                    </label>

                    <a class = "home-link" href="Dashboard.html">Home</a>
                    <a href="Products.php">Products</a>
                    <a href="Login.html">Log out</a>

                    </div>  
            <h1>OKE</h1>
        </nav>
    </footer>

    <main>

        <div class = "product-main">

           <h1 class="page-title">Products</h1>

            <div class = "search-bar">
                <search>
                    <form action = "/search" method = "get">
                        <input type = "text" id = "search-input" name = "search" placeholder = "Search">
                        <button type = "submit">Search</button>
                    </form>
                </search>
            </div>
            

           

            <table class = "product-table">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                <?php      
                    include 'connectDB.php';       
                    $sql = "SELECT * FROM product";
                    $result = $connect -> query($sql); 

                    if($result -> num_rows > 0){
                        while ($row = $result -> fetch_assoc()){
                            echo "<tr>
                                  <td>" . $row["P_ID"] . "</td>
                                  <td>" . $row["P_Name"] . "</td>
                                  <td>" . $row["P_Category"] . "</td>
                                  <td>" . $row["P_Quantity"] . "</td>
                                  <td>" . $row["P_Price"] . "</td>
                                  <td>
                                  <button class='open-edit-button' data-id = '" . $row["P_ID"] . "'>Edit</button>
                                  <button class='delete-product-button' onclick = 'confirmDelete(" . $row["P_ID"] . ")'>Delete</button>
                                  </td>
                                  </tr>";
                        }
                    }
                    else{            
                     echo "<tr>
                            <td colspan='6'>No products found</td>
                           </tr>"; // Display a message if no rows are found       
                    }
                    $connect -> close();
                ?>
                
            </table>

            <div class = "add-n-archive-btn">
                <button id = "open-add-button">Add Product</button>
                <button class = "archive-btn">Archives</button>
            </div>

            <!--Add form-->
            <div id = "floating-add-form" class = "floating-add-form">
                <div class = "form-add-content">

                    <!--close button form-->
                    <span id = "close-addform-button" class = "close-addform-btn">&times;</span>
                    <!--close button form-->

                    <!--form-->
                    <h2>Add New Product</h2>
                    <form action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "POST">
                        <label for = "addproduct-name">Name:</label>
                        <input type = "text" id = "addproduct-name" name = "addproduct-name" required>

                        <label for = "addproduct-category">Category:</label>
                        <input type = "text" id = "addproduct-category" name = "addproduct-category" required>

                        <label for = "addproduct-quantity">Quantity:</label>
                        <input type = "number" id = "addproduct-quantity" name = "addproduct-quantity" required>

                        <label for = "addproduct-price">Price:</label>
                        <input type = "number" id = "addproduct-price" name = "addproduct-price" required>

                        <div class = "addform-btns">
                            <button type = "submit" name = "addsubmit">Submit</button>
                            <button type = "reset">Reset</button>
                        </div>
                    </form>
                    <!--form-->

                </div>
            </div>

             <!--edit form here-->
             <div id = "floating-edit-form" class = "floating-edit-form">
                <div class = "form-edit-content">

                    <!--close button form-->
                    <span id = "close-editform-button" class = "close-editform-btn">&times;</span>
                    <!--close button form-->

                    <!--form-->
                    <h2>Update Product's Contents</h2>
                    <form action = "updateproduct.php" method = "POST">
                        <label for = "editproduct-id">ID:</label>
                        <input type = "number" id = "editproduct-id" name = "editproduct-id" readonly>

                        <label for = "editproduct-name">Name:</label>
                        <input type = "text" id = "editproduct-name" name = "editproduct-name" required>

                        <label for = "editproduct-category">Category:</label>
                        <input type = "text" id = "editproduct-category" name = "editproduct-category" required>

                        <label for = "editproduct-quantity">Quantity:</label>
                        <input type = "number" id = "editproduct-quantity" name = "editproduct-quantity" required>

                        <label for = "editproduct-price">Price:</label>
                        <input type = "number" id = "editproduct-price" name = "editproduct-price" required>

                        <div class = "editform-btns">
                            <button type = "submit" name = "editsubmit">Submit</button>
                            <button type = "reset">Reset</button>
                        </div>
                    </form>
                    <!--form-->

                </div>
            </div>
 
        </div>

        <script src = "script.js"></script>
    </main>


</body>
</html>