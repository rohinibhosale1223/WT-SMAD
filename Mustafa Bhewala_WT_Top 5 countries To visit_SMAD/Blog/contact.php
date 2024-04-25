<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        /* CSS styles for navigation bar */
        .navbar {
            overflow: hidden;
            background-color: #333;
        }

        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Style the active/current link */
        .navbar a.active {
            background-color: #555;
            color: white;
        }

        /* Common styles for content */
        .content {
            border: 2px solid #3498db;
            border-radius: 10px;
            padding: 20px;
            margin: 20px auto;
            width: 70%;
            background-color: #fff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .content h2 {
            color: #2ecc71;
        }

        .content p {
            color: #666;
        }

        /* Contact info styles */
        .contact-info {
            margin-bottom: 20px;
        }

        .contact-info h3 {
            color: #3498db;
            margin-bottom: 10px;
        }

        .contact-info p {
            margin-bottom: 5px;
        }
    </style>
</head>

<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 20px; background-color: #f2f2f2; color: #333; text-align: center;">

    <!-- Navigation Bar -->
    <div class="navbar">
        <a href="index.php">Home</a>
        <a href="Contents page.php">About</a>
        <a href="product.php">Products</a>
        <a class="active" href="contact.php">Contact</a>
        <a href="login.php">Login</a>
    </div>

    <h1 style="color: #3498db;">Contact Us</h1>

    <!-- Contact Information -->
    <div class="content">
        <h2>Contact Information</h2>

        <div class="contact-info">
            <h3>Email</h3>
            <p>bhewalamustafa@gmail.com</p>
        </div>

        <div class="contact-info">
            <h3>Phone Number</h3>
            <p>+91-8401380079</p>
        </div>

        <div class="contact-info">
            <h3>Address</h3>
            <p>MIT ADT University, Loni Kalbhor, 412201</p>
        </div>

        <div class="contact-info">
            <h3>Additional Details</h3>
            <p>Feel free to reach out to us with any inquiries or feedback. We'd love to hear from you!</p>
        </div>
    </div>

</body>

</html>
