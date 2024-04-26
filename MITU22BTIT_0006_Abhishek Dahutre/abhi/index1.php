<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
        crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Revved Riders | Bike Blog</title>
    
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Revved Riders</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
            crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
            crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Revved Riders | Bike Blog</title>
    </head>
    
    <body>
    
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">Revved Riders</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
                    <ul class="navbar-nav ">
                        <?php if (isset($_GET['username'])) {
                            // Display the welcome message within a container
                            echo '<div class="welcome-container"><p class="welcome-item">Welcome ' . htmlspecialchars($_GET['username']) . '</p></div>';
                        } ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cart3.php">Cart</a>
                        </li>
                        <?php
                            // Check if the 'username' parameter is set in the URL
                            if (isset($_GET['username'])) {
                                            // Display the welcome message
                                            echo '<li class="nav-item"><a href="index1.php" class="nav-link">Logout</a></li>';
                            } else {
                                            // Display the Login/Register button
                                            echo '<li class="nav-item"><a href="loginbike.php" class="nav-link">Login/Register</a></li>';
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    
            <main>
                <section>
                    <div class="wellcome">
                        <div class="wellcomeMsg">
                            <div class="headTag">Bike Blog</div>
                            <div class="subTag">Ignite Your Passion for the Road</div>
                        </div>
                    </div>
                </section>
        
                <section id="features">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="sectionHead">Featured Bikes</div>
                                <hr>
                                <br>
                            </div>
                            <!-- Bike 1 -->
                            <div class="col-md-4">
                                <div class="box">
                                    <div class="bike-img">
                                        <img src="kawasaki-ninja-250-1.jpg" alt="Kawasaki Ninja 300">
                                    </div>
                                    <h4>Kawasaki Ninja 300</h4>
                                    <p>For MY2022, the Kawasaki Ninja 300 is offered in three colours - Lime Green, Candy Lime Green, and Ebony. Power on the 2022 Kawasaki Ninja 300 comes from the familiar 296 cc liquid-cooled, parallel-twin engine that was upgraded to BS6 emission norms. The motor develops 38.4 bhp at 11,000 rpm and 26.1 Nm of peak torque at 10,000 rpm, while paired with a 6-speed gearbox. It continues to be one of sportier 300 cc motorcycles in India..</p>
                                </div>
                            </div>
                            <!-- Bike 2 -->
                            <div class="col-md-4">
                                <div class="box">
                                    <div class="bike-img">
                                        <img src="qj motor srk400.jpg" alt="QJ Motor SRK 400 ">
                                    </div>
                                    <h4>QJ Motor SRK 400 </h4>
                                    <p>The SRK 400 is a street naked gets an aggressive design and is powered by a 400 cc, twin-cylinder, liquid-cooled engine. The unit develops 40.3 bhp and 37 Nm and sends power to the rear wheel via a 6-speed gearbox and a chain drive. The bike features a USD fork up front with a monoshock at the rear. Stopping power comes via dual discs up front and a single disc at the rear. It is priced at Rs. 3.59 lakh and while there are few options in the segment, the brand is fairly new and has a poor recall..</p>
                                </div>
                            </div>
                            <!-- Bike 3 -->
                            <div class="col-md-4">
                                <div class="box">
                                    <div class="bike-img">
                                        <img src="ktmrc390.jpg" alt="KTM RC 390">
                                    </div>
                                    <h4>KTM RC 390</h4>
                                    <p>The KTM RC 390 is a high-performance sportbike that was first introduced in India in 2014. It has gained a reputation for its aggressive styling, powerful engine, and track-focused performance. The RC 390 is powered by a 373.2cc, single-cylinder, liquid-cooled engine that delivers an exhilarating performance. It produces impressive power and torque figures, allowing the bike to accelerate rapidly and reach high speeds. The engine is mated to a 6-speed transmission with a slipper clutch for smooth and precise gear shifts.</p>
                                </div>
                            </div>
                        
                    
                     <!-- Bike 4 -->
                     <div class="col-md-4">
                        <div class="box">
                            <div class="bike-img">
                                <img src="Grey & Red 2023 GSX R600.jpg" alt="GSX-R600">
                            </div>
                            <h4>GSX R600</h4>
                            <p>The 2023 Suzuki GSX-R600 stands out as a testament to Suzuki's dedication to relentless innovation and unparalleled performance. Evolving from the trailblazing GSX-R750 unveiled in 1985, the GSX-R600 continues Suzuki's proud tradition, offering a sublime fusion of race-winning capabilities and streetwise demeanor. Its compact and potent 599cc, four-cylinder engine responds with vigor at every throttle twist, delivering a riveting power surge right up to the redline. Coupled with advanced suspension and precision brakes, this machine pledges a riding experience marked by agility and responsiveness. </p>
                        </div>
                    </div>
                
                   <!-- Bike 5 -->
                   <div class="col-md-4">
                    <div class="box">
                        <div class="bike-img">
                            <img src="Honda CBR600RR.jpg" alt="HONDA CBR600RR">
                        </div>
                        <h4>HONDA CBR600RR</h4>
                        <p>The 2023 Suzuki GSX-R600 stands out as a testament to Suzuki's dedication to relentless innovation and unparalleled performance. Evolving from the trailblazing GSX-R750 unveiled in 1985, the GSX-R600 continues Suzuki's proud tradition, offering a sublime fusion of race-winning capabilities and streetwise demeanor. Its compact and potent 599cc, four-cylinder engine responds with vigor at every throttle twist, delivering a riveting power surge right up to the redline. Coupled with advanced suspension and precision brakes, this machine pledges a riding experience marked by agility and responsiveness. </p>
                    </div>
                </div>
                <!-- Bike 6 -->
                <div class="col-md-4">
                    <div class="box">
                        <div class="bike-img">
                            <img src="Yamaha YZF-R1.jpg" alt="YAMAHA YZF-R1">
                        </div>
                        <h4>YAMAHA YZF-R1</h4>
                        <p>The Yamaha YZF-R1 embodies Yamaha's dedication to blending innovation with peak performance. Since its pivotal redesign in 2015, the R1 has consistently been a leader, amassing accolades like the repeated honors in Cycle World’s Superbike Shootout. The heart of this champion is its powerful 998cc inline-four-cylinder engine, pushing out an impressive 190 horsepower. What sets this machine apart is Yamaha's iconic cross-plane crankshaft technology, taking inspiration from the formidable YZR-M1 MotoGP® race bike, ensuring every twist of the throttle results in pure exhilaration on the road. </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <div class="bike-img">
                            <img src="kawasakiz125.jpg" alt="KAWASAKI Z125 PRO">
                        </div>
                        <h4> KAWASAKI Z125 PRO</h4>
                        <p>Say hello to the Kawasaki Z125 PRO—a dynamic sensation dominating the street bike realm. Beyond just a mini-bike, this machine symbolizes sheer delight, nimbleness, and forward thinking. Tailored for novices, mini-bike enthusiasts, or those seeking a unique flair in the compact segment, this bike is a delightful revelation. </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <div class="bike-img">
                            <img src="ninja400.jpg " alt="ninja400">
                        </div>
                        <h4>KAWASAKI NINJA 400 </h4>
                        <p>Stepping up the game in the world of street bikes, the Kawasaki Ninja 400 is where performance meets elegance. Its liquid-cooled, DOHC engine promises both power and efficiency, designed for those who crave an adrenaline rush on the streets. But it's not all about speed—safety is paramount, and the Ninja 400's ABS (Anti-lock Brake System) ensures confident braking in unpredictable conditions. With its tailored ERGO-FIT®, riders of all sizes experience a custom, comfortable feel. </p>
                    </div>
                </div>
                </section>
        
                <section id="about">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="about-sectionHead">About Us
                                    
                                </div>
                                <hr>
                                <br>
                                <p>
                                    Revved Riders is a dynamic platform dedicated to all things motorcycles. Whether you're an experienced rider or just starting out, we're here to fuel your passion for the open road. Our mission is to provide you with the latest news, reviews, and guides that empower you to make informed decisions about your riding experience.
                                </p>
                                <p>
                                    What sets us apart is our team of passionate riders and industry experts. We combine our love for motorcycles with deep knowledge and experience to bring you comprehensive and up-to-date information. From the newest bike models to the best gear and accessories, we cover it all to enhance your riding journey.
                                </p>
                                <p>
                                    At Revved Riders, we celebrate the thrill and freedom that comes with life on two wheels. Join us as we explore the exciting world of motorcycles, share valuable insights, and connect with fellow riders who share the same love for riding.
                                </p>
                                <p>
                                    Whether you're looking for tips on maintenance, reviews of the latest bikes, or guidance on gear selection, Revved Riders is your go-to destination. Let's rev up together and embrace the exhilarating adventure of motorcycling!
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="sectionHead">Contact Us</div>
                                <hr>
                                <br>
                                <p>
                                    Have questions or feedback? We'd love to hear from you! Feel free to reach out to us using the contact information below.
                                </p>
                                <div class="contact-info">
                                    <div class="contact-item">
                                        <a href="mailto:info@2wheels.com">Email</a>
                                        <span>info@revvedriders.com</span>
                                    </div>
                                    <div class="contact-item">
                                        <a href="tel:+15551234567">Phone</a>
                                        <span>+91 8623928982</span>
                                    </div>
                                    <div class="contact-item">
                                        <a href="#">Address</a>
                                        <span> Uruli Kanchan, Pune, India</span>
                                    </div>
                                </div>
                                
                                </div>
                                <p>
                                    You can also connect with us on social media:
                                </p>
                                <style>
                                    /* CSS styles for social media icons */
                                    .social-media img {
                                        width: 40px; /* Adjust the width as needed */
                                        height: 40px; /* Adjust the height as needed */
                                    }
                                </style>
                                <ul class="list-inline social-media">
                                    <li class="list-inline-item"><a href="https://www.facebook.com"><img src="facebook.jpg" alt="Facebook"></a></li>
                                    <li class="list-inline-item"><a href="https://twitter.com"><img src="x.jpg" alt="Twitter"></a></li>
                                    <li class="list-inline-item"><a href="https://www.instagram.com"><img src="instagram.jpg" alt="Instagram"></a></li>
                                    <li class="list-inline-item"><a href="https://www.youtube.com"><img src="yt.jpg" alt="YouTube"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
        
            </main>
        
    
        <footer class="footer">
            <div class="container">
                &copy; 2024 Revved Riders. Ltd.
            </div>
        </footer>
    
        <!-- Bootstrap JS and jQuery -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    
    </html>

