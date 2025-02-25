<?php 
    include 'sidebar-import.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity Logs</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            user-select: none;
            font-family: "Poppins", sans-serif;
        }
        body {
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        #menu-toggle {
            display: none;
        }

        .sidebar {
            width: 60px;
            height: 100vh;
            background: #007bff;
            color: white;
            position: fixed;
            left: 0;
            top: 0;
            padding-top: 60px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            transition: width 0.4s ease-in-out;
        }

        #menu-toggle:checked ~ .sidebar {
            width: 180px;
        }

        .sidebar ul {
            padding: 0;
            width: 100%;
        }

        .sidebar ul li {
            padding: 15px;
            cursor: pointer;
            display: flex;
            align-items: center;
            width: 100%;
            transition: background 0.4s;
            gap: 10px;
            font-size: 16px;
            font-weight: 440;
        }

        .sidebar ul li:hover {
            background: rgba(255, 255, 255, 0.47);
            border-radius: 20px;
            margin-left: 5px;
        }

        .sidebar ul li i {
            font-size: 18px;
            width: 30px;
            text-align: center;
        }

        .sidebar ul li span {
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
            font-size: 15px;
        }

        #menu-toggle:checked ~ .sidebar ul li span {
            opacity: 1;
        }

        .burger-menu {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 24px;
            cursor: pointer;
            color: white;
            transition: transform 0.4s ease-in-out;
            z-index: 10;
        }

        #menu-toggle:checked + .burger-menu {
            transform: rotate(90deg);
        }

        .main-content {
            flex: 1;
            padding: 20px;
            background: #f4f4f4;
            margin-left: 60px;
            transition: margin-left 0.4s ease-in-out;
        }

        #menu-toggle:checked ~ .main-content {
            margin-left: 180px;
        }
    </style> -->
</head>
<body>
    <!-- <input type="checkbox" id="menu-toggle">
    <label for="menu-toggle" class="burger-menu">
        <i class="fas fa-bars"></i>
    </label>
    <div class="sidebar">
        <ul class="list-unstyled ms-1 mt-2">
            <li><i class="fas fa-home"></i><span>Home</span></li>
            <li><i class="fas fa-chart-line"></i><span>Dashboard</span></li>
            <li><i class="fas fa-th-list"></i><span>Categories</span></li>
            <li><i class="fas fa-users"></i><span>Users</span></li>
            <li><i class="fas fa-sign-out-alt"></i><span>Logout</span></li>
        </ul>
    </div> -->
    <div class="main-content">
        <h1 class="fs-3 mb-4 fw-bold">Activity Logs</h1>

        <div class="row mb-3">
            <div class="col-md-4 ms-2 mt-3 px-5">
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                    <input type="text" id="searchInput" class="form-control" placeholder="Search logs..." onkeyup="searchTable()">
                </div>
            </div>
        </div>

        <div class="table-responsive px-5">
            <table class="table table-hover table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th>Date & Time</th>
                        <th>User</th>
                        <th>Action</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody id="logsTable">
                    <tr>
                        <td>2025-02-23 10:30 AM</td>
                        <td>Kevin</td>
                        <td>Added Inventory</td>
                        <td>New stock of Electronics added.</td>
                    </tr>
                    <tr>
                        <td>2025-02-22 02:15 PM</td>
                        <td>Pakz</td>
                        <td>Updated Item</td>
                        <td>Updated item details for Product ID 123.</td>
                    </tr>
                    <tr>
                        <td>2025-02-21 09:45 AM</td>
                        <td>Admin</td>
                        <td>Deleted User</td>
                        <td>Removed inactive user 'user123'.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        function searchTable() {
            let input = document.getElementById("searchInput").value.toLowerCase();
            let table = document.getElementById("logsTable");
            let rows = table.getElementsByTagName("tr");
            for (let i = 0; i < rows.length; i++) {
                let rowText = rows[i].textContent.toLowerCase();
                rows[i].style.display = rowText.includes(input) ? "" : "none";
            }
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
