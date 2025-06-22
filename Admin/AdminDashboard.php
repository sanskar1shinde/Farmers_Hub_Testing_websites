<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="AdminDashboard.css">
    <title>Dashboard</title>
</head>
<body>
    <header>
        <div class="header-content">
            <h1>Dashboard</h1>
            <button id="sign-out">Sign Out</button>
        </div>
    </header>
    <div class="dashboard">
        <nav class="sidebar">
            <ul>
                <li id="admin">ADMIN</li>
                <li id="farmer">FARMERS
                    <br>
                    <ul>
                        <li id="view-farmers">View Farmers</li>
                        <li id="add-farmers">Add Farmers</li>
                    </ul>
                </li>
                <li id="customers">CUSTOMERS
                    <br>
                    <ul>
                        <li id="view-customers">View Customers</li>
                        <li id="add-customers">Add Customers</li>
                    </ul>
                    <br>
                </li>
                <li id="products">PRODUCTS</li>
            </ul>
        </nav>
        <main class="main-content">
            <div id="content"></div>
        </main>
    </div>
    <script src="AdminDashboard.js"></script>
</body>
</html>
