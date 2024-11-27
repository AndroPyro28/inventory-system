<!DOCTYPE html>
<html lang="en">
    <!-- Head Section -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    </head>

    <body>
        <!-- Sidebar Navigation -->
        <div class="sidebar">
            <!-- Logo Section -->
            <div class="logo-container">
                <img src="../upload/ArtMore.jpg" alt="ArtMore Logo">
                <h1>INVENTORY SYSTEM</h1>
            </div>

            <!-- Navigation Links -->
            <ul class="nav-links">
                <!-- Dashboard Link -->
                <li class="active">
                    <a href="dashboard.php">
                        <i class="fas fa-tachometer-alt"></i>Dashboard
                    </a>
                </li>
                
                <!-- User Management Dropdown -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                        <i class="fas fa-users"></i>User Management
                        <i class="fas fa-chevron-down arrow"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="manageGroups.php"><i class="fas fa-users-cog"></i>Manage Groups</a></li>
                        <li><a href="manageUsers.php"><i class="fas fa-user-cog"></i>Manage Users</a></li>
                    </ul>
                </li>
                
                <!-- Categories Link -->
                <li>
                    <a href="categories.php">
                        <i class="fas fa-tags"></i>Categories
                    </a>
                </li>
                
                <!-- Products Dropdown -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                        <i class="fas fa-box"></i>Products
                        <i class="fas fa-chevron-down arrow"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="manageProducts.php"><i class="fas fa-boxes"></i>Manage Products</a></li>
                        <li><a href="addProducts.php"><i class="fas fa-plus-circle"></i>Add Products</a></li>
                    </ul>
                </li>
                
                <!-- Sales Dropdown -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                        <i class="fas fa-shopping-cart"></i>Sales
                        <i class="fas fa-chevron-down arrow"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="manageSales.php"><i class="fas fa-tasks"></i>Manage Sales</a></li>
                        <li><a href="addSales.php"><i class="fas fa-cart-plus"></i>Add Sales</a></li>
                    </ul>
                </li>
                
                <!-- Sales Report Dropdown -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                        <i class="fas fa-chart-bar"></i>Sales Report
                        <i class="fas fa-chevron-down arrow"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="salesByDate.php"><i class="fas fa-calendar-alt"></i>Sales by Date</a></li>
                        <li><a href="monthlySales.php"><i class="fas fa-calendar-check"></i>Monthly Sales</a></li>
                        <li><a href="dailySales.php"><i class="fas fa-calendar-day"></i>Daily Sales</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- Top Navigation Bar -->
        <div class="topbar">
            <div class="time-label">November 25, 2024, 2:13pm</div>
            <div class="profile-container">
                <img src="../upload/redemption.jpg" alt="Profile Picture">
                <span class="profile-name">Carlos Miguel B. Ochia</span>
                <i class="fas fa-caret-down"></i>
                <div class="dropdown-content">
                    <a href="#" id="profileBtn"><i class="fas fa-user"></i>Profile</a>
                    <a href="#" id="settingsBtn"><i class="fas fa-cog"></i>Settings</a>
                    <a href="#" id="logoutBtn"><i class="fas fa-sign-out-alt"></i>Logout</a>
                </div>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="main-content">
            <!-- Statistics Cards -->
            <div class="stats-container">
                <!-- Users Stats -->
                <div class="stat-card">
                    <div class="icon-holder" style="background-color: #750605;">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-info">
                        <h2 class="stat-count">3</h2>
                        <p class="stat-label">Users</p>
                    </div>
                </div>

                <!-- Categories Stats -->
                <div class="stat-card">
                    <div class="icon-holder" style="background-color: #F8B83C;">
                        <i class="fas fa-tags"></i>
                    </div>
                    <div class="stat-info">
                        <h2 class="stat-count">4</h2>
                        <p class="stat-label">Categories</p>
                    </div>
                </div>

                <!-- Products Stats -->
                <div class="stat-card">
                    <div class="icon-holder" style="background-color: #2C3E50;">
                        <i class="fas fa-box"></i>
                    </div>
                    <div class="stat-info">
                        <h2 class="stat-count">2</h2>
                        <p class="stat-label">Products</p>
                    </div>
                </div>

                <!-- Sales Stats -->
                <div class="stat-card">
                    <div class="icon-holder" style="background-color: #27AE60;">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="stat-info">
                        <h2 class="stat-count">5</h2>
                        <p class="stat-label">Sales</p>
                    </div>
                </div>
            </div>

            <!-- Data Tables Section -->
            <div class="tables-container">
                <!-- Highest Selling Products -->
                <div class="dashboard-table">
                    <div class="table-header">
                        <i class="fas fa-crown"></i>
                        <h2>HIGHEST SELLING PRODUCTS</h2>
                    </div>
                    <hr class="header-line">
                    <table>
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Total Sold</th>
                                <th>Total Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Sample Product 1</td>
                                <td>150</td>
                                <td>200</td>
                            </tr>
                            <tr>
                                <td>Sample Product 2</td>
                                <td>120</td>
                                <td>180</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Latest Sales -->
                <div class="dashboard-table">
                    <div class="table-header">
                        <i class="fas fa-shopping-cart"></i>
                        <h2>LATEST SALES</h2>
                    </div>
                    <hr class="header-line">
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Product Name</th>
                                <th>Date</th>
                                <th>Total Sale</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Sample Product</td>
                                <td>2024-03-20</td>
                                <td>₱1,500.00</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Sample Product 2</td>
                                <td>2024-03-19</td>
                                <td>₱2,300.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Recently Added Products -->
                <div class="dashboard-table">
                    <div class="table-header">
                        <i class="fas fa-plus-circle"></i>
                        <h2>RECENTLY ADDED PRODUCT</h2>
                    </div>
                    <hr class="header-line">
                    <div class="product-list">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="../upload/redemption.jpg" alt="Product">
                            </div>
                            <div class="product-details">
                                <div class="price">₱1,500.00</div>
                                <div class="product-name">Sample Product</div>
                                <div class="category">Sample Category</div>
                            </div>
                        </div>
                        <!-- Add more product cards if needed -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Styles -->
        <style>
            /* Base Styles */
            @import url('https://fonts.cdnfonts.com/css/century-gothic');
            @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800;900&display=swap');

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            /* Body and Background */
            body {  
                background: url('../upload/artmoreshop.jpg') no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                min-height: 100vh;
                position: relative;
            }

            body::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.75);
                z-index: -1;
            }

            /* Sidebar Styles */
            .sidebar {
                width: 249px;
                height: 100vh;
                background-color: #1E1E1E;
                position: fixed;
                left: 0;
                top: 0;
                padding: 0;
                display: flex;
                flex-direction: column;
                z-index: 1;
            }

            .logo-container {
                background-color: #750605;
                padding: 15px;
                display: flex;
                align-items: center;
                gap: 15px;
                margin-bottom: 30px;
                min-height: 80px;
            }

            .logo-container img {
                width: 50px;
                height: 50px;
                border-radius: 50%;
                object-fit: cover;
                background-color: #750605;
            }

            .logo-container h1 {
                color: #F8B83C;
                font-family: 'Montserrat', sans-serif;
                font-size: 14px;
                font-weight: 700;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
                max-width: 180px;
                line-height: 1.2;
            }

            /* Navigation Styles */
            .nav-links {
                list-style: none;
                padding: 0 15px;
                overflow-y: auto;
                flex-grow: 1;
            }

            .nav-links li {
                margin-bottom: 5px;
            }

            .nav-links a {
                display: flex;
                align-items: center;
                color: #AEB2B7;
                text-decoration: none;
                padding: 12px 15px;
                border-radius: 5px;
                font-family: 'Century Gothic', sans-serif;
                transition: all 0.3s ease;
            }

            .nav-links a:hover {
                background-color: #2d2d2d;
                color: #F8B83C;
            }

            .nav-links i {
                margin-right: 10px;
                width: 20px;
                text-align: center;
            }

            /* Topbar Styles */
            .topbar {
                position: fixed;
                top: 0;
                left: 249px; /* Same as sidebar width */
                right: 0;
                height: 60px;
                background-color: #363333;
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 0 20px;
                z-index: 1;
            }

            .time-label {
                color: #AEB2B7;
                font-family: 'Century Gothic', sans-serif;
            }

            .profile-container {
                position: relative;
                background-color: #403E3E;
                width: 200px;
                height: 36px;
                border-radius: 20px;
                display: flex;
                align-items: center;
                padding: 0 15px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            .profile-container:hover {
                background-color: #4a4848;
            }

            .profile-container img {
                width: 30px;
                height: 30px;
                border-radius: 50%;
                object-fit: cover;
            }

            .profile-name {
                color: #AEB2B7;
                font-family: 'Century Gothic', sans-serif;
                margin-left: 10px;
                font-size: 14px;
                flex-grow: 1;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                top: calc(100% + 5px);
                right: 0;
                background-color: #403E3E;
                min-width: 200px;
                border-radius: 8px;
                opacity: 0;
                transform: translateY(-10px);
                transition: all 0.3s ease;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
                z-index: 1000;
            }

            .dropdown-content.show-dropdown {
                display: block;
                opacity: 1;
                transform: translateY(0);
            }

            .dropdown-content a {
                color: #AEB2B7;
                font-family: 'Century Gothic', sans-serif;
                padding: 12px 16px;
                text-decoration: none;
                display: flex;
                align-items: center;
                gap: 10px;
                transition: all 0.2s ease;
            }

            .dropdown-content a:first-child {
                border-radius: 8px 8px 0 0;
            }

            .dropdown-content a:last-child {
                border-radius: 0 0 8px 8px;
            }

            #profileBtn:hover {
                background-color: #2d2d2d;
                color: #4CAF50;
            }

            #settingsBtn:hover {
                background-color: #2d2d2d;
                color: #2196F3;
            }

            #logoutBtn:hover {
                background-color: #2d2d2d;
                color: #ff4747;
            }

            .fa-caret-down {
                transition: transform 0.3s ease;
                color: #AEB2B7;
            }

            .profile-container.active .fa-caret-down {
                transform: rotate(180deg);
            }

            /* Main Content Styles */
            .main-content {
                margin-left: 249px;
                margin-top: 60px;
                padding: 30px 40px;
                position: relative;
            }

            /* Card and Table Styles */
            .stats-container {
                display: flex;
                gap: 25px;
                flex-wrap: wrap;
                margin-bottom: 30px;
                padding: 0 20px;
                justify-content: space-between;
            }

            .stat-card {
                width: 250px;
                height: 112px;
                background-color: #1E1E1E;
                border-radius: 8px;
                display: flex;
                overflow: hidden;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                margin: 0;
            }

            .stat-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 6px 12px rgba(0, 0, 0, 0.4);
            }

            .icon-holder {
                width: 99.46px;
                height: 112px;
                display: flex;
                align-items: center;
                justify-content: center;
                position: relative;
            }

            .icon-holder i {
                font-size: 2.5rem;
                color: rgba(255, 255, 255, 0.9);
            }

            .stat-info {
                flex-grow: 1;
                padding: 20px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                background-color: #1E1E1E;
                border-left: 1px solid rgba(255, 255, 255, 0.1);
            }

            .stat-count {
                font-family: 'Century Gothic', sans-serif;
                font-size: 32px;
                color: #ffffff;
                margin-bottom: 5px;
                font-weight: bold;
            }

            .stat-label {
                font-family: 'Century Gothic', sans-serif;
                font-size: 16px;
                color: #AEB2B7;
                text-transform: uppercase;
                letter-spacing: 1px;
            }

            .icon-holder i {
                transition: transform 0.3s ease;
            }

            .stat-card:hover .icon-holder i {
                transform: scale(1.1);
            }

            /* Responsive Styles */
            @media screen and (max-width: 1400px) {
                .stats-container {
                    justify-content: flex-start;
                    gap: 20px;
                }
                
                .stat-card {
                    margin-bottom: 10px;
                }
            }

            @media screen and (min-width: 1401px) {
                .stats-container {
                    padding: 0 40px;
                }
            }

            .tables-container {
                display: flex;
                gap: 20px;
                padding: 0 40px;
                margin-top: 30px;
            }

            .dashboard-table {
                flex: 1;
                background-color: #1E1E1E;
                border-radius: 8px;
                padding: 20px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }

            .table-header {
                display: flex;
                align-items: center;
                gap: 10px;
                margin-bottom: 10px;
            }

            .table-header i {
                color: #F8B83C;
                font-size: 20px;
            }

            .table-header h2 {
                color: #AEB2B7;
                font-family: 'Century Gothic', sans-serif;
                font-size: 16px;
                font-weight: bold;
            }

            .header-line {
                border: none;
                border-bottom: 1px solid #333;
                margin: 10px 0 20px 0;
            }

            table {
                width: 100%;
                border-collapse: collapse;
            }

            th, td {
                padding: 12px;
                text-align: left;
                font-family: 'Century Gothic', sans-serif;
                border-bottom: 1px solid #333;
            }

            th {
                color: #F8B83C;
                font-weight: bold;
                font-size: 14px;
            }

            td {
                color: #AEB2B7;
                font-size: 14px;
            }

            tr:hover td {
                background-color: #2d2d2d;
            }

            .product-list {
                margin-top: 10px;
            }

            .product-card {
                display: flex;
                gap: 15px;
                padding: 10px;
                border-radius: 6px;
                transition: background-color 0.3s ease;
            }

            .product-card:hover {
                background-color: #2d2d2d;
            }

            .product-image {
                width: 80px;
                height: 80px;
                border-radius: 6px;
                overflow: hidden;
            }

            .product-image img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .product-details {
                flex: 1;
                position: relative;
            }

            .price {
                position: absolute;
                top: 0;
                right: 0;
                background-color: #F8B83C;
                color: #1E1E1E;
                padding: 5px 10px;
                border-radius: 4px;
                font-family: 'Century Gothic', sans-serif;
                font-weight: bold;
                font-size: 14px;
            }

            .product-name {
                color: #AEB2B7;
                font-family: 'Century Gothic', sans-serif;
                font-size: 16px;
                margin-top: 5px;
                margin-bottom: 10px;
            }

            .category {
                color: #666;
                font-family: 'Century Gothic', sans-serif;
                font-size: 14px;
            }

            /* Add hover effects */
            .dashboard-table {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .dashboard-table:hover {
                transform: translateY(-5px);
                box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            }

            /* Active state */
            .nav-links li.active > a {
                background-color: #750605;
                color: #F8B83C;
            }

            /* Dropdown styles */
            .dropdown .submenu {
                display: none;
                list-style: none;
                padding-left: 30px;
                margin-top: 5px;
            }

            .dropdown.open .submenu {
                display: block;
            }

            .submenu a {
                padding: 10px 15px;
                font-size: 0.9em;
            }

            .dropdown-toggle {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .arrow {
                transition: transform 0.3s ease;
            }

            .dropdown.open .arrow {
                transform: rotate(180deg);
            }

            /* Hover effects */
            .nav-links a:hover {
                background-color: #2d2d2d;
                color: #F8B83C;
            }

            .submenu a:hover {
                background-color: #363636;
                padding-left: 20px;
                transition: all 0.3s ease;
            }
        </style>

        <!-- Scripts -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Initialize Variables
                const profileContainer = document.querySelector('.profile-container');
                const dropdownContent = document.querySelector('.dropdown-content');
                const profileBtn = document.getElementById('profileBtn');
                const settingsBtn = document.getElementById('settingsBtn');
                const logoutBtn = document.getElementById('logoutBtn');
                let isDropdownOpen = false;

                // Dropdown Functions
                function openDropdown() {
                    dropdownContent.classList.add('show-dropdown');
                    profileContainer.classList.add('active');
                    isDropdownOpen = true;
                }

                function closeDropdown() {
                    dropdownContent.classList.remove('show-dropdown');
                    profileContainer.classList.remove('active');
                    isDropdownOpen = false;
                }

                // Event Listeners
                profileContainer.addEventListener('click', function(e) {
                    e.stopPropagation();
                    if (isDropdownOpen) {
                        closeDropdown();
                    } else {
                        openDropdown();
                    }
                });

                document.addEventListener('click', function(e) {
                    if (isDropdownOpen && !dropdownContent.contains(e.target)) {
                        closeDropdown();
                    }
                });

                // Navigation Handlers
                profileBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    window.location.href = 'profile.php';
                });

                settingsBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    window.location.href = 'settings.php';
                });

                logoutBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    const confirmLogout = confirm('Are you sure you want to logout?');
                    
                    if (confirmLogout) {
                        window.location.href = 'login.php';
                    }
                });

                // Keyboard Accessibility
                document.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape' && isDropdownOpen) {
                        closeDropdown();
                    }
                });

                // Sidebar Dropdowns
                const dropdowns = document.querySelectorAll('.dropdown');
                dropdowns.forEach(dropdown => {
                    const toggleBtn = dropdown.querySelector('.dropdown-toggle');
                    
                    toggleBtn.addEventListener('click', (e) => {
                        e.preventDefault();
                        
                        // Close other dropdowns
                        dropdowns.forEach(other => {
                            if (other !== dropdown && other.classList.contains('open')) {
                                other.classList.remove('open');
                            }
                        });
                        
                        // Toggle current dropdown
                        dropdown.classList.toggle('open');
                    });
                });
            });
        </script>
    </body>
</html>