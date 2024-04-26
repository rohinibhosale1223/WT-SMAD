<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>

        .header {
            background-color: #b18e77;
            padding-left: 15px 0;
            padding-right: 15px 0;
            font-family:Georgia, 'Times New Roman';
        }

        .navbar {
            justify-content: space-between;
            margin-right: 5%;
            display: flex;
            align-items: center;
        }

        .nav-text
        {
            color: #f2e4d6;
            text-align: left;
            padding-left: 40px;
            font-size: 50px;
        }

        .nav-list {
            align-items: right;
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .nav-item {
            display: inline-block;
            margin-right: 40px;
        }

        .nav-link {
            color: #f2e4d6;
            text-decoration:underline;
            font-size: 20px;
        }

        .nav-link:hover
        {
            color: #fff5ec;
            text-decoration:#b18e77;
            font-size: 22px;
            text-decoration: solid;
        }

        body {
            font-family:Georgia, 'Times New Roman';
            background-color:#fbf4ed;
            margin: 0;
            padding: 0;
        }

        .allBlocks1{
            display: flex;
            flex-wrap:nowrap;
        }

        .image1
        {
            margin-left: 70px;
            margin-top: 130px;
            filter: drop-shadow(0px 0px 15px #b18e77);
        }

        .block1 {
            width: 30%;
            margin-left: 70px;
            margin-top: 95px;
            margin-bottom: 70px;
            padding: 20px;
            background-color: #f2e4d6;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .block2 {
            width: 30%;
            margin-left: 70px;
            margin-right: 70px;
            margin-top: 95px;
            margin-bottom: 70px;
            padding: 20px;
            background-color: #f2e4d6;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .block2Sub {
            justify-content: space-evenly;
            display: flex;
        }

        .vl 
        {
          margin-top: 20px;
          border-right: 2px solid; color: #b18e77;
          height: 300px;
          border-radius: 2px;
        }

        .allBlocks2{
            display: flex;
            flex-wrap:nowrap;
        }

        .block3 {
            width: 45%;
            margin-left: 70px;
            margin-bottom: 70px;
            padding-left: 30px;
            padding-top: 30px;
            padding-right: 30px;
            background-color: #f2e4d6;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .projimg {
            width: 30%;
            border-radius: 8px;
            margin-bottom: 50px;
        }
        
        .projsub {
            display: flex;
            flex-wrap:nowrap;
            padding-bottom: 0px;
        }

        .block4 {
            width: 45%;
            margin-left: 70px;
            margin-bottom: 70px;
            margin-right: 68px;
            padding-left: 30px;
            padding-top: 30px;
            padding-right: 30px;
            background-color: #f2e4d6;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .block5 {
            width: 88.5%;
            margin-left: 70px;
            margin-right: 70px;
            margin-bottom: 70px;
            padding: 20px;
            background-color: #f2e4d6;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .cRow1 {
            color: #755f51;
            margin-bottom: 27px;
            margin-top: 27px;
            display: flex;
            justify-content: space-between;
            margin-left: 70px;
            margin-right: 70px;
            font-size: 20px;
        }
        .cRow2 {
            font-size: 20px;
            color: #755f51;
            display: flex;
            justify-content: space-between;
            margin-left: 70px;
            margin-right: 125px;
            margin-bottom: 30px;
        }

         .socialimg
        {
            border-radius: 10px;
            width: 40px;
        }

        h1 {
            color: #755f51;
            text-align: center;
        }

        h2{
            color: #755f51;
        }

        p {
            color: #252525;
            line-height: 1.6;
        }

        .skills {
            margin-top: 10px;
        }

        .skill {
            display: flex;
            justify-content: space-between;
            margin-bottom: 18px;
        }

        .skill-name {
            font-weight: bold;
            color: #755f51;
        }

        .footer {
            margin-top: 30px;
            position:relative;
            bottom: 0px;
            width: 100%;
            background-color: #755f51;
            text-align: center;
            padding: 25px 0;
            color: #f2e4d6;
        }

        .footer-text {
            color: #f2e4d6;
            margin: 0;
        }
    </style>
</head>
<body>
    <header class="header">
        <nav class="navbar">
        <div>
            <h1 class="nav-text">Portfolio</h1>
        </div>
        <div>
            <ul class="nav-list">
                <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="products.html" class="nav-link">Products</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link">About Me</a></li>
                <?php
                // Check if the 'username' parameter is set in the URL
                if (isset($_GET['username'])) {
                    // Display the welcome message
                    echo '<li class="nav-item"><a href="#" class="nav-link">Welcome ' . htmlspecialchars($_GET['username']) . '</a></li>';
                } else {
                    // Display the Login/Register button
                    echo '<li class="nav-item"><a href="login.php" class="nav-link">Login/Register</a></li>';
                }
                ?>
            </ul>
        </nav>
    </header>
    <div class="allBlocks1">

        <div class="image1">
            <img src="assets/portrait.jpg" class="w3-round-large" alt="portrait" style=" border-radius: 15px; width: 300px">
        </div>

        <div class="block1">
            <h1>Education</h1>
                <h2>School</h2>
                <p>The Bishop's School, Undri. Pune.<br>ICSE BOARD: 86.6%</p>
                <h2> Junior College</h2>
                <p>RIMS International School & Junior College, Undri. Pune.<br> HSC BOARD : Ranked 3rd in college</p>
                <h2> College</h2>
                <p>MIT ADT University, Loni Kalbhor.<br> UG: Information Technology</p>
        </div>

        <div class="block2">
            <h1>Skills</h1>
            <div class="block2Sub">
            <div class="skills">
                <h2>Hard Skills</h2>
                <div class="skill">
                    <span class="skill-name">HTML,CSS,JS</span>
                </div>
                <div class="skill">
                    <span class="skill-name">Flutter</span>
                </div>
                <div class="skill">
                    <span class="skill-name">Android Development</span>
                </div>
                <div class="skill">
                    <span class="skill-name">iOS App Development</span>
                </div>
                <div class="skill">
                    <span class="skill-name">Web App Development</span>
                </div>
                <div class="skill">
                    <span class="skill-name">Java Programming</span>
                </div>
                <div class="skill">
                    <span class="skill-name">C,C++ Programming</span>
                </div>
                </div>
                <div class="vl"></div>
                <div style="margin-left: 7px;" class="skills">
                <h2>Soft Skills</h2>
                <div class="skill">
                    <span class="skill-name">Communication</span>
                </div>
                <div class="skill">
                    <span class="skill-name">Observation</span>
                </div>
                <div class="skill">
                    <span class="skill-name">Decision Making</span>
                </div>
                <div class="skill">
                    <span class="skill-name">Multi Tasking</span>
                </div>
                <div class="skill">
                    <span class="skill-name">Deadline Management</span>
                </div>
                <div class="skill">
                    <span class="skill-name"> Stress Handling</span>
                </div>
            </div>
        </div>
        </div>
    </div>

    <div class="allBlocks2">

        <div class="block3">
            <h1>App Projects</h1>
            <h2>PawFect Care</h2>
            <div class="projsub">
                <p>PawFect Care is a onestop pet health and care app,<br> 
                    which is made to provide pet parents with easy acess<br> to vet, 
                    pet grooming, product and accessory services <br> <br>
                    The prime focus of the app it to provide
                    verfied <br>imformation to the pet parents and ensure safe 
                    and <br> apt care for pets, alongside providing products 
                    and accessories at reasonable prices</p>
                <img class="projimg" src="assets/pawfect.jpg">   
            </div>
        </div>

        <div class="block4">
            <h1>Game Projects</h1>
            <h2>Mini Marvels</h2>
            <div class="projsub"> 
                <p>Mini marvels is a gamified platform which educates<br>
                    childern from the age of 8-16 years old
                    about the legal<br> rights that they pos-+  by law.<br><br><br> 
                    The game in the form of story game mode and survival<br>
                    mode mini games works on making the childern aware<br>
                    of their rights and resposiblities there by turning learning<bR>
                    into a fun experience.</p>
                <img style="margin-left: 30px;" class="projimg" src="assets/minimarvel.jpg">   
            </div>
        </div>

    </div>

    <div class="block5">
        <h1>Contact</h1>
            <div class="cRow1">
            <a style="color: #755f51;"  href="https://www.linkedin.com/in/gurneet-juneja-0822ba258?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"
            <span> <img class="socialimg" src="assets/linkedin.png"> Linked In</span></a>
            <a style="color: #755f51;" href="https://www.instagram.com/gurneetjuneja?igsh=MW9ndzl0eXZqaDF6aA%3D%3D&utm_source=qr"
            <span> <img class="socialimg" src="assets/instagram.jpeg"> Instagram</span></a>
            <a style="color: #755f51;" href="https://www.facebook.com/nee444?mibextid=LQQJ4d"
            <span> <img class="socialimg" src="assets/facebook.png"> FaceBook</span></a>
            </div>
            <div class="cRow2">
            <a style="color: #755f51;" href="https://www.snapchat.com/add/gurneet444?share_id=Z6jc-Q5YS4ydoJ2RbQL8fQ&locale=en_IN"
            <span> <img class="socialimg" src="assets/snapchat.jpeg"> Snapchat</span></a>
            <a style="color: #755f51;" href="https://www.goodreads.com/user/show/150299685"
            <span> <img class="socialimg" src="assets/goodreads.jpeg"> Goodreads</span></a>
            <a style="color: #755f51;" href="https://x.com/themindofnee?s=11"
            <span style="margin-right: 100px;"> <img class="socialimg" src="assets/x.png"> X</span></a>
            </div>
            
    </div>
  
    <footer class="footer">
        <p class="footer-text">&copy; 2024 My Portfolio. All rights reserved.</p>
    </footer>
</body>
</html>