<!DOCTYPE html>
<html>
<head>
    <title>Gallery</title>
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
            position: relative; /* Ensure relative positioning for absolute positioning of the background image */
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
            padding: 5px;
            height: calc(100vh - 220px); /* Adjust based on your header and footer height */
            overflow-y: auto; /* Enable vertical scroll when content overflows */
        }
        .photographerDiv {
            width: 30%; /* Adjust width to fit three photos in one line */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
            position: relative; /* Relative positioning for absolute positioning of image */
        }
        .photographerDiv img {
            width: 50%;
            height: 50%;
            border-radius: 5px;
            cursor: pointer; /* Add cursor pointer for clickable images */
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

        /* Background image styles */
        .background-image {
            position: absolute;
            top: 60px; /* Adjust based on your header height */
            left: 0;
            width: 100%;
            height: calc(100% - 120px); /* Adjust based on your header and footer height */
            z-index: -1; /* Ensure it stays behind other content */
            background-size: cover;
            background-position: center;
            filter: blur(5px); /* Add blur effect */
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
        <a href="Gallery.php" class="active">Gallery</a>
        <a href="Tutorials.php">Tutorials</a>
        <a href="Community.php">Community</a>
        <a href="About_us.php">About Us</a>
        <a href="cartpg.php">Cart</a>
        <a href="Login.php">Login</a>
    </nav>
    </form>
    </nav>
    <h1>Most view</h1>
    <div class="gallery">
      <!-- Thumbnails for Gallery -->
      <div class="thumbnail" onclick="openModal('m1.png')">
        <img src="g.jpg" alt="Thumbnail 1" />
      </div>
      <div class="thumbnail" onclick="openModal('m2.png')">
        <img src="g1.jpeg" alt="Thumbnail 2" />
      </div>
      <div class="thumbnail" onclick="openModal('m3.png')">
        <img src="m3.png" alt="Thumbnail 3" />
      </div>
      <div class="thumbnail" onclick="openModal('m4.png')">
        <img src="m4.png" alt="Thumbnail 3" />
      </div>
      <div class="thumbnail" onclick="openModal('m5.png')">
        <img src="m5.png" alt="Thumbnail 3" />
      </div>
      <div class="thumbnail" onclick="openModal('m6.png')">
        <img src="m6.png" alt="Thumbnail 3" />
      </div>
      <!-- More thumbnails can be added here -->
    </div>
    <br />
    <h1>BMW //M Series</h1>
    <div class="gallery">
      <!-- Thumbnails for Gallery -->
      <div class="thumbnail" onclick="openModal('b1.png')">
        <img src="b1.png" alt="Thumbnail 1" />
      </div>
      <div class="thumbnail" onclick="openModal('b2.png')">
        <img src="b2.png" alt="Thumbnail 2" />
      </div>
      <div class="thumbnail" onclick="openModal('b3.png')">
        <img src="b3.png" alt="Thumbnail 3" />
      </div>
      <div class="thumbnail" onclick="openModal('b4.png')">
        <img src="b4.png" alt="Thumbnail 3" />
      </div>
      <div class="thumbnail" onclick="openModal('b5.png')">
        <img src="b5.png" alt="Thumbnail 3" />
      </div>
      <div class="thumbnail" onclick="openModal('b6.png')">
        <img src="b6.png" alt="Thumbnail 3" />
      </div>
      <!-- More thumbnails can be added here -->
    </div>
    <h1>Pagani</h1>
    <div class="gallery">
      <!-- Thumbnails for Gallery -->
      <div class="thumbnail" onclick="openModal('p1.png')">
        <img src="p1.png" alt="Thumbnail 1" />
      </div>
      <div class="thumbnail" onclick="openModal('p2.png')">
        <img src="p2.png" alt="Thumbnail 2" />
      </div>
      <div class="thumbnail" onclick="openModal('p3.png')">
        <img src="p3.png" alt="Thumbnail 3" />
      </div>
      <div class="thumbnail" onclick="openModal('p4.png')">
        <img src="p4.png" alt="Thumbnail 3" />
      </div>
      <div class="thumbnail" onclick="openModal('p5.png')">
        <img src="p5.png" alt="Thumbnail 3" />
      </div>
      <div class="thumbnail" onclick="openModal('p6.png')">
        <img src="p6.png" alt="Thumbnail 3" />
      </div>
      <!-- More thumbnails can be added here -->
    </div>
    <div id="myModal" class="modal">
      <span class="close" onclick="closeModal()">&times;</span>
      <div class="modal-content">
        <img id="modalImage" src="" />
      </div>
    </div>

    <footer>
        <p>&copy; 2024 OneShot. All rights reserved.</p>
    </footer>

    <!-- Background image -->
    <div class="background-image" style="background-image: url('g.jpg');"></div>

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
      function openModal(imageSrc) {
        document.getElementById("modalImage").src = imageSrc;
        document.getElementById("myModal").style.display = "block";
      }

      function closeModal() {
        document.getElementById("myModal").style.display = "none";
      }
    </script>

</body>
</html>