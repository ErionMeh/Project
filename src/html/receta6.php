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
            <h1 id="h5">Ingredients for Buttermilk</h1>
            <img id="img2" src="../../assets/images/receta6.1.jpg">
            <p id="p5">
                -<b>Milk:</b> Our buttermilk recipe uses 2% milk, but you can start with any type of milk, like whole or skim.<br>
                -<b>Vinegar</b> or lemon juice: An acidic ingredient like white vinegar or fresh lemon juice stirred into the milk will help 
curdle and sour it (a good thing, in this instance). Any clear, light-colored vinegar will do, like apple
 cider vinegar or champagne vinegar.
            </p>
        </div>

        <h1 id="h4">Directions</h1>

        <div id="div1">
            <h1 id="h1">Step 1: Stir together vinegar and milk</h1>
            <img id="img2" src="../../assets/images/receta6.2.jpg">
            <p id="p1">Add the white vinegar or lemon juice to a liquid measuring cup. 
            Pour enough milk on top to measure 1 cup. Give everything a quick stir.
            </p>
        </div>

        <div id="div1">
            <h1 id="h1">Step 2: Let it stand until curdled slightly</h1>
            <p id="p1">Let the mixture stand at room temperature for five minutes. Once the timer is up, your homemade buttermilk is ready to use!
            </p>
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