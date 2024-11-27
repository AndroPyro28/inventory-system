<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Document</title>
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
            padding-left: 20px;
        }

        .content-wrapper {
            margin-left: 249px;
            margin-top: 60px;
            padding: 20px;
            min-height: calc(100vh - 60px);
        }

        .settings-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            gap: 20px;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        }

        .settings-table {
            background: rgba(30, 30, 30, 0.7); /* Semi-transparent background */
            backdrop-filter: blur(10px); /* Glass blur effect */
            -webkit-backdrop-filter: blur(10px); /* For Safari support */
            border: 1px solid rgba(255, 255, 255, 0.1); /* Subtle border */
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
        }

        /* Optional: Add subtle hover effect */
        .settings-table:hover {
            background: rgba(30, 30, 30, 0.75);
            border: 1px solid rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
            transition: all 0.3s ease;
        }

        .table-header {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
        }

        .table-header i {
            color: #F8B83C;
            font-size: 1.2em;
        }

        .table-header h2 {
            color: #AEB2B7;
            font-family: 'Century Gothic', sans-serif;
            font-size: 1.2em;
            margin: 0;
        }

        .divider {
            height: 1px;
            background: linear-gradient(
                90deg,
                rgba(255, 255, 255, 0) 0%,
                rgba(255, 255, 255, 0.1) 50%,
                rgba(255, 255, 255, 0) 100%
            );
            margin: 15px 0;
        }

        .account-content {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .input-group {
            display: flex;
            flex-direction: column-reverse;
        }

        .input-group input {
            background: rgba(54, 51, 51, 0.5);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 10px;
            border-radius: 4px;
            color: #AEB2B7;
            font-family: 'Century Gothic', sans-serif;
            transition: all 0.3s ease;
        }

        .input-group input:focus {
            background: rgba(54, 51, 51, 0.7);
            border: 1px solid rgba(248, 184, 60, 0.5);
            outline: none;
        }

        .input-group label {
            color: #AEB2B7;
            font-family: 'Century Gothic', sans-serif;
            font-size: 0.9em;
            margin-bottom: 5px;
        }

        .button-group {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        button {
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-family: 'Century Gothic', sans-serif;
            transition: all 0.3s ease;
        }

        .btn-update {
            background-color: #4CAF50;
            color: white;
        }

        .btn-change-password {
            background-color: #2196F3;
            color: white;
        }

        button:hover {
            opacity: 0.9;
            transform: translateY(-1px);
        }

        /* Add these new styles */
        .password-wrapper {
            position: relative;
            width: 100%;
        }

        .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #AEB2B7;
            cursor: pointer;
        }

        .password-requirements {
            margin: 15px 0;
            font-size: 0.9em;
            color: #AEB2B7;
        }

        .requirement {
            margin: 5px 0;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .requirement i {
            font-size: 0.8em;
            color: #666;
        }

        .requirement.valid i {
            color: #4CAF50;
        }

        .btn-update:disabled, .btn-change-password:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .message {
            margin-top: 15px;
            padding: 10px;
            border-radius: 4px;
            display: none;
            align-items: center;
            gap: 8px;
        }

        .message.success {
            background: rgba(76, 175, 80, 0.1);
            color: #4CAF50;
        }

        /* Add animation for messages */
        @keyframes slideIn {
            from { transform: translateY(-10px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .message.show {
            display: flex;
            animation: slideIn 0.3s ease;
        }

        /* Simplified back button styles */
        .back-button-container {
            margin-bottom: 20px;
        }

        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 12px;
            background-color: #403E3E;
            color: #AEB2B7;
            text-decoration: none;
            border-radius: 4px;
            font-family: 'Century Gothic', sans-serif;
            font-size: 14px;
            transition: all 0.2s ease;
        }

        .back-button:hover {
            background-color: #2d2d2d;
            color: #F8B83C;
        }

        .back-button i {
            font-size: 12px;
        }

        /* Modify the select input styles */
        .input-group select {
            background: rgba(54, 51, 51, 0.5);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 10px;
            border-radius: 4px;
            color: #AEB2B7;
            font-family: 'Century Gothic', sans-serif;
            transition: all 0.3s ease;
            width: 100%;
            cursor: pointer;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }

        /* Modify the dropdown arrow to only appear for select elements */
        .input-group:has(select)::after {
            content: '\f107';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #AEB2B7;
            pointer-events: none;
        }

        /* Style for focus state */
        .input-group select:focus {
            background: rgba(54, 51, 51, 0.7);
            border: 1px solid rgba(248, 184, 60, 0.5);
            outline: none;
        }

        /* Style for select options */
        .input-group select option {
            background: #363333;
            color: #AEB2B7;
            padding: 10px;
        }

        /* Remove the dropdown arrow from select elements */
        .input-group:has(select)::after {
            display: none; /* Hide the custom dropdown arrow */
        }
        
        /* Remove default dropdown arrow from select elements */
        .input-group select {
            background-image: none;
        }
    </style>

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
                    <li>
                        <a href="dashboard.php">
                            <i class="fas fa-tachometer-alt"></i>Dashboard
                        </a>
                    </li>
                    
                    <!-- User Management Dropdown -->
                    <li class="dropdown open">
                        <a href="#" class="dropdown-toggle">
                            <i class="fas fa-users"></i>User Management
                            <i class="fas fa-chevron-down arrow"></i>
                        </a>
                        <ul class="submenu">
                            <li><a href="manageGroups.php"><i class="fas fa-users-cog"></i>Manage Groups</a></li>
                            <li class="active"><a href="manageUsers.php"><i class="fas fa-user-cog"></i>Manage Users</a></li>
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
                    <div class="dropdown-content">
                        <a href="#" id="profileBtn"><i class="fas fa-user"></i>Profile</a>
                        <a href="#" id="settingsBtn"><i class="fas fa-cog"></i>Settings</a>
                        <a href="#" id="logoutBtn"><i class="fas fa-sign-out-alt"></i>Logout</a>
                    </div>
                </div>
            </div>
    
            <!-- Content Wrapper -->
            <div class="content-wrapper">
                <!-- Simplified back button -->
                <div class="back-button-container">
                    <a href="manageUsers.php" class="back-button">
                        <i class="fas fa-arrow-left"></i> Back
                    </a>
                </div>
                
                <div class="settings-container">
                    <!-- First Table -->
                    <div class="settings-table">
                        <div class="table-header">
                            <i class="fas fa-user-edit"></i>
                            <h2>UPDATE CARLOS MIGUEL B. OCHIA ACCOUNT</h2>
                        </div>
                        <div class="divider"></div>
                        <form id="updateUserForm">
                            <div class="account-content">
                                <div class="input-group">
                                    <input type="text" id="updateName" value="Carlos Miguel B. Ochia" data-original="Carlos Miguel B. Ochia">
                                    <label>Name</label>
                                </div>
                                <div class="input-group">
                                    <input type="text" id="updateUsername" value="Admin" data-original="Admin">
                                    <label>Username</label>
                                </div>
                                <div class="input-group">
                                    <select id="updateRole" data-original="Admin">
                                        <option value="Admin">Admin</option>
                                        <option value="Staff">Staff</option>
                                    </select>
                                    <label>User Role</label>
                                </div>
                                <div class="input-group">
                                    <select id="updateStatus" data-original="Active">
                                        <option value="Active">Active</option>
                                        <option value="Deactive">Deactive</option>
                                    </select>
                                    <label>Status</label>
                                </div>
                                <button type="submit" class="btn-update" disabled>
                                    <i class="fas fa-save"></i> Update
                                </button>
                            </div>
                        </form>
                        <div class="message success" id="updateSuccessMessage">
                            <i class="fas fa-check-circle"></i>
                            Updated Successfully!
                        </div>
                    </div>

                    <!-- Second Table -->
                    <div class="settings-table">
                        <div class="table-header">
                            <i class="fas fa-key"></i>
                            <h2>CHANGE CARLOS MIGUEL B. OCHIA PASSWORD</h2>
                        </div>
                        <div class="divider"></div>
                        <form id="changePasswordForm">
                            <div class="account-content">
                                <div class="input-group">
                                    <div class="password-wrapper">
                                        <input type="password" id="oldPassword" placeholder="Type your current password">
                                        <button type="button" class="toggle-password" data-target="oldPassword">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                    <label>Current Password</label>
                                </div>
                                <div class="input-group">
                                    <div class="password-wrapper">
                                        <input type="password" id="newPassword" placeholder="Type your new password">
                                        <button type="button" class="toggle-password" data-target="newPassword">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                    <label>New Password</label>
                                </div>
                                <div class="password-requirements">
                                    <p class="requirement" data-requirement="length">
                                        <i class="fas fa-circle"></i> At least 8 characters
                                    </p>
                                    <p class="requirement" data-requirement="uppercase">
                                        <i class="fas fa-circle"></i> One uppercase letter
                                    </p>
                                    <p class="requirement" data-requirement="lowercase">
                                        <i class="fas fa-circle"></i> One lowercase letter
                                    </p>
                                    <p class="requirement" data-requirement="number">
                                        <i class="fas fa-circle"></i> One number
                                    </p>
                                </div>
                                <button type="submit" class="btn-change-password" disabled>
                                    <i class="fas fa-key"></i> Change
                                </button>
                            </div>
                        </form>
                        <div class="message success" id="passwordSuccessMessage">
                            <i class="fas fa-check-circle"></i>
                            Changed Successfully!
                        </div>
                    </div>
                </div>
            </div>
    
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

                // Form change detection for update form
                const updateForm = document.getElementById('updateUserForm');
                const updateBtn = updateForm.querySelector('.btn-update');
                const updateInputs = updateForm.querySelectorAll('input, select');

                updateInputs.forEach(input => {
                    input.addEventListener('input', () => {
                        let hasChanges = false;
                        updateInputs.forEach(field => {
                            if (field.value !== field.dataset.original) {
                                hasChanges = true;
                            }
                        });
                        updateBtn.disabled = !hasChanges;
                    });
                });

                // Password validation and requirements
                const oldPasswordInput = document.getElementById('oldPassword');
                const newPasswordInput = document.getElementById('newPassword');
                const passwordBtn = document.querySelector('.btn-change-password');
                const requirements = {
                    length: str => str.length >= 8,
                    uppercase: str => /[A-Z]/.test(str),
                    lowercase: str => /[a-z]/.test(str),
                    number: str => /[0-9]/.test(str)
                };

                function validatePasswordForm() {
                    const newValue = newPasswordInput.value;
                    let validRequirements = true;

                    // Check password requirements
                    Object.keys(requirements).forEach(req => {
                        const element = document.querySelector(`[data-requirement="${req}"]`);
                        const isValid = requirements[req](newValue);
                        element.classList.toggle('valid', isValid);
                        if (!isValid) validRequirements = false;
                    });

                    // Enable button only if old password is filled and new password meets requirements
                    passwordBtn.disabled = !(oldPasswordInput.value && validRequirements);
                }

                oldPasswordInput.addEventListener('input', validatePasswordForm);
                newPasswordInput.addEventListener('input', validatePasswordForm);

                // Toggle password visibility for both password fields
                document.querySelectorAll('.toggle-password').forEach(button => {
                    button.addEventListener('click', () => {
                        const targetId = button.getAttribute('data-target');
                        const input = document.getElementById(targetId);
                        const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                        input.setAttribute('type', type);
                        button.querySelector('i').classList.toggle('fa-eye');
                        button.querySelector('i').classList.toggle('fa-eye-slash');
                    });
                });

                // Password form submission
                const passwordForm = document.getElementById('changePasswordForm');
                passwordForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    alert('Completely Changed the Password');
                });
            });
        </script>
</body>
</html>