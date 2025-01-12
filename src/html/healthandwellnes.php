<?php 
include_once("config.php");
require_once 'page_template.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthy Recipes</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Dancing+Script:wght@400..700&family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="../css/navbar.css">
    <style>
        body {
            font-family: "Outfit", sans-serif;
            margin: 0;
            padding: 0;
            background-color: rgb(248, 246, 248);
            color: #424949;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            font-family: "Playfair Display", serif;
            font-size: 48px;
            color: rgb(236, 167, 83);
        }

        .header p {
            font-family: "Dancing Script", serif;
            font-size: 24px;
            color: rgb(154, 140, 155);
        }

        .recipe-section {
            text-align: center;
        }

        .recipe-section p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .categories {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .category {
            width: 200px;
            padding: 15px;
            border: 2px solid rgb(236, 167, 83);
            border-radius: 10px;
            text-align: center;
            background-color: rgb(239, 232, 238);
            transition: transform 0.3s ease;
        }

        .category:hover {
            transform: scale(1.05);
        }

        .category h3 {
            font-family: "Dancing Script", serif;
            font-size: 22px;
            color: rgb(154, 140, 155);
            margin: 10px 0;
        }

        .category p {
            font-size: 14px;
            color: #566573;
        }

        @media (max-width: 768px) {
            .category {
                width: calc(50% - 20px);
            }
        }

        @media (max-width: 480px) {
            .category {
                width: 100%;
            }
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
    #numri{
        color: black;
        text-decoration: none;
    }

    #pjesa1{
    background: rgb(233, 231, 231);
    width: 80%;
    margin: 0 auto;
    height: 100%;
    padding: 2%;
}


#pjesa2 {
    background: url(../../assets/images/healthy2.jpg) left no-repeat, url(../../assets/images/all.jpg) right no-repeat;
    width: 100%;
    height: 300px;
    background-size: 50%, 50%;
}





    /* footer end */
    </style>
</head>
<body>
    <div id="navbar-placeholder"></div>


    <div class="container">
        <div class="header">
            
        </div>
        <div class="recipe-section">
            <h1>Healthy Recipes</h1>
            <p>Discover a variety of healthy recipes tailored to your dietary goals and preferences.</p>
            <div class="categories">
                <div class="category">
                    <a href="sugarfree.php">
                    <h3>Sugar-Free</h3>
                    <p>Delicious sugar-free recipes for a healthier lifestyle.</p>
                    </a>
                </div>
                <div class="category">
                    <a href = "weightloss.php">
                    <h3>Weight Loss</h3>
                    <p>Meals designed to support your weight loss journey.</p>
                    </a>
                </div>
                <div class="category">
                    <a href = "proteinpacked.php">
                    <h3>Protein Packed</h3>
                    <p>High-protein meals to fuel your body and build strength.</p>
                    </a>
                </div>
                <div class="category">
                    <a href = "healthysnack.php">
                    <h3>Healthy Snacks</h3>
                    <p>Light and nutritious snack ideas to keep you energized.</p>
                    </a>
                </div>
                <div class="category">
                    <a href = "vegan.php">
                    <h3>Vegan</h3>
                    <p>Plant-based meals for a compassionate and healthy lifestyle.</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!------Footer-------->
    <div class="footer">
        
        <div class="icons1">
            <div class="icons">
                <a id="icon" href="https://www.facebook.com/"><i class='bx bxl-facebook-circle'></i></a>
                <a id="icon" href="https://www.pinterest.com/"><i class='bx bxl-pinterest' ></i></a>
                <a id="icon" href="https://www.tiktok.com/explore"><i class='bx bxl-tiktok' ></i></a>
                <a id="icon" href="https://www.instagram.com/"><i class='bx bxl-instagram' ></i></a>
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
                <button id="submit" name="login" value="login" type="submit">GO</button>
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
     <!--------------Footer end-----------></div>




    

    <script src="navbar.php"></script>
</body>

</html>