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
            <h1 id="h5">Magnetic Air Fryer Cheat Sheet</h1>
            <img id="img2" src="../../assets/images/receta11.1.png">
            
            <p id="p5">
                We love the ease of air fryer cooking, but there’s still a trick to figuring out the exact temperature and timeframe you need for your air fryer recipes. Sure, you can flip through pages of your cookbook or refer to our chart above, but what if you had all the air fryer tips and tricks in one place, easily accessible straight from your kitchen?

With this air fryer cheat sheet, there’s no more stressing over where to find the exact time and temperature you need to fry those vegetables, chicken nuggets or crispy bacon.

This cheat sheet gives you all the info you need to make any fried dish. The chart features over 100 common foods that you can air fry, all grouped by the type of food, how long you should cook them and at what temperature. With just a glance, you’ll know how to fry each food based on its size.

The best part is—it’s magnetic! The larger 10.5×6.5-inch sheet is perfect to display on your fridge, and a smaller 5×5-inch sheet fits on the front of your air fryer.

You can buy this helpful air fryer cheat sheet on Amazon or at Walmart for less than $10. Trust us—it’s the handiest magnet you’ll ever own.
            </p>
        </div>


        <div id="div1">
            <h1 id="h1">How to Convert Any Recipe for Your Air Fryer</h1>
            <img id="img2" src="../../assets/images/receta11.2.jpg">
            <p id="p1">Amanda Mason—recipe creator, food blogger and owner of Recipes Worth Repeating—reworks two to 
                three conventional recipes a week for the air fryer. She shared her tricks with us!</p>
        </div>

        <div id="div2">
            <h1 id="h2">Conventional oven to air fryer conversion</h1>
            <p id="p1">To convert an oven-cooked recipe to an air-fryer one, Mason’s general rule of thumb is to reduce 
                the suggested temperature by 25°F and then cut the cook time by about 20%.  Just use the pause button on
                 your machine to occasionally check the doneness and flip for balanced crispness on all sides.</p>
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