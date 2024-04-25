
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Top 5 Countries to Visit</title>

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
    </style>

</head>

<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 20px; background-color: #f2f2f2; color: #333; text-align: center;">
    <?php
    // Display welcome message with username
    echo '<p style="color: #3498db; position: absolute; top: 0; right: 20px;">Welcome ' . $username . '</p>';
    ?>

    <h1 style="color: #3498db;">Top 5 Countries to Visit</h1>
    
    <div class="navbar">
        <a class="active" href="index.php">Home</a>
        <a href="Contents page.php">About</a>
        <a href="product.php">Products</a>
        <a href="contact.php">Contact</a>
        <a href="login.php">Login</a>
    </div>
    

   


    <div style="border: 2px solid #3498db; border-radius: 10px; padding: 20px; margin: 20px auto; width: 70%; background-color: #fff;">
        <h2 style="color: #2ecc71;">1. Japan</h2>
        <img src="https://img.freepik.com/free-photo/cherry-blossoms-spring-chureito-pagoda-fuji-mountain-sunset-japan_335224-215.jpg?w=1060&t=st=1706099077~exp=1706099677~hmac=413c58e7b79934c1d52981bf826c45e937141dcfabb3fd517433411dec2907da" alt="Japan Image" style="max-width: 100%; height: auto; border-radius: 8px;">
        <p>Japan is a beautiful country known for its rich culture, stunning landscapes, and delicious cuisine.</p>
        <button onclick="window.location.href='https://en.wikipedia.org/wiki/Japan'" style="padding: 12px 20px; background-color: #e74c3c; color: #fff; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">Read More</button>
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <tr>
                <th style="background-color: #3498db; color: #fff; padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">Highlights</th>
                <th style="background-color: #3498db; color: #fff; padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">Local Cuisine</th>
            </tr>
            <tr>
                <td>Cherry Blossoms</td>
                <td>Sushi</td>
            </tr>
            <tr>
                <td>Mount Fuji</td>
                <td>Ramen</td>
            </tr>
        </table>
    </div>


    <div style="border: 2px solid #3498db; border-radius: 10px; padding: 20px; margin: 20px auto; width: 70%; background-color: #fff; box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);">
        <h2 style="color: #2ecc71;">2. Italy</h2>
        <img src="https://img.freepik.com/free-vector/italy-tourism_1268-183.jpg?w=740&t=st=1706099112~exp=1706099712~hmac=2eb24d980f61d6362af7461757e208b16496f056f7c67ef0b9b3593df6e0a759" alt="Italy Image" style="max-width: 100%; height: auto; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <p>Italy offers a perfect blend of history, art, and mouthwatering food. Explore the charming streets of Rome and Venice.</p>
        <button onclick="window.location.href='https://en.wikipedia.org/wiki/Italy'" style="padding: 12px 20px; background-color: #e74c3c; color: #fff; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">Read More</button>
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <tr>
                <th style="background-color: #3498db; color: #fff; padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">Highlights</th>
                <th style="background-color: #3498db; color: #fff; padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">Local Cuisine</th>
            </tr>
            <tr>
                <td>Colosseum</td>
                <td>Pasta</td>
            </tr>
            <tr>
                <td>Venice Canals</td>
                <td>Pizza</td>
            </tr>
        </table>
    </div>


    <div style="border: 2px solid #3498db; border-radius: 10px; padding: 20px; margin: 20px auto; width: 70%; background-color: #fff; box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);">
        <h2 style="color: #2ecc71;">3. India</h2>
        <img src="https://img.freepik.com/free-vector/india-skyline-with-panorama-sky-background-vector-illustration-business-travel-tourism-concept-with-modern-buildings-collage-from-largest-cities-india_596401-484.jpg?w=1380&t=st=1706099168~exp=1706099768~hmac=fce95c572a1033a9e96dbb4e4230b20d4b6ba3e16de416b52e55aff7eef0f53f" alt="India Image" style="max-width: 100%; height: auto; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <p>India is a diverse country with rich history, cultural heritage, and a wide range of delicious regional cuisines.</p>
        <button onclick="window.location.href='https://en.wikipedia.org/wiki/India'" style="padding: 12px 20px; background-color: #e74c3c; color: #fff; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">Read More</button>

        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <tr>
                <th style="background-color: #3498db; color: #fff; padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">Highlights</th>
                <th style="background-color: #3498db; color: #fff; padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">Local Cuisine</th>
            </tr>
            <tr>
                <td>Taj Mahal</td>
                <td>Curry</td>
            </tr>
            <tr>
                <td>Varanasi Ghats</td>
                <td>Biryani</td>
            </tr>
        </table>
    </div>

    <!-- Scotland -->
    <div style="border: 2px solid #3498db; border-radius: 10px; padding: 20px; margin: 20px auto; width: 70%; background-color: #fff; box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);">
        <h2 style="color: #2ecc71;">4. Scotland</h2>
        <img src="https://img.freepik.com/free-photo/loch-duich-surrounding-eilean-donan-castle-scotland_493961-168.jpg?w=1060&t=st=1706098796~exp=1706099396~hmac=1f4990613f76ff681b337d88eec3e14fc2b5403d92a5ab2c1f3e011dea141745" alt="Scotland Image" style="max-width: 100%; height: auto; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <p>Scotland is known for its breathtaking landscapes, historic castles, and rich cultural traditions.</p>
        <button onclick="window.location.href='https://en.wikipedia.org/wiki/Scotland'" style="padding: 12px 20px; background-color: #e74c3c; color: #fff; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">Read More</button>

        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <tr>
                <th style="background-color: #3498db; color: #fff; padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">Highlights</th>
                <th style="background-color: #3498db; color: #fff; padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">Local Cuisine</th>
            </tr>
            <tr>
                <td>Edinburgh Castle</td>
                <td>Haggis</td>
            </tr>
            <tr>
                <td>Loch Ness</td>
                <td>Scottish Shortbread</td>
            </tr>
        </table>
    </div>

    <!-- France -->
    <div style="border: 2px solid #3498db; border-radius: 10px; padding: 20px; margin: 20px auto; width: 70%; background-color: #fff; box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);">
        <h2 style="color: #2ecc71;">5. France</h2>
        <img src="https://img.freepik.com/free-vector/isometric-france-map-infographic_23-2148781853.jpg?w=740&t=st=1706099212~exp=1706099812~hmac=130b7c08fb801b50c56c3a0e6b87322d24a589d104752e80b6b04e7fb9851d8d" alt="France Image" style="max-width: 100%; height: auto; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <p>France, the epitome of romance, boasts iconic landmarks like the Eiffel Tower and world-class cuisine.</p>
        <button onclick="window.location.href='https://en.wikipedia.org/wiki/France'" style="padding: 12px 20px; background-color: #e74c3c; color: #fff; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">Read More</button>

        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <tr>
                <th style="background-color: #3498db; color: #fff; padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">Highlights</th>
                <th style="background-color: #3498db; color: #fff; padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">Local Cuisine</th>
            </tr>
            <tr>
                <td>Eiffel Tower</td>
                <td>Croissants</td>
            </tr>
            <tr>
                <td>Loire Valley</td>
                <td>French Cheese</td>
            </tr>
        </table>
    </div>

</body>

</html>
