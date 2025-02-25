<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warehouse Inventory Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
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
        }

        .sidebar ul li i {
            font-size: 18px;
            width: 25px;
            text-align: center;
        }

        .sidebar ul li span {
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
            font-size: 15px;
        }
        span{
            margin-left: 10px;
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
    </style>
</head>
<body>
    <input type="checkbox" id="menu-toggle">
    <label for="menu-toggle" class="burger-menu">
        <i class="fas fa-bars"></i>
    </label>
    <div class="sidebar">
        <ul class="list-unstyled ms-1 mt-2">
            <li><a href="landing-page.php" class="text-decoration-none text-white d-flex align-items-center"><i class="fas fa-home"></i><span>Home</span></a></li>
            <li><a href="dashboard.php" class="text-decoration-none text-white d-flex align-items-center"><i class="fas fa-chart-line"></i><span>Dashboard</span></a></li>
            <li><a href="activity-logs.php" class="text-decoration-none text-white d-flex align-items-center"><i class="fas fa-clipboard-list"></i><span>Activity</span></a></li>
            <li><a href="categories.php" class="text-decoration-none text-white d-flex align-items-center"><i class="fas fa-th-list"></i><span>Categories</span></a></li>
            <li><a href="users.php" class="text-decoration-none text-white d-flex align-items-center"><i class="fas fa-users"></i><span>Users</span></a></li>
            <li><a href="login.php" class="text-decoration-none text-white d-flex align-items-center"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a></li>
        </ul>
    </div>
    </div>
     <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
