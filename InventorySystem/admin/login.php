<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    
    <!-- External Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- Internal Styles -->
    <style>
        /* Base Styles */
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
        }

        body {
            background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), 
                        url('../upload/reddead.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        /* Login Container Styles */
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .login-box {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 30px 20px;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 351px;
            height: 371px;
            max-width: 90%;
            min-height: 371px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            gap: 15px;
        }

        /* Logo and Label Styles */
        .logo {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin: 0 auto;
        }

        .login-label {
            color: #ffffff;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
            font-size: 20px;
            margin: 0;
            padding: 0;
        }

        /* Form Input Styles */
        .input-container {
            position: relative;
            width: 100%;
            margin: 5px 0;
        }

        input[type="text"], 
        input[type="password"] {
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: #ffffff;
            width: calc(100% - 10px);
            height: 40px;
            padding: 10px 40px 10px 10px;
            margin: 5px 5px;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 14px;
        }

        input::placeholder {
            color: rgba(255, 255, 255, 0.8);
        }

        .icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #ffffff;
            font-size: 10px;
        }

        /* Button Styles */
        .login-button {
            width: calc(100% - 10px);
            height: 40px;
            padding: 0;
            background-color: #980102;
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            margin: 5px 5px;
            transition: background-color 0.3s ease;
        }

        .login-button:hover {
            background-color: #FABF49;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-box">
            <img src="../upload/ArtMore.jpg" alt="Logo" class="logo">
            <h1 class="login-label">Login</h1>
            
            <form action="dashboard.php" method="get">
                <div class="input-container">
                    <input type="text" 
                           id="username" 
                           name="username" 
                           placeholder="Username" 
                           required>
                    <i class="fa-solid fa-user icon"></i>
                </div>
                
                <div class="input-container">
                    <input type="password" 
                           id="password" 
                           name="password" 
                           placeholder="Password" 
                           required>
                    <i class="fa-solid fa-lock icon"></i>
                </div>
                
                <button type="submit" class="login-button">Login</button>
            </form>
        </div>
    </div>

    <!-- Form Validation Script -->
    <script>
        function validateForm(event) {
            const username = document.getElementById('username').value.trim();
            const password = document.getElementById('password').value.trim();

            if (!username || !password) {
                alert('Please fill in both fields.');
                event.preventDefault();
            }
        }

        window.onload = function() {
            const form = document.querySelector('form');
            if (form) {
                form.addEventListener('submit', validateForm);
            } else {
                console.error('Form element not found.');
            }
        }
    </script>
</body>
</html>
