<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OneShot - Photography Blog</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff; /* White background */
            color: #000; /* Black text */
        }
        header {
            position: relative;
            background-color: #000; /* Black header background */
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        header img {
            position: absolute;
            top: 20px; /* Adjust top position as needed */
            left: 40px; /* Adjust left position as needed */
            height: 100px; /* Adjust height as needed */
        }
        nav {
            background-color: #000; /* Black navigation background */
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
        }
        nav a.active {
            font-weight: bold;
            color:gold; /* Highlight style for the active link */
        }
        section {
            padding: 20px;
        }
        footer {
            background-color: #000; /* Black footer background */
            color: #fff;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <img src="Screenshot 2024-02-13 182526.png" alt="OneShot Logo"> <!-- Replace "logo.png" with the path to your logo image -->
        <h1>OneShot</h1>
        <p>Your go-to Photography Blog</p>
    </header>

    <nav>
        <a href="Home.php">Home</a>
        <a href="Gallery.php">Gallery</a>
        <a href="Tutorials.php" class="active">Tutorials</a>
        <a href="Community.php">Community</a>
        <a href="About_us.php">About Us</a>
        <a href="cartpg.php">Cart</a>
        <a href="Login.php">Login</a>
    </nav>

    <section>
        <h2>Tutorials</h2>
        <h3>1. Getting Started with Photography</h3>
        <p>Learn the basics of photography, including:</p>
        <ul>
            <li>Understanding camera settings</li>
            <li>Mastering composition techniques</li>
            <li>Utilizing natural light</li>
        </ul>
        
        <h3>2. Advanced Editing Techniques</h3>
        <p>Discover advanced editing techniques using software such as Adobe Photoshop and Lightroom:</p>
        <ul>
            <li>Advanced retouching methods</li>
            <li>Creating stunning effects</li>
            <li>Color grading and correction</li>
        </ul>
        
        <h3>3. Portrait Photography Mastery</h3>
        <p>Learn to capture captivating portraits:</p>
        <ul>
            <li>Posing techniques</li>
            <li>Working with models</li>
            <li>Understanding facial expressions</li>
        </ul>
        
        <!-- Add more tutorials as needed -->
    </section>

    <footer>
        <p>&copy; 2024 OneShot. All rights reserved.</p>
    </footer>
</body>
</html>
