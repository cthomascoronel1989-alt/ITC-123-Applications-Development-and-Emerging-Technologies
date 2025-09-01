<!doctype html>
<html lang="en">
<head>
<title>Login</title>
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
<style>
    body {
        font-family: 'Orbitron', monospace;
        background: url("bg.jpg.jpg") no-repeat center center fixed;
        background-size: cover;
        margin: 0;
        padding: 0;
    }
    .login-container {
        width: 300px;
        margin: 100px auto;
        padding: 20px;
        background: rgba(255, 255, 255, 0.85); 
        border-radius: 8px;
        box-shadow: 0 0 15px rgba(0,0,0,0.6);
        text-align: center;
    }
    h2 {
        margin-bottom: 20px;
        color: #ff6600; /* Orange header to match button */
    }
    label {
        display: block;
        margin: 10px 0 5px;
        font-weight: bold;
        text-align: left;
        color: #333;
    }
    input[type="text"], input[type="password"] {
        width: 95%;
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background: #fff;
        color: #000;
        font-family: 'Orbitron', monospace;
    }
    input::placeholder {
        color: #888;
    }
    button {
        width: 100%;
        padding: 10px;
        background-color: #ff6600; /* Orange button */
        border: none;
        border-radius: 5px;
        color: white;
        font-size: 16px;
        cursor: pointer;
        font-family: 'Orbitron', monospace;
        transition: background 0.3s ease;
    }
    button:hover {
        background-color: #cc5200; /* Darker orange on hover */
    }
    .register-link {
        margin-top: 15px;
        display: block;
        font-size: 14px;
        color: #333;
        font-family: 'Orbitron', monospace;
    }
    .register-link a {
        color: #ff6600;
        text-decoration: none;
        font-weight: bold;
    }
    .register-link a:hover {
        text-decoration: underline;
    }
</style>
</head>
<body>
<section>
    <div class="login-container">
        <form method="POST" action="loginprocess.php">
            <h2>User Log-in</h2>

            <label>Username:</label>
            <input type="text" name="username" placeholder="Enter username" required>

            <label>Password:</label>
            <input type="password" name="password" placeholder="Enter password" required>

            <!-- submit button -->
            <button type="submit" name="submit">Submit</button>
        </form>

        <!-- Create Account link -->
        <div class="register-link">
            Don’t have an account? <a href="adduser.html">Create Account</a>
        </div>
    </div>
</section>
</body>
</html>
