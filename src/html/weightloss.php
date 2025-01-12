<?php 
include_once("config.php");
require_once 'page_template.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weight Loss Recipes</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Dancing+Script:wght@400..700&family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/navbar.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
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

        .recipe-list {
            text-align: center;
        }

        .recipe-list p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .recipes {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .recipe {
            width: 250px;
            padding: 15px;
            border: 2px solid rgb(236, 167, 83);
            border-radius: 10px;
            text-align: center;
            background-color: rgb(239, 232, 238);
            transition: transform 0.3s ease;
        }

        .recipe:hover {
            transform: scale(1.05);
        }

        .recipe img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .recipe h3 {
            font-family: "Dancing Script", serif;
            font-size: 22px;
            color: rgb(154, 140, 155);
            margin: 10px 0;
        }

        .recipe p {
            font-size: 14px;
            color: #566573;
        }

        /* Modal styling */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            overflow: auto;
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 600px;
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .modal-content img {
            width: 50%;
            border-radius: 10px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
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
    </style>
</head>
<body>
    <div id="navbar-placeholder"></div>
    <div class="main-content">
    <div class="container">
        <div class="header">
            <h1>Weight Loss Recipes</h1>
            <p>Delicious and healthy weight loss recipes for a balanced diet!</p>
        </div>
        <div class="recipe-list">
            <p>Explore our tasty weight loss recipes to help you achieve your goals!</p>
            <div class="recipes">
                <!-- Recipe 1: Green Smoothie -->
                <div class="recipe">
                    <img src="../../assets/images/greensmothie.png"  alt="Green Smoothie">
                    <h3>Green Smoothie</h3>
                    <p>A nutrient-packed smoothie perfect for weight loss!</p>
                    <button onclick="openModal('greenSmoothieModal')">See Recipe</button>
                </div>

               
                <div id="greenSmoothieModal" class="modal">
                    <div class="modal-content">
                        <img src="../../assets/images/greensmothie.png" alt="Green Smoothie">
                        <div>
                            <span class="close" onclick="closeModal('greenSmoothieModal')">&times;</span>
                            <h2>Green Smoothie Recipe</h2>
                            <p><strong>Ingredients:</strong></p>
                            <ul>
                                <li>1 cup spinach</li>
                                <li>1/2 banana</li>
                                <li>1/2 cup almond milk</li>
                                <li>1/2 cup water</li>
                                <li>1 tbsp chia seeds</li>
                            </ul>
                            <p><strong>Instructions:</strong></p>
                            <ol>
                                <li>Blend all ingredients until smooth.</li>
                                <li>Serve chilled.</li>
                            </ol>
                            <p><strong>Calories:</strong> 150 kcal</p>
                        </div>
                    </div>
                </div>

                
                <div class="recipe">
                    <img src="../../assets/images/cauliflowerrice.png"  alt="Cauliflower Rice">
                    <h3>Cauliflower Rice</h3>
                    <p>Low-calorie rice substitute, perfect for weight loss!</p>
                    <button onclick="openModal('cauliflowerRiceModal')">See Recipe</button>
                </div>

                
                <div id="cauliflowerRiceModal" class="modal">
                    <div class="modal-content">
                        <img src="../../assets/images/cauliflowerrice.png" alt="Cauliflower Rice">
                        <div>
                            <span class="close" onclick="closeModal('cauliflowerRiceModal')">&times;</span>
                            <h2>Cauliflower Rice Recipe</h2>
                            <p><strong>Ingredients:</strong></p>
                            <ul>
                                <li>1 head of cauliflower</li>
                                <li>1 tbsp olive oil</li>
                                <li>Salt and pepper to taste</li>
                            </ul>
                            <p><strong>Instructions:</strong></p>
                            <ol>
                                <li>Grate the cauliflower into rice-sized pieces.</li>
                                <li>Heat olive oil in a pan, and sauté cauliflower for 5-7 minutes.</li>
                                <li>Season with salt and pepper.</li>
                            </ol>
                            <p><strong>Calories:</strong> 50 kcal per serving</p>
                        </div>
                    </div>
                </div>

                <!-- Recipe 3: Avocado Salad -->
                <div class="recipe">
                    <img src="../../assets/images/avocadosalad.png"  alt="Avocado Salad">
                    <h3>Avocado Salad</h3>
                    <p>A refreshing and healthy salad to complement your diet!</p>
                    <button onclick="openModal('avocadoSaladModal')">See Recipe</button>
                </div>

               
                <div id="avocadoSaladModal" class="modal">
                    <div class="modal-content">
                        <img src="../../assets/images/avocadosalad.png" alt="Avocado Salad">
                        <div>
                            <span class="close" onclick="closeModal('avocadoSaladModal')">&times;</span>
                            <h2>Avocado Salad Recipe</h2>
                            <p><strong>Ingredients:</strong></p>
                            <ul>
                                <li>1 ripe avocado</li>
                                <li>1/2 cucumber, sliced</li>
                                <li>1/2 red onion, thinly sliced</li>
                                <li>1 tbsp olive oil</li>
                                <li>1 tsp lemon juice</li>
                                <li>Salt and pepper to taste</li>
                            </ul>
                            <p><strong>Instructions:</strong></p>
                            <ol>
                                <li>Cut the avocado into cubes and combine with cucumber and onion.</li>
                                <li>Drizzle with olive oil and lemon juice.</li>
                                <li>Season with salt and pepper, toss gently, and serve.</li>
                            </ol>
                            <p><strong>Calories:</strong> 200 kcal</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!------Footer-------->
     <div class="footer">
        
        <div class="icons1">
            <div class="icons">
            <a id="icon" href=""><i class='bx bxl-facebook-circle'></i></a>
            <a id="icon" href=""><i class='bx bxl-pinterest' ></i></a>
            <a id="icon" href=""><i class='bx bxl-tiktok' ></i></a>
            <a id="icon" href=""><i class='bx bxl-instagram' ></i></a>
            <a id="icon" href=""><i class='bx bxl-twitter' ></i></a>
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
    <!--------------Footer end----------->
    <script src="navbar.php"></script>


    <script>
        function openModal(modalId) {
            document.getElementById(modalId).style.display = "block";
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = "none";
        }
    </script>
    </div>
</body>
</html>