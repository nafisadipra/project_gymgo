<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/adminViewOrder.css">
    <title>GYM GO</title>
</head>
<body>
    <video class="background-video" autoplay muted loop>
        <source src="../Images/vecteezy_dark-futuristic-low-poly-surface-background-with-the-gentle_40577564.mp4" type="video/mp4">
    </video>
    <header>
        <div class="head-container">
            <div>
                <img src="../img/GymGo.png" width="190vw" style="padding-left: 2vw;">
            </div>
            <div class="nav-content">
                <nav class="navbar">
                    <ul>
                        <a class="nav-item" href="./index.html">HOME</a>
                        <a class="nav-item" href="./feedback.html">FEEDBACK</a>
                        <a class="nav-item" href="./product.html">PRODUCTS</a>
                        <a class="nav-item" href="./dashboard.html">DASHBOARD</a>
                        <a class="nav-item" href="./trainer.html">TRAINER</a>
                    </ul>
                </nav>
            </div>
            <div style="display: flex; padding: 1.5vw 0vw;">
                <div class="nav-button">
                    <input class="top-button" type="button" value=" Sign Up">
                </div>
                <div class="nav-button">
                    <a href="./login.html"><input class="top-button1"   type="button" value="Log In"></a>
                </div>
            </div>
        </div>
    </header>
    <main id="main-section" style="padding: 0vw 1.5vw;">

        <table class="styled-table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Product Name</th>
                    <th>Product ID</th>
                    <th>Order ID</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Payment Confirmation</th>
                    <th>Confirmation</th>
                </tr>
            </thead>
            <tbody id="tableBody"></tbody>
        </table>

    </main>
    <footer class="foot">
        <div class="sub9">
            <p class="sub91"><b>Orbitor</b></p>
            <p class="sub92">Tempora dolorem voluptatum nam vero<br> assumenda voluptate, facilis ad eos<br> obcaecati tenetur veritatis eveniet<br> distinctio.</p>
        </div>
        <div class="sub9">
            <p class="sub91"><b>Company</b></p>
            <p class="sub92">
                <a class="f1"href="#">About</a><br>
                <a class="f1"href="#">Services</a><br>
                <a class="f1"href="#">Team</a><br>
                <a class="f1"href="#">Contact</a>
            </p>
        </div>
        <div class="sub9">
            <p class="sub91"><b>Support</b></p>
            <p class="sub92">
                <a class="f1"href="#">Terms & Conditions</a><br>
                <a class="f1"href="#">Privacy Policy</a><br>
                <a class="f1"href="#">Support</a><br>
                <a class="f1"href="#">FAQ</a>
            </p>
        </div>
        <div class="sub9">
            <p class="sub91"><b>Get in Touch</b></p>
            <p class="sub92">
                <a class="f1"href="#"><img class="fc"src="./image/headset-svgrepo-com.svg" > Support@megakit.com</a><br>
                <a class="f1"href="#"><img class="fc" src="./image/phone-rotary-svgrepo-com.svg"> +23-456-6588</a><br>
            </p>
        </div>
    </footer>
    <script>
        
        const tableData = [
            {productName: "Protein Shake", productId: "PS001", orderId: "ORD123", quantity: 2, price: "$29.99", payment: "Confirmed"},
            {productName: "Gym Belt", productId: "GB002", orderId: "ORD124", quantity: 1, price: "$19.99", payment: "Pending"},
            {productName: "Resistance Band", productId: "RB003", orderId: "ORD125", quantity: 3, price: "$24.99", payment: "Confirmed"},
            {productName: "Yoga Mat", productId: "YM004", orderId: "ORD126", quantity: 1, price: "$39.99", payment: "Confirmed"},
            {productName: "Dumbbell Set", productId: "DS005", orderId: "ORD127", quantity: 1, price: "$99.99", payment: "Pending"}
        ];

        
        function populateTable() {
            const tableBody = document.getElementById('tableBody');
            tableBody.innerHTML = '';

            tableData.forEach((data, index) => {
                const row = document.createElement('tr');
                if (index % 2 === 1) row.classList.add('active-row');
                
                row.innerHTML = `
                    <td>${index + 1}</td>
                    <td>${data.productName}</td>
                    <td>${data.productId}</td>
                    <td>${data.orderId}</td>
                    <td>${data.quantity}</td>
                    <td>${data.price}</td>
                    <td>${data.payment}</td>
                    <td><button onclick="confirmOrder(${index})" class="top-button">Confirm</button></td>
                `;
                tableBody.appendChild(row);
            });
        }
        function confirmOrder(index) {
            alert(`Order ${tableData[index].orderId} confirmed!`);
        }
        window.onload = populateTable;
    </script>
</body>    