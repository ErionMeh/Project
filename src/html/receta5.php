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
            <h1 id="h5">What’s the Best Way to Mince Garlic?</h1>
            <p id="p5">
                Of all these methods, the one I like the best is the ribbon grater. It produces flaky bits that have lots of 
                garlic flavor and easily meld with food during cooking. It’s also a quick enough method that I can grate garlic 
                right over a hot pan to lightly saute in oil or add to sauce. (Like in this easy Caramelized Onion & Garlic Pasta!)<br>
                Advertisement<br>For recipes that call for several cloves of minced garlic, I rely on the mini food 
                processor—a favorite appliance in my kitchen for this and other tasks like chopping onions or making pesto.<br>
                You may prefer another method from this list, and that’s OK. These tools are relatively 
                inexpensive and there’s one to fit every level of cooking comfort. It’s worth trying out a new-to-you 
                technique to expand your kitchen skills and maybe find a new way to mince garlic.
            </p>
        </div>


        <h1 id="h4">6 Ways to Mince Garlic</h1>
        <div id="div1">
            <h1 id="h1">Method #1: Knife Mince</h1>
            <img src="../../assets/images/receta5.1.jpg">
            <p id="p1">Hold a garlic clove on a cutting board, angling your knuckles forward to protect your fingertips from 
                the blade. (That’s an important part of how to hold a knife.) Use a sharp knife to cut the clove into several 
                thin slices. Stack the slices and cut through them again to make thin strips, then run your knife through these
                 to dice into tiny cubes.<br>Texture/Flavor: A small dice with pieces uniform in size. 
                 The mince has a dry texture and a flavor that’s fresh and sharp but less intense than methods that 
                 release a lot of juices from the garlic.<br>Pros: Knife-minced garlic produces equal-sized pieces 
                 that will all cook at the same rate, so you won’t be surprised by a large, undercooked piece.<br>
                Cons: Mincing takes longer than other methods, which can be a drawback in recipes using lots of garlic.
                It may feel intimidating for cooks who haven’t yet mastered their knife skills.</p>
        </div>
        <div id="div2">
            <h1 id="h2">Method #2: Knife Smash</h1>
            <img id="img2" src="../../assets/images/receta5.2.jpg">
            <p id="p1">Lay the flat side of your knife onto the clove, then either smack it or press down with your 
                hand until the clove is flattened. Then, rock your knife blade back and forth through the smashed garlic
                 until it’s chopped into small pieces.<br>
                Texture/Flavor: More rustic and rough. Smashing the clove releases more juices, so the garlic is
                 more intense and spicy.<br>
                Pros: It’s a little faster than knife-mincing since you don’t have to slice the clove up first.<br>
                Cons: Somewhat messier, since lots of garlic juices are released onto the cutting board.
            </p>
        </div>
        <div id="div3">
            <h1 id="h3">Method #3: Garlic Press</h1>
            <img id="img2" src="../../assets/images/receta5.3.jpg">
            <p id="p1">
                Put a peeled clove inside the garlic press. (You can use unpeeled cloves with some models.)
                 Squeeze the handle of the tool to press the garlic out through the holes.<br>
                Texture/Flavor: Small, liquidy bits of garlic. Very spicy and even fiery on the tongue.<br>
                Pros: Quality garlic presses are easy to use and process the cloves quickly. You don’t have
                 to handle the raw garlic as much.<br>
                Cons: Cheap presses leave a lot of garlic behind, wasting parts you’d otherwise use. They can 
                also be a pain to clean. This is the only kitchen tool on the list that does just one job—so 
                multitasking tools may be better investments.<br>
            </p>
        </div>

        <div id="div3">
            <h1 id="h3">Method #4: Fine Grater</h1>
            <img id="img3" src="../../assets/images/receta5.4.jpg">
            <p id="p1">
                Rub a peeled clove of garlic on the sharp Microplane grater surface, holding it over a bowl to catch juices and garlic bits. Use a fork or rubber spatula to scrape excess garlic out of the grater.

                Texture/Flavor: Puree-like and liquidy, which makes the garlic aggressively spicy and also bitter-tasting.
                
                Pros: It’s quick and easy to grate the whole garlic clove, and this tool may already be in your drawer since it’s also used for citrus zest and grating hard cheeses.
                
                Cons: The bitterness may not be noticeable in slow-cooked dishes, but it could affect the flavor of quicker recipes like stir-fries or uncooked sauces like aiolis.
            </p>
        </div>

        <div id="div3">
            <h1 id="h3">Method #5: Ribbon Grater</h1>
            <img id="img2" src="../../assets/images/receta5.5.jpg">
            <p id="p1">
                Rub cloves of peeled garlic over the long, thin blades of the ribbon grater, with a bowl or plate underneath to catch the garlic. Tap the grater to shake off the excess.

Texture/Flavor: Thin flakes of garlic. Grating releases liquid, so garlic flakes have an intense flavor, though without the bitterness of finely grated garlic.

Pros: Grates a clove quickly enough that you can do it while cooking.

Cons: Everyday box graters don’t include this type of surface, so you may need to purchase one.<br>
            </p>
        </div>

        <div id="div3">
            <h1 id="h3">Method #6: Mini Food Processor</h1>
            <img id="img2" src="../../assets/images/receta5.6.jpg">
            <p id="p1">
                Add peeled garlic cloves to the bowl of a mini food processor. Attach the lid, then pulse until the cloves are minced.

                Texture/Flavor: A finer dice than knife mincing but with less uniform pieces. The garlic pieces are spicier than from a knife-mince, but not as liquidy or fiery as from a garlic press.
                
                Pros: It’s a fast way of mincing several garlic cloves with minimal handling, and the mini food processor has lots of other kitchen uses, too.
                
                Cons: More parts to wash than in other methods.
            </p>
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
                <button onclick="vegla1()" id="submit" name="login" value="login" type="submit">GO</button>
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