
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog - Operating Systems</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #333;
            overflow: hidden;
        }
        .navbar-right {
        float: right;
        }
        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
        }

        .login-button-container {
            position: fixed;
            top: 20px;
            right: 20px;
            display: flex; /* Ensure login buttons are next to each other */
        }

        .login-button {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 10px; /* Add margin between login and register buttons */
        }

        .os-card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        .os-card h2 {
            margin-top: 0;
            color: #333;
        }

        .os-card p {
            color: #666;
        }

        .os-card a {
            display: inline-block;
            margin-top: 10px;
            color: #007BFF;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <?php include 'navbar.html' ?>
<?php
// Assuming you're checking the existence of 'username' in the URL or session
$username = isset($_GET['username']) ? $_GET['username'] : null;

if ($username): ?>
    <div class="container">
        <div class="os-card">
            <h2>Windows</h2>
            <p>Windows is a series of graphical operating systems developed, marketed, and sold by Microsoft. It is known for its user-friendly interface and wide range of applications.</p>
            <a href="windows-blog.php?username=<?php echo $username; ?>">Read More</a>
        </div>
        <div class="os-card">
            <h2>macOS</h2>
            <p>macOS is a series of graphical operating systems developed and marketed by Apple Inc. It is known for its sleek design, seamless integration with other Apple products, and robust security features.</p>
            <a href="macos-blog.php?username=<?php echo $username; ?>">Read More</a>
        </div>
        <div class="os-card">
            <h2>Linux</h2>
            <p>GNU/Linux is a family of open-source operating systems based on the Linux kernel. It is characterized by its customizability and the support of a wide range of hardware and software.</p>
            <a href="linux-blog.php?username=<?php echo $username; ?>">Read More</a>
        </div>
    </div>
<?php else: ?>
    <div class="container">
        <div class="os-card">
            <h2>Windows</h2>
            <p>Windows is a series of graphical operating systems developed, marketed, and sold by Microsoft. It is known for its user-friendly interface and wide range of applications.</p>
            <a href="windows-blog.php">Read More</a>
        </div>
        <div class="os-card">
            <h2>macOS</h2>
            <p>macOS is a series of graphical operating systems developed and marketed by Apple Inc. It is known for its sleek design, seamless integration with other Apple products, and robust security features.</p>
            <a href="macos-blog.php">Read More</a>
        </div>
        <div class="os-card">
            <h2>Linux</h2>
            <p>GNU/Linux is a family of open-source operating systems based on the Linux kernel. It is characterized by its customizability and the support of a wide range of hardware and software.</p>
            <a href="linux-blog.php">Read More</a>
        </div>
    </div>
<?php endif; ?>
</body>
</html>
