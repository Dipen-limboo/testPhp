<?php require('./connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <h3><span>T</span> Traflagar</h3>
            </div>
            <div class="navigator">
                <ul>
                    <li><a class="active" href="#home">Home</a></li>
                    <li><a href="#service">Find a doctor</a></li>
                    <li><a href="#forth">Apps</a></li>
                    <li><a href="#fifth">Testimonials</a></li>
                    <li><a href="#sixth">About us</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <section id="home">
        <div class="left1">
            <h4>Virtual healthcare for you</h4><br>
            <p>Trafalgar provides progressive, and affordable healthcare, accessible on mobile and online for everyone</p>
            <button>Consult Today</button>
        </div>
        <div class="right1">
            <img src="./images/image1.png">
        </div>
    </section>
    <section id="service" class="service">
        <div class="title">
            <h2>Our services</h2>
            <hr><br>
            <p>We provide to you the best choiches for you. Adjust it to your health needs and make sure your undergo treatment with our highly qualified doctors you can consult with us which type of service is suitable for your health</p>
        </div>
        <div class="box">
            <div class="card">
                <img src="./images/a.png">
                <h5>Search doctor</h5>
                <div class="par">
                    <p>Choose your doctor from thousands of specialist, general, and trusted hospitals.</p>
                </div>
            </div>
            <div class="card">
                <img src="./images/b.png">
                <h5>Online pharmacy</h5>
                <div class="par">
                    <p>Buy  your medicines with our mobile application with a simple delivery system</p>
                </div>
            </div>
            <div class="card">
                <img src="./images/c.jfif">
                <h5>Consultation</h5>
                <div class="par">
                    <p>Free consultation with our trusted doctors and get the best recomendations</p>
                </div>
            </div>
            <div class="card">
                <img src="./images/d.jfif">
                <h5>Details info</h5>
                <div class="par">
                    <p>Free consultation with our trusted doctors and get the best recomendations</p>
                </div>
            </div>
            <div class="card">
                <img src="./images/e.png">
                <h5>Emergency care</h5>
                <div class="par">
                    <p>You can get 24/7 urgent care for yourself or your children and your lovely family</p>
                </div>
            </div>
            <div class="card">
                <img src="./images/f.jfif">
                <h5>Tracking</h5>
                <div class="par">
                    <p>Track and save your medical history and health data </p>
                </div>
            </div>
            </div>
        </div>
    </section>
    <section id="third">
        <div class="left2">
            <img src="./images/image2.png">
        </div>
        <div class="right2">
            <h4>Leading healthcare providers</h4><br>
            <hr><br>
            <p>Trafalgar provides progressive, and affordable healthcare, accessible on mobile and online for everyone. To us, it's not just work. We take pride in the solutions we deliver</p>
            <button>Learn More</button>
        </div>
    </section>
    <section id="forth">
        <div class="left3">
            <h4>Download our 
                mobile apps</h4><br>
            <hr><br>
            <p>Our dedicated patient engagement app and web portal allow you to access information instantaneously (no tedeous form, long calls, or administrative hassle) and securely</p>
            <button>Download <i class="fas fa-download"></i></button>
        </div>
        <div class="right3">
            <img src="./images/image1.png">
        </div>
    </section>
    <section id="fifth"> 
        <div class="box">
            <div class="card1">
                <h5>What our customer are saying</h5><br><hr><br>
                <div class="container">
                    <div class="image">
                        <img src="./images/img.jpg">
                        <div style="padding-left: 20px;">
                            <h5>Dipen Limbu</h5>
                            <p>Web developer</p>
                        </div>
                    </div>
                    <div class="text">
                        <p>“Our dedicated patient engagement app and 
                            web portal allow you to access information instantaneously (no tedeous form, long calls, or administrative hassle) and securely”</p>
                    </div>
                </div>
        </div>
        </div>
        <div class="last">
            <i id="leftArrow" class="fas fa-arrow-left"></i>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <i id="rightArrow" class="fas fa-arrow-right"></i>
        </div>
    </section>
    <section id="sixth">
        <div class="title">
            <h2>Check out our latest article</h2>
            <hr><br>
        </div>
        <div class="box">
            <div class="cad">
                <img src="./images/img2.jpg">
                <h5>Disease detection, check 
                    up in the laboratory</h5>
                <div class="par">
                    <p>In this case, the role of the health laboratory is very important to do a disease detection....</p>
                </div>
                <a href="#">Read more  <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="cad">
                <img src="./images/img3.jpg">
                <h5>Herbal medicines that are 
                    safe for consumption</h5>
                <div class="par">
                    <p>Herbal medicine is very widely used at this time because of its very good for your health...</p>
                </div>
                <a href="#">Read more <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="cad">
                <img src="./images/img4.jfif">
                <h5>Natural care for healthy 
                    facial skin</h5>
                <div class="par">
                    <p>A healthy lifestyle should start from now and also for your skin health.There are some...</p>
                </div>
                <a href="#">Read more <i class="fas fa-arrow-right"></i></a>
            </div>
            </div>
        </div><br><br>
        <button>View all</button>
    </section>
    <section id="Seventh">
        <div class="title">
            <h2>Contact us</h2>
            <hr><br>
            <p> Have any questions? We'd love to hear from you.</p>
        </div>
        <form action="index.php" method="get">
            <div class="namePhone">
                <div>
                    <label for="Name">Your Name</label><br>
                    <input type="text" name="name">
                </div>
                <div>
                    <label for="Phone">Phone No</label><br>
                    <input type="tel" name="phone">
                </div>
            </div>
            <div class="email">
                <label for="email">Email ID</label><br>
                <input type="email" name="email">
            </div>
            <div class="message">
                <label for="message">Your Message</label><br>
                <textarea rows="12" cols="88" name="comment" form="usrform" name = "message"></textarea>
            </div>
        </form>
        <input type="submit">
        <?php

if(isset($_GET["name"]) && isset($_GET["phone"]) && isset($_GET["email"]) && isset($_GET["message"])){
    $name = $_GET["name"];
    echo "Dipen";
    $phone = $_GET["phone"];
    $email = $_GET["email"];
    $message = $_GET["message"];

// query insert into user_info with values
$query = "INSERT INTO `user_info` VALUES('$name', '$phone', '$email', '$message');";
    echo $query;die;
echo "<br>";
echo "<br>"; 

if($connection->query($query) == True){
    //redirect to a file that fetches all data
    header('location:fetch.php');
}
else {
    echo $connection -> error;
}
}
?>
    </section>
    <footer>
        <div class="contents">
            <div class="div1">
                <div class="logo1">
                    <h3><span>T</span> Traflagar</h3>
                </div>
                <p><br>Trafalgar provides progressive, and affordable healthcare, accessible on mobile and online for everyone</p><br>
                <p>©Trafalgar PTY LTD 2020. All rights reserved</p>
            </div>
            <div class="div2">
                <h3>Company</h3><br>
                <p>About</p>
                <p>Testimonials</p>
                <p>Find a doctor</p>
                <p>Apps</p>
            </div>
            <div class="div2">
                <h3>Region</h3><br>
                <p>Indonesia</p>
                <p>Singapore</p>
                <p>Hongkong</p>
                <p>Canada</p>
            </div>
            <div class="div2">
                <h3>Help</h3><br>
                <p>Help center</p>
                <p>Contact support</p>
                <p>Instructions</p>
                <p>How it works</p>
            </div>
        </div>
        <div class="scrollbar">
            <a href="#home"><i class="fas fa-angle-double-up"></i><br>
            scroll to top</a>
        </div>
    </footer>

   
    <script src="./JS/main.js"></script>
</body>
</html>