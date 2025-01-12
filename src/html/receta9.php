<?php 
include_once("config.php");
require_once 'page_template.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to measure flour by volume</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+MX+Guides&family=Playwrite+VN+Guides&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <!--Box icons-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    
    <style>
        #div1, #div2, #div3{
            width: 700px;
            height: auto;
            margin-left: 400px;
        }
        #div4{
            width: 700px;
            height: auto;
            margin-left: 400px;
        }
        #div2, #div3{
            margin-top: 60px;
        }
        #h1, #h2, #h3, #p1, #p3{
            text-align: center;
        }
        #img1, #img2, #img3{
            width: 600px;
            margin-left: 50px;
            margin-top: 25px;
        }
        #h4{
            text-align: center;
        }
        #img5{
            width: 350px;
            height: 350px;
            margin-left: 168px;
        }
        #p5{
            width: 600px;
            margin-left: 50px;
            color: #212121;
        }
        #h4, #h5{
            text-align: center;
            margin-top: 20px;
        }
        /*Tools you will need*/
        .tools{
            display: flex;
            justify-content: space-around;
        }
        .tool1{
            margin-left: 250px;
        }
        .tool3{
            margin-right: 250px;
        }
        .tool1, .tool2, .tool3{
            background-color: #f7f9f9;
        }
        #tool1, #tool2, #tool3{
            display: flex;
            justify-content: space-around;
        }
        #btn1{
            background-color: #4a235a;
            border-color: #4a235a;
            width: 250px;
            height: 30px;
            border-radius: 7px;
            margin-left: 22px;
            color: white;
        }
         /*footer*/
         .icons{
            display: flex;
            justify-content: space-around;
        }
        #icon{
            font-size: 50px;
            color: black;
        }
        .icons1{
            width: 300px;
            margin-left: 150px;
            margin-top: 50px;
        }
        #address{
            margin-top: 60px;
            margin-right: 200px;
        }
        .footer{
            display: flex;
            justify-content: space-around;
            margin-top: 30px;
            background-color:rgb(236, 167, 83);
            width: 100%;
        }
        .email{
            background-color: rgb(236, 167, 83);
            width: 600px;
            margin-top: 20px;
            margin-left: -60px;
        }
        #signup{
            font-family: "Dancing Script", serif;
            font-size: 40px;
        }
        #email1{
            text-align: center;
        }
        #email2{
            text-align: center;
            margin-top: -15px;
        }
        #email3{
            margin-left: 170px;

        }
        #email4{
            width: 100px;
            height: 35.5px;
        }
        #email5{
            width: 100px;
            height: 35.5px;

        }
        #submit{
            background-color:rgb(154, 140, 155);
            width: 40px;
            height: 40px;
            border-color: rgb(154, 140, 155);
        }
        #logostyle{
            font-family: "Dancing Script", serif;
            font-size: 40px;
            color: rgb(113, 56, 110);
        }

        #numri{
            color: black;
            text-decoration: none;
        }
        /* footer end */
        </style>
