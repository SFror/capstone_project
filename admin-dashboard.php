<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warehouse Sidebar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Reset Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }
        body {
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
        }
        header {
            padding: 20px;
            text-transform: uppercase;
            font-size: 20px;
            font-weight: bold;
            margin-left: 100px;
        }
         /* Main content */
         .main-content {
            margin-left: 70px;
            padding: 20px;
            flex: 1;
        }

        /* Sidebar */
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
            z-index: 1000;
        }

        #menu-toggle:checked ~ .sidebar {
            width: 180px;
        }

        .sidebar ul {
            list-style: none;
            padding: 10px;
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
            font-size: 18px;
            margin-left: -4px;
            font-weight: 440;
        }

        .sidebar ul li:hover {
            background: rgba(255, 255, 255, 0.47);
            border-radius: 20px;
            
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

        /* Burger Menu */
        .burger-menu {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 24px;
            cursor: pointer;
            color: white;
            transition: transform 0.4s ease-in-out;
            z-index: 1100;
        }

        #menu-toggle:checked + .burger-menu {
            transform: rotate(90deg);
        }


         /* Dashboard Cards */
       .dashboard {
        display: flex;
        flex-wrap: wrap;
        justify-content: center; 
        align-items: center; 
        gap: 20px;
        font-size: 35px;
        padding: 20px;
        width: 100%;
        max-width: 1200px;
        margin: 0 auto; 

        }


        .card {
            display: flex;
            justify-content: space-between;
            align-items: center;
            min-width: 240px;
            max-width: 300px;
            padding: 20px;
            color: white;
            border-radius: 8px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .card p {
            font-size: 24px;
            font-weight: 350;
            letter-spacing: 1px;
            text-align: center;
            margin-top: 25px;
        }
        .card-content h2{
            font-size: 18px;
            font-weight: 550;
            letter-spacing: 0.5px;
        }
        .inventory { background: #007bff; }
        .categories { background: #ff7f0e; }
        .users { background: #28a745; }
        .tracked-items { background: #dc3545; }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .dashboard {
                justify-content: center;
            }
            .card {
                min-width: 200px;
            }
            header {
                margin-left: 0;
                margin-right: 0;
                width: 100%;
            }
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 50px;
            }
            .sidebar ul{
                margin-left: -5px;
            }
            #menu-toggle:checked ~ .sidebar {
                width: 25%;
            }
            .dashboard {
                flex-direction: column;
                align-items: center;
            }
            .card {
                width: 80%;
                max-width: 300px;
            }
            header {
                margin: 0 auto;
                text-align: center;
                width: 100%;
            }
        }

        @media (max-width: 480px) {
            .sidebar {
                width: 50px;
            }

            .sidebar ul{
                margin-left: -5px;
            }
            
            #menu-toggle:checked ~ .sidebar {
                width: 45%;
            }
            .dashboard {
                gap: 15px;
                padding: 15px;
                margin-left: -10px;
            }
            .card {
                width: 90%;
                max-width: 300px;
            }
            .burger-menu {
                font-size: 20px;
            }
            header {
                margin: 0 auto;
                margin-left: -15px;
            }
        }

    </style>
</head>
<body>
    <input type="checkbox" id="menu-toggle">
    <label for="menu-toggle" class="burger-menu">
        <i class="fas fa-bars"></i>
    </label>

    <div class="sidebar">
        <ul>
            <li><i class="fas fa-home"></i><span>Home</span></li>
            <li><i class="fas fa-chart-line"></i><span>Dashboard</span></li>
            <li><i class="fas fa-th-list"></i><span>Categories</span></li>
            <li><i class="fas fa-users"></i><span>Users</span></li>
            <li><i class="fas fa-sign-out-alt"></i><span>Logout</span></li>
        </ul>
    </div>
    <div class="main-content">
        <header>Dashboard</header>
        <div class="dashboard">
            <div class="card inventory">
                <div class="card-content">
                    <h2>Inventory</h2>
                    <p>105</p> 
                </div>
                <i class="fas fa-box icon"></i>
            </div>
            <div class="card categories">
                <div class="card-content">
                    <h2>Categories</h2>
                    <p>20</p>
                </div>
                <i class="fas fa-th-list icon"></i>
            </div>
            <div class="card users">
                <div class="card-content">
                    <h2>Users</h2>
                    <p>11</p>
                </div>
                <i class="fas fa-users icon"></i>
            </div>
            <div class="card tracked-items">
                <div class="card-content">
                    <h2>Tracked Items</h2>
                    <p>75</p>
                </div>
                <i class="fas fa-map-marker-alt icon"></i>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
</body>
</html>