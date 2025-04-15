<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS Receipt</title>
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --light-color: #ecf0f1;
            --dark-color: #2c3e50;
            --success-color: #27ae60;
            --border-radius: 8px;
            --box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fa;
            color: var(--dark-color);
            line-height: 1.6;
        }

        .pos-container {
            display: flex;
            min-height: 100vh;
            padding: 20px;
            gap: 20px;
            max-width: 1400px;
            margin: 0 auto;
        }

        /* Product Section */
        .product-section {
            flex: 3;
            display: flex;
            flex-direction: column;
            background-color: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            padding: 20px;
        }

        .search-bar {
            margin-bottom: 20px;
            position: relative;
        }

        .search-bar input {
            padding: 12px 15px 12px 40px;
            width: 50%;
            font-size: 16px;
            border-radius: var(--border-radius);
            border: 1px solid #ddd;
            outline: none;
            transition: border 0.3s;
        }

        .search-bar input:focus {
            border-color: var(--secondary-color);
        }

        .search-bar::before {
            content: "🔍";
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #777;
        }

        /* Product List - Updated for 4 Columns */
        .product-list {
            display: grid;
            grid-template-columns: repeat(4, 1fr);  /* 4 columns */
            gap: 15px;
            padding: 5px;
        }

        .product-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: transform 0.2s;
        }

        .product-item:hover {
            transform: translateY(-3px);
        }

        .product-item button {
            width: 100%;
            padding: 15px 10px;
            font-size: 14px;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: var(--border-radius);
            cursor: pointer;
            white-space: normal;
            word-wrap: break-word;
            text-align: center;
            transition: background-color 0.2s;
            box-shadow: var(--box-shadow);
            min-height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .product-item button:hover {
            background-color: var(--secondary-color);
        }

        .product-price {
            margin-top: 5px;
            font-weight: bold;
            color: var(--primary-color);
            font-size: 14px;
        }

        /* Receipt Section */
        .receipt-section {
            flex: 1;
            background-color: white;
            padding: 20px;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            display: flex;
            flex-direction: column;
            min-width: 300px;
        }

        .receipt-header {
            border-bottom: 2px solid var(--light-color);
            padding-bottom: 15px;
            margin-bottom: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .receipt-header h3 {
            color: var(--primary-color);
            font-size: 1.5rem;
        }

        .receipt-items {
            flex: 1;
            overflow-y: auto;
            margin-bottom: 15px;
        }

        .receipt-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px dashed #eee;
        }

        .receipt-item:last-child {
            border-bottom: none;
        }

        .receipt-item-info {
            flex: 1;
        }

        .receipt-item-name {
            font-weight: 500;
        }

        .receipt-item-price {
            color: var(--primary-color);
            font-weight: bold;
        }

        .receipt-item-remove {
            background-color: var(--accent-color);
            border: none;
            color: white;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 10px;
            transition: background-color 0.2s;
        }

        .receipt-item-remove:hover {
            background-color: #c0392b;
        }

        .receipt-total {
            margin-top: auto;
            padding-top: 15px;
            border-top: 2px solid var(--light-color);
            text-align: right;
            font-size: 1.2rem;
        }

        .total-amount {
            font-weight: bold;
            color: var(--success-color);
            font-size: 1.4rem;
        }

        .receipt-actions {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        .btn {
            padding: 12px 20px;
            border: none;
            border-radius: var(--border-radius);
            cursor: pointer;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.2s;
            flex: 1;
            text-align: center;
        }

        .btn-primary {
            background-color: var(--success-color);
            color: white;
        }

        .btn-primary:hover {
            background-color: #219653;
        }

        .btn-secondary {
            background-color: var(--light-color);
            color: var(--dark-color);
        }

        .btn-secondary:hover {
            background-color: #d5dbdb;
        }

        .payment-dropdown {
            padding: 12px;
            border-radius: var(--border-radius);
            border: 1px solid #ddd;
            font-size: 14px;
            background-color: white;
            width: 100%;
            box-sizing: border-box;
        }
        

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .pos-container {
                flex-direction: column;
                padding: 10px;
            }
            
            .product-list {
                grid-template-columns: repeat(auto-fill, minmax(120px, 1fr)); /* 1-4 columns depending on screen width */
            }
        }
    </style>
</head>
<body>
<a href="index.html" class="return-button">← Back</a>
<div class="pos-container">
    <!-- Product Area -->
    <div class="product-section">
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Search products...">
        </div>
        
        <div class="product-list" id="productList">
            <!-- Example of a product button -->
            <div class="product-item">
                <button onclick="addToReceipt('Brake Pads', 120)">Brake Pads</button>
                <div class="product-price">₱120</div>
            </div>
            <div class="product-item">
                <button onclick="addToReceipt('Engine Oil', 250)">Engine Oil</button>
                <div class="product-price">₱250</div>
            </div>
            <div class="product-item">
                <button onclick="addToReceipt('Spark Plug', 75)">Spark Plug</button>
                <div class="product-price">₱75</div>
            </div>
            <div class="product-item">
                <button onclick="addToReceipt('Battery', 3200)">Battery</button>
                <div class="product-price">₱3,200</div>
            </div>
            <div class="product-item">
                <button onclick="addToReceipt('Headlight Bulb', 300)">Headlight Bulb</button>
                <div class="product-price">₱300</div>
            </div>
            <div class="product-item">
                <button onclick="addToReceipt('Windshield Wipers', 450)">Windshield Wipers</button>
                <div class="product-price">₱450</div>
            </div>
            <div class="product-item">
                <button onclick="addToReceipt('Radiator Coolant', 150)">Radiator Coolant</button>
                <div class="product-price">₱150</div>
            </div>
            <div class="product-item">
                <button onclick="addToReceipt('Fuel Filter', 200)">Fuel Filter</button>
                <div class="product-price">₱200</div>
            </div>
            <div class="product-item">
                <button onclick="addToReceipt('Transmission Fluid', 500)">Transmission Fluid</button>
                <div class="product-price">₱500</div>
            </div>
            <div class="product-item">
                <button onclick="addToReceipt('Air Filter', 180)">Air Filter</button>
                <div class="product-price">₱180</div>
            </div>
        </div>
    </div>

    <!-- Receipt Area -->
    <div class="receipt-section">
        <div class="receipt-header">
            <h3>Order Summary</h3>
            <div class="receipt-number">#0001</div>
        </div>
        
        <div class="receipt-items" id="receiptItems">
            <!-- Items will be added here dynamically -->
        </div>
        
        <div class="receipt-total">
            <div>Total:</div>
            <div class="total-amount">₱<span id="totalAmount">0.00</span></div>
        </div>

        <!-- Payment Mode Dropdown -->
        <div class="receipt-actions">
            <select class="payment-dropdown" id="paymentMode">
                <option value="cash">Cash</option>
                <option value="credit-card">Credit Card</option>
                <option value="debit-card">Debit Card</option>
            </select>
            <button class="btn btn-secondary" onclick="clearReceipt()">Clear</button>
            <button class="btn btn-primary" onclick="processPayment()">Pay Now</button>
        </div>
    </div>
</div>

<script>
    let receipt = [];
    let receiptNumber = 1;

    function addToReceipt(name, price) {
        // Check if item already exists in receipt
        const existingItem = receipt.find(item => item.name === name);
        if (existingItem) {
            existingItem.quantity += 1;
            existingItem.totalPrice = existingItem.quantity * existingItem.price;
        } else {
            receipt.push({ 
                name, 
                price,
                quantity: 1,
                totalPrice: price
            });
        }
        renderReceipt();
    }

    function removeFromReceipt(index) {
        receipt.splice(index, 1);
        renderReceipt();
    }

    function clearReceipt() {
        if (receipt.length > 0 && confirm("Are you sure you want to clear the current order?")) {
            receipt = [];
            renderReceipt();
        }
    }

    function processPayment() {
        const paymentMode = document.getElementById("paymentMode").value;
        if (receipt.length === 0) {
            alert("Please add items to the receipt first");
            return;
        }
        
        // In a real app, this would connect to a payment processor
        alert(`Payment processed for ₱${calculateTotal().toFixed(2)} via ${paymentMode}\nReceipt #${receiptNumber++}`);
        receipt = [];
        renderReceipt();
    }

    function calculateTotal() {
        return receipt.reduce((sum, item) => sum + item.totalPrice, 0);
    }

    function renderReceipt() {
        const container = document.getElementById("receiptItems");
        const totalElem = document.getElementById("totalAmount");
        container.innerHTML = "";
        
        if (receipt.length === 0) {
            container.innerHTML = '<div style="text-align: center; color: #777; padding: 20px;">No items added</div>';
            totalElem.innerText = "0.00";
            return;
        }

        receipt.forEach((item, i) => {
            const itemElement = document.createElement("div");
            itemElement.className = "receipt-item";
            itemElement.innerHTML = `
                <div class="receipt-item-info">
                    <div class="receipt-item-name">${item.name} × ${item.quantity}</div>
                </div>
                <div class="receipt-item-price">₱${item.totalPrice.toFixed(2)}</div>
                <button class="receipt-item-remove" onclick="removeFromReceipt(${i})">×</button>
            `;
            container.appendChild(itemElement);
        });

        totalElem.innerText = calculateTotal().toFixed(2);
    }

    // Product search filter
    document.getElementById("searchInput").addEventListener("input", function() {
        const filter = this.value.toLowerCase();
        const items = document.querySelectorAll(".product-item");
        
        items.forEach(item => {
            const text = item.textContent.toLowerCase();
            item.style.display = text.includes(filter) ? "flex" : "none";
        });
    });

    // Initialize with empty receipt
    renderReceipt();
</script>

</body>
</html>

