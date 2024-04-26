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
            overflow: hidden;
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
        /* Style for the horizontal div */
        .photographerContainer {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px;
        }
        .photographerDiv {
            width: 30%; /* Adjust width to fit three photos in one line */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .photographerDiv img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .photographerDetails {
            margin-top: 10px;
        }

        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black overlay */
            backdrop-filter: blur(5px); /* Add blur effect */
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 999; /* Ensure modal is on top of other content */
        }

        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            display: flex;
        }

        .modal-image {
            width: 50%;
            padding-right: 20px;
        }

        .modal-details {
            width: 50%;
        }

        .modal-close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
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
        <a href="Home.php" class="active">Home</a>
        <a href="Gallery.php">Gallery</a>
        <a href="Tutorials.php">Tutorials</a>
        <a href="Community.php">Community</a>
        <a href="About_us.php">About Us</a>
        <a href="cartpg.php">Cart</a>
        <a href="Login.php">Login</a>
    </nav>

    <section>
        <h2>Welcome to OneShot</h2>
        <p>Explore the world through the lens. Discover stunning photography, learn new techniques, and be part of our vibrant community.</p>
        <p>Start your photographic journey today!</p>
    </section>

    <div class="photographerContainer">
        <div class="photographerDiv" onclick="showImageDetails('download (1).jpeg', 'Photographer 3', 'City, Country', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac risus eget massa maximus efficitur non et justo.');" >
            <img src="download (1).jpeg" alt="Photographer 1">
        </div>

        <div class="photographerDiv"  onclick="showImageDetails('download (1).jpg', 'Photographer 3', 'City, Country', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac risus eget massa maximus efficitur non et justo.');">
            <img src="download (1).jpg" alt="Photographer 2">
        </div>

        <div class="photographerDiv" onclick="showImageDetails('download (2).jpg', 'Photographer 3', 'City, Country', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac risus eget massa maximus efficitur non et justo.');">
            <img src="download (2).jpg" alt="Photographer 3">
        </div>

        <!-- Add more photographerDiv divs as needed -->
    </div>

    <footer>
        <p>&copy; 2024 OneShot. All rights reserved.</p>
    </footer>

    <div id="modalOverlay" class="modal-overlay">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="modal-close" onclick="closeModal()">×</span>
        <div class="modal-image">
            <img id="modalImage" src="" alt="">
        </div>
        <div class="modal-details" id="imageDetails"></div>
    </div>
</div>

<script>
    function showImageDetails(imageUrl, photographerName, location, about) {
        // Show modal overlay
        let modalOverlay = document.getElementById('modalOverlay');
        modalOverlay.style.display = "flex";

        // Set image source
        let modalImage = document.getElementById('modalImage');
        modalImage.src = imageUrl;

        // Set image details
        let imageDetails = document.getElementById('imageDetails');
        imageDetails.innerHTML = `
            <h2>${photographerName}</h2>
            <p>Location: ${location}</p>
            <p>About the Photographer: ${about}</p>
        `;
    }

    function closeModal() {
        // Hide modal overlay
        let modalOverlay = document.getElementById('modalOverlay');
        modalOverlay.style.display = "none";
    }
</script>

</body>
</html>
