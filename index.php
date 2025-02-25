<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warehouse Inventory Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
            <li><a href="#" class="text-decoration-none text-white d-flex align-items-center"><i class="fas fa-home"></i><span>Home</span></a></li>
            <li><a href="admin-dashboard.php" class="text-decoration-none text-white d-flex align-items-center"><i class="fas fa-chart-line"></i><span>Dashboard</span></a></li>
            <li><a href="activity-logs.php" class="text-decoration-none text-white d-flex align-items-center"><i class="fas fa-clipboard-list"></i><span>Activity</span></a></li>
            <li><a href="categories.php" class="text-decoration-none text-white d-flex align-items-center"><i class="fas fa-th-list"></i><span>Categories</span></a></li>
            <li><a href="users.php" class="text-decoration-none text-white d-flex align-items-center"><i class="fas fa-users"></i><span>Users</span></a></li>
            <li><a href="login.php" class="text-decoration-none text-white d-flex align-items-center"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a></li>
        </ul>
    </div>

    <div class="main-content ">
        <h1 class="fs-3 mb-5 fw-bold">Warehouse Inventory Management</h1>
        <div class="mb-3 col-md-4 px-5">
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
                <input type="text" id="searchInput" class="form-control" placeholder="Search..." onkeyup="searchTable()">
            </div>
        </div>
        <div class="table-responsive px-5">
    <table class="table table-hover table-bordered" id="inventoryTable">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Item Name</th>
                <th>Category</th>
                <th>Quantity</th>
                <th>Location</th>
                <th>Current Date</th>
                <th>Expiration Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Canned Beans</td>
                <td>Food</td>
                <td>100</td>
                <td>Rack 1</td>
                <td class="current-date"></td>
                <td class="expiration-date"></td>
                <td>
                    <button class="btn btn-primary btn-sm" onclick="editRow(this)"><i class="fas fa-edit"></i> Edit</button>
                    <button class="btn btn-success btn-sm" onclick="archiveRow(this)"><i class="fas fa-archive"></i> Archive</button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Tuna</td>
                <td>Food</td>
                <td>60</td>
                <td>Rack 2</td>
                <td class="current-date"></td>
                <td class="expiration-date"></td>
                <td>
                    <button class="btn btn-primary btn-sm" onclick="editRow(this)"><i class="fas fa-edit"></i> Edit</button>
                    <button class="btn btn-success btn-sm" onclick="archiveRow(this)"><i class="fas fa-archive"></i> Archive</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

    </div>
    <script>
        function searchTable() {
          let input = document.getElementById("searchInput").value.toLowerCase();
          let rows = document.querySelectorAll("#inventoryTable tbody tr");
          let found = false; // Track if a match is found

          rows.forEach(row => {
              if (row.textContent.toLowerCase().includes(input)) {
                  row.style.display = "";
                  found = true;
              } else {
                  row.style.display = "none";
              }
          });
      
          // Check if no items were found and display a message
          let tableBody = document.querySelector("#inventoryTable tbody");
          let noResultRow = document.getElementById("noResultRow");
      
          if (!found) {
              if (!noResultRow) {
                  noResultRow = document.createElement("tr");
                  noResultRow.id = "noResultRow";
                  noResultRow.innerHTML = `<td colspan="7" class="text-center text-danger">Item Not Found</td>`;
                  tableBody.appendChild(noResultRow);
              }
          } else {
              if (noResultRow) {
                  noResultRow.remove();
              }
          }
        }      

              function editRow(button) {
                  let row = button.closest("tr");
                  let cells = row.querySelectorAll("td");
                  Swal.fire({
                      title: "Edit Item",
                      input: "text",
                      inputValue: cells[1].textContent,
                      showCancelButton: true,
                      confirmButtonText: "Save",
                  }).then((result) => {
                      if (result.isConfirmed) {
                          cells[1].textContent = result.value;
                          Swal.fire("Updated!", "Item details updated.", "success");
                      }
                  });
              }

              function archiveRow(button) {
                  let row = button.closest("tr");
                  Swal.fire({
                      title: "Are you sure?",
                      text: "This item will be archived!",
                      icon: "warning",
                      showCancelButton: true,
                      confirmButtonColor: "#d33",
                      confirmButtonText: "Yes, archive it!"
                  }).then((result) => {
                      if (result.isConfirmed) {
                          row.style.display = "none";
                          Swal.fire("Archived!", "The item has been archived.", "success");
                      }
                  });
              }


         function formatDate(date) {
            let d = new Date(date);
            let month = String(d.getMonth() + 1).padStart(2, '0'); 
            let day = String(d.getDate()).padStart(2, '0');
            let year = d.getFullYear();
            return `${month}/${day}/${year}`;
         }

            document.addEventListener("DOMContentLoaded", function () {
                
                let currentDate = new Date();
                let expirationDate = new Date();
                expirationDate.setMonth(expirationDate.getMonth() - 9);

                 // Ensure the year is correctly adjusted if necessary
                 if (currentDate.getMonth() < 3) {
                     expirationDate.setFullYear(currentDate.getFullYear() - 0);
                 }

                let currentDateFormatted = formatDate(currentDate);
                let expirationDateFormatted = formatDate(expirationDate);

                document.querySelectorAll(".current-date").forEach(el => el.textContent = currentDateFormatted);
                document.querySelectorAll(".expiration-date").forEach(el => el.textContent = expirationDateFormatted);
            });

    </script>
     <script src="js/bootstrap.bundle.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
