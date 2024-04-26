<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Game Streaming Platforms</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
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

  ul {
    list-style: none;
    padding: 0;
  }

  li {
    margin-bottom: 20px;
    padding: 15px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    background-color: #f4f4f4;
    transition: transform 0.3s ease;
  }

  li:hover {
    transform: translateY(-5px);
  }

  .platform {
    display: flex;
    align-items: center;
  }

  .platform img {
    width: 60px;
    height: 60px;
    margin-right: 20px;
    border-radius: 50%;
    border: 2px solid #fff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  .platform-info {
    flex: 1;
  }

  .platform a {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
  }

  .platform a:hover {
    background-color: #0056b3;
  }
</style>
</head>
<body>

<div class="container">
    <h1>Watch Game Streams</h1>
    
    <ul>
        <li class="platform">
            <img src="https://img.icons8.com/color/48/000000/twitch--v1.png" alt="Twitch">
            <div class="platform-info">
                <h3>Twitch</h3>
                <p>Watch live streams of various games.</p>
            </div>
            <a href="https://www.twitch.tv/" target="_blank">Watch Now</a>
        </li>
        <li class="platform">
            <img src="https://img.icons8.com/color/48/000000/youtube-play.png" alt="YouTube Gaming">
            <div class="platform-info">
                <h3>YouTube Gaming</h3>
                <p>Live gaming streams and videos.</p>
            </div>
            <a href="https://www.youtube.com/gaming" target="_blank">Watch Now</a>
        </li>
        <li class="platform">
            <img src="https://img.icons8.com/color/48/000000/facebook-gaming.png" alt="Facebook Gaming">
            <div class="platform-info">
                <h3>Facebook Gaming</h3>
                <p>Live gaming streams and community.</p>
            </div>
            <a href="https://www.facebook.com/gaming/" target="_blank">Watch Now</a>
        </li>
        <!-- Add more links to other streaming platforms here -->
    </ul>
</div>

</body>
</html>
