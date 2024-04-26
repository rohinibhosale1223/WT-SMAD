<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Game Blog</title>
<link rel="stylesheet" href="styles.css">
<style>
/* Styles for the about page */
body {
  font-family: Arial, sans-serif;
  background-color: #f8f9fa;
  margin: 0;
  padding: 0;
  color: #333;
}

.container {
  max-width: 1200px;
  margin: 20px auto;
  padding: 0 20px;
}

h1 {
  text-align: center;
  margin-bottom: 20px;
  color: #007bff;
  font-size: 36px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
}

nav {
  text-align: center;
  background-color: #333;
  padding: 10px 0;
  margin-bottom: 20px;
  border-radius: 10px;
}

nav ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

nav ul li {
  display: inline-block;
  margin: 0 10px;
}

nav ul li a {
  color: #fff;
  text-decoration: none;
  padding: 10px 20px;
  border-radius: 5px;
  transition: background-color 0.3s ease-in-out;
  font-size: 18px;
  font-weight: bold;
}

nav ul li a:hover {
  background-color: #555;
}

.games {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin-top: 20px;
}

.game {
  width: calc(50% - 20px);
  margin: 20px 0;
  text-align: center;
  position: relative;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
  cursor: pointer;
  overflow: hidden;
}

.game:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.game img {
  width: 100%;
  height: auto;
  max-width: 100%;
  object-fit: cover;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
}

.details {
  position: absolute;
  bottom: -100%;
  left: 0;
  right: 0;
  background-color: rgba(255, 255, 255, 0.9);
  padding: 20px;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
  text-align: left;
  transition: bottom 0.3s ease-in-out;
}

.game:hover .details {
  bottom: 0;
}

.game h2 {
  margin-top: 10px;
  margin-bottom: 5px;
  color: #007bff;
}

.game p {
  margin-bottom: 10px;
  color: #333;
}

#details {
  text-align: center;
  margin-top: 40px;
}

#details button {
  margin-top: 20px;
  padding: 10px 20px;
  font-size: 16px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
}

#details button:hover {
  background-color: #0056b3;
}


</style>
</head>
<body>

<div class="container">
<nav>
    <h1>Game Blog</h1>
    <ul>
        <li><span>Welcome, <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest'; ?></span></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="contactus.php">Contact Us</a></li> 
        <li><a href="cart1.php">Shop Here</a></li>
        <li><a href="Library.php">Game Adda</a></li>
        <li><a href="live.php">Watch NOW</a></li>
    </ul>
</nav>

    
    <h1>Welcome <span style="font-family: 'Courier New', Courier, monospace;">sujit</span></h1>

    <!-- Game cards -->
    <div class="games">
        <!-- Game 1 -->
        <div class="game" id="game1">
            <img src="game1.jpeg" alt="Game 1">
            <h2>Walking Dead</h2>
            <div class="details hidden">
                <p>The Walking Dead is an American post-apocalyptic horror drama television series developed by Frank Darabont, based on the comic book series of the same name by Robert Kirkman, Tony Moore, and Charlie Adlard.</p>
            </div>
        </div>
        <!-- Game 2 -->
        <div class="game" id="game2">
            <img src="image2.jpeg" alt="Game 2">
            <h2>Clash Of Clan</h2>
            <div class="details hidden">
                <p>LEAD YOUR CLAN TO VICTORY!
                    Answer the call of the mustache! Join the international fray that is Clash of Clans.</p>
            </div>
        </div>
        <!-- Game 3 -->
        <div class="game" id="game3">
            <img src="img3.jpeg" alt="Game 3">
            <h2>GTA-5</h2>
            <div class="details hidden">
                <p>Grand Theft Auto V: An Open-World Marvel
                    Grand Theft Auto V continues to set the gold standard for open-world games with its sprawling yet meticulously crafted map.</p>
            </div>
        </div>
        <!-- Game 4 -->
        <div class="game" id="game4">
            <img src="hollow knight.jpg" alt="Game 4">
            <h2>Hollow Knight</h2>
            <div class="details hidden">
                <p>
                    Hollow Knight: A Metroidvania Marvel
                    Hollow Knight stands as a pinnacle of modern Metroidvania games. Its beauty, vastness, and abundance of hidden treasures make it an experience capable of captivating players for countless hours.</p>
            </div>
        </div>
        <!-- Game 5 -->
        <div class="game" id="game5">
            <img src="god.jpg" alt="Game 5">
            <h2>God Of War</h2>
            <div class="details hidden">
                <p>
                    God of War: A Masterpiece Reborn
                    God of War made a colossal impact upon its 2018 debut as a PlayStation exclusive, clinching IGN’s prestigious Game of the Year award.</p>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.game').forEach(game => {
        game.addEventListener('click', () => {
            const details = game.querySelector('.details');
            details.classList.toggle('hidden');
        });
    });
</script>

</body>
</html>
