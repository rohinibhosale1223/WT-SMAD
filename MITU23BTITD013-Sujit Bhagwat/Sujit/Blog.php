<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Game Blog</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="login.html">Login</a></li> <!-- Add this line for login -->
        </ul>
    </nav>
    <h1>Welcome to Game Blog</h1>
    <div class="games">
        <div class="game" id="game1">
            <img src="C:\Users\sujit\Downloads\game1.jpeg" alt="Game 1">
            <h2>Walking Dead</h2>
            <p>Walking Dead</p>
            <button onclick="showDetails('game1')">View Details</button>
        </div>
        <div class="game" id="game2">
            <img src="C:\Users\sujit\Downloads\image2.jpeg" alt="Game 2">
            <h2>Clash Of Clan</h2>
            <p>Clash of Clan</p>
            <button onclick="showDetails('game2')">View Details</button>
        </div>
        <div class="game" id="game3">
            <img src="C:\Users\sujit\Downloads\img3.jpeg" alt="Game 3">
            <h2>GTA-5</h2>
            <p>Description</p>
            <button onclick="showDetails('game3')">View Details</button>
        </div>
        <div class="game" id="game4">
            <img src="C:\Users\sujit\Downloads\hollow knight.jpg" alt="Game 4">
            <h2>Hollow Knight</h2>
            <p>Hollow Knight.</p>
            <button onclick="showDetails('game4')">View Details</button>
        </div>
        <div class="game" id="game5">
            <img src="C:\Users\sujit\Downloads\god.jpg" alt="Game 5">
            <h2>God Of War</h2>
            <p>God of War.</p>
            <button onclick="showDetails('game5')">View Details</button>
        </div>
    </div>
    <div id="details" class="hidden">
        <h2 id="game-title"></h2>
        <p id="game-description"></p>
        <button onclick="hideDetails()">Close</button>
    </div>
</div>

<script src="script.js"></script>
</body>
</html>