</head>
<body>
    <div id="navbar-placeholder"></div>
    
    <!--------------------------------->

    <div>
     
        <div id="div4">
            <h1 id="h5">What is an air fryer?</h1>
            <img id="img2" src="../../assets/images/receta9.1.jpg">
            <p id="p5">
                The air fryer is essentially an amped-up countertop convection oven—it doesn’t actually fry your food. Patented by Philips Electronics Company, the small appliance claims to mimic the results of deep-frying with nothing more than hot air and little or no oil.

                This gadget has surged in popularity over the last few years—nearly 40% of U.S. homes had one as of July 2020, according to the market research firm NPD Group. There are all kinds of things you can air-fry—from different air fryer chicken recipes like frozen chicken wings or easy-to-make air fryer chicken nuggets and homemade french fries to air fryer corn dogs or healthy air fryer recipes like roasted vegetables and even fresh-baked cookies.
                
                Also, check how to clean air fryer following steps easier than you might think!
            </p>
        </div>


        <h1 id="h4">How to use an air fryer</h1>

        <div id="div1">
            <h1 id="h1">1. Place your food in the basket</h1>
            <p id="p1">Depending on your air fryer’s size, the basket may hold anywhere from 2 to 10 quarts. In most cases, you’ll want to add 1 or 2 teaspoons of oil to help the food get nice and crispy.

                If you’re in a hurry, you can put foil in an air fryer to make cleanup a bit easier.</p>
        </div>

        <div id="div2">
            <h1 id="h2">2. Set the time and temperature</h1>
            <img id="img2" src="../../assets/images/receta9.2.jpg">
            <p id="p1">Air fryer cooking times and temperatures typically range from 5 to 25 minutes at 350° 
                to 400°F, depending on the food you’re cooking.
            </p>
        </div>

        <div id="div3">
            <h1 id="h3">3. Let the food cook</h1>
            <p id="p1">
                In some cases, you may need to flip or turn the food halfway through the cooking time to help it crisp up evenly. Once you’re done cooking, it’s important to clean your air fryer.
            </p>
        </div>

        </div>
    </div>

    <h1 id="h4">Tools You’ll Need</h1>
        <div class="tools">
            <div class="tool1">
                <img src="../../assets/images/receta9.3.jpg">
                <div id="tool1">
                <p id="emri">Chefman TurboFry<br>Air Fryer XL</p>
                <p id="cmimi">$84.99</p>
                </div>
                <a href="https://www.amazon.com/Chefman-TurboFry-Air-Fryer-Dishwasher/dp/B08DKYBTPH/"><button id="btn1">Buy at Amazon</button></a>
            </div>
            <div class="tool2">
                <img src="../../assets/images/receta9.4.jpg">
                <div id="tool2">
                <p id="emri">NuWave  Brio Air Fryer</p>
                <p id="cmimi">$11.08</p>
                </div>
                <a href="https://www.walmart.com/ip/Nuwave-Brio-6-Quart-Digital-Air-Fryer-with-one-touch-digital-controls/228023548" ><button id="btn1">Buy at Amazon</button></a>
            </div>
            <div class="tool3">
                <img src="../../assets/images/receta9.5.jpg">
                <div id="tool3">
                <p id="emri">Magic Bullet Air<br> Fryer</p>
                <p id="cmimi">$119.99</p>
                </div>
                <a href="https://www.amazon.com/Magic-Bullet-MBA50100-Bullet%C2%AE-Fryer/dp/B0923CBH72/"><button id="btn1">Buy at Amazon</button></a>
            </div>

        </div>
    </div>
    
    <!------Footer------->

    <div class="footer">
        <div class="icons1">
        <div class="icons">
            <a id="icon" href="https://www.facebook.com/"><i class='bx bxl-facebook-circle'></i></a>
            <a id="icon" href="https://www.pinterest.com/"><i class='bx bxl-pinterest' ></i></a>
            <a id="icon" href="https://www.tiktok.com/explore"><i class='bx bxl-tiktok' ></i></a>
            <a id="icon" href="https://www.instagram.com/"><i class='bx bxl-instagram' ></i></a>
            <a id="icon" href="https://x.com/"><i class='bx bxl-twitter' ></i></a>
        </div>
        <div class="logo">
            <p id="logoo"><b id="homee">Home</b><span id="logostyle">Cooking</span></p>
        </div>
        </div>

        <div class="email">
            <h1 id="email1"><span id="signup">Signup</span> for Email Updates</h1>
            <p id="email2"><i>Get a Free eCookbook with our top 25 recipes.</i></p>
            <form id="email3">
                <label></label>
                <input id="email4" type="text" placeholder="Firs Name" required>
                <input id="email5" type="email" placeholder="Email" required>
                <button  id="submit" name="login" value="login" type="submit">GO</button>
            </form>
        </div>

        <div id="address">
            <address>
                Home Cooking<br>
                123 Main Street <br>
                City, Country 12345<br>
                <a id="numri" href="mailto:homecooking@gmail.com">homecooking@gmail.com</a><br>
                <a id="numri" href="tel:+123456789">+383 (45) 567-895</a>
            </address>
        </div>
    </div>

    <!-----------Footer end------------->

    <script src="navbar.php"></script>
</body>
</html>