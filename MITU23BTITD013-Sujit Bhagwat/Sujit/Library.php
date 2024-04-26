<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Game Buying Page</title>
<style>
  /* CSS styles */
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
  }

  .container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  h1 {
    text-align: center;
    color: #333;
    margin-bottom: 30px;
  }

  .games {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    grid-gap: 20px;
  }

  .game {
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
  }

  .game:hover {
    transform: translateY(-5px);
  }

  .game h2 {
    color: #333;
    margin-bottom: 10px;
  }

  .game p {
    color: #666;
    margin-bottom: 20px;
  }

  .game img {
    max-width: 100%;
    height: auto;
    border-radius: 5px;
    margin-bottom: 10px;
  }

  .game a.button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
  }

  .game a.button:hover {
    background-color: #0056b3;
  }
</style>
</head>
<body>

<div class="container">
    <h1>Welcome to the Game Adda</h1>
    
    <!-- Game links -->
    <div class="games">
        <!-- Game 1 -->
        <div class="game">
            <img src="https://images.hdqwalls.com/wallpapers/the-walking-dead-the-final-season-4k-si.jpg" alt="Walking Dead">
            <h2>Walking Dead</h2>
            <p>The Walking Dead is an American post-apocalyptic horror drama television series developed by Frank Darabont...</p>
            <a href="https://store.steampowered.com/app/207610/The_Walking_Dead/" target="_blank" class="button">Buy on Steam</a>
        </div>
        <!-- Game 2 -->
        <div class="game">
            <img src="https://wallpapersmug.com/download/2048x1152/8e024c/clash-of-clans-halloween.jpg" alt="Clash Of Clan">
            <h2>Clash Of Clan</h2>
            <p>LEAD YOUR CLAN TO VICTORY! Answer the call of the mustache! Join the international fray that is Clash of Clans...</p>
            <a href="https://store.steampowered.com/app/1264050/Clash_of_Clans/" target="_blank" class="button">Buy on Steam</a>
        </div>
        <!-- Game 3 -->
        <div class="game">
            <img src="https://www.igta5.com/images/official-artwork-vinewood.jpg" alt="GTA-5">
            <h2>GTA-5</h2>
            <p>Grand Theft Auto V: An Open-World Marvel Grand Theft Auto V continues to set the gold standard for open-world games...</p>
            <a href="https://store.steampowered.com/app/271590/Grand_Theft_Auto_V/" target="_blank" class="button">Buy on Steam</a>
        </div>
        <!-- Add more games here -->
    </div>
</div>

</body>
</html>
