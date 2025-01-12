<?php 
include_once("config.php");
require_once 'page_template.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sugar-Free Recipes</title>
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
            <h1>Sugar-Free Recipes</h1>
            <p>Enjoy a variety of sugar-free recipes for a healthier lifestyle!</p>
        </div>
        <div class="recipe-list">
            <p>Explore our delicious sugar-free recipes that help you stay healthy without added sugars.</p>
            <div class="recipes">
                <!-- Recipe 1: Sugar-Free Apple Pie -->
                <div class="recipe">
                    <img src="../../assets/images/applepie.png"  alt="Sugar-Free Apple Pie">
                    <h3>Sugar-Free Apple Pie</h3>
                    <p>A healthy twist on the classic apple pie, with no added sugars!</p>
                    <button onclick="openModal('applePieModal')">See Recipe</button>
                </div>

                
                <div id="applePieModal" class="modal">
                    <div class="modal-content">
                        <img src="../../assets/images/applepie.png" alt="Sugar-Free Apple Pie">
                        <div>
                            <span class="close" onclick="closeModal('applePieModal')">&times;</span>
                            <h2>Sugar-Free Apple Pie Recipe</h2>
                            <p><strong>Ingredients:</strong></p>
                            <ul>
                                <li>3 cups apples, sliced</li>
                                <li>1 cup almond flour</li>
                                <li>1/4 cup unsweetened apple sauce</li>
                                <li>1 tsp cinnamon</li>
                                <li>1/2 tsp nutmeg</li>
                                <li>Pinch of salt</li>
                            </ul>
                            <p><strong>Instructions:</strong></p>
                            <ol>
                                <li>Preheat oven to 350°F (175°C).</li>
                                <li>Mix the apples with the spices and almond flour.</li>
                                <li>Transfer to a pie dish and bake for 30 minutes.</li>
                                <li>Serve warm and enjoy!</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <!-- Recipe 2: Sugar-Free Banana Bread -->
                <div class="recipe">
                    <img src="../../assets/images/bananabread.png"  alt="Sugar-Free Banana Bread">
                    <h3>Sugar-Free Banana Bread</h3>
                    <p>Delicious banana bread with no added sugar, perfect for breakfast!</p>
                    <button onclick="openModal('bananaBreadModal')">See Recipe</button>
                </div>

                <div id="bananaBreadModal" class="modal">
                    <div class="modal-content">
                        <img src="../../assets/images/bananabread.png" alt="Sugar-Free Banana Bread">
                        <div>
                            <span class="close" onclick="closeModal('bananaBreadModal')">&times;</span>
                            <h2>Sugar-Free Banana Bread Recipe</h2>
                            <p><strong>Ingredients:</strong></p>
                            <ul>
                                <li>3 ripe bananas</li>
                                <li>2 cups almond flour</li>
                                <li>1/4 cup unsweetened applesauce</li>
                                <li>1 tsp vanilla extract</li>
                                <li>1 tsp baking soda</li>
                            </ul>
                            <p><strong>Instructions:</strong></p>
                            <ol>
                                <li>Preheat oven to 350°F (175°C).</li>
                                <li>Mix all ingredients and pour into a loaf pan.</li>
                                <li>Bake for 45 minutes, or until a toothpick comes out clean.</li>
                                <li>Let cool before slicing.</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <!-- Recipe 3: Sugar-Free Chocolate Cake -->
                <div class="recipe">
                    <img src="../../assets/images/chocolatecake.png"  alt="Sugar-Free Chocolate Cake">
                    <h3>Sugar-Free Chocolate Cake</h3>
                    <p>Indulge in a rich chocolate cake without the sugar!</p>
                    <button onclick="openModal('chocolateCakeModal')">See Recipe</button>
                </div>

                
                <div id="chocolateCakeModal" class="modal">
                    <div class="modal-content">
                        <img src="../../assets/images/chocolatecake.png" alt="Sugar-Free Chocolate Cake">
                        <div>
                            <span class="close" onclick="closeModal('chocolateCakeModal')">&times;</span>
                            <h2>Sugar-Free Chocolate Cake Recipe</h2>
                            <p><strong>Ingredients:</strong></p>
                            <ul>
                                <li>1 cup almond flour</li>
                                <li>1/2 cup unsweetened cocoa powder</li>
                                <li>3 eggs</li>
                                <li>1/2 cup almond milk</li>
                                <li>1 tsp vanilla extract</li>
                            </ul>
                            <p><strong>Instructions:</strong></p>
                            <ol>
                                <li>Preheat oven to 350°F (175°C).</li>
                                <li>Mix ingredients in a bowl, then pour into a greased pan.</li>
                                <li>Bake for 25 minutes, or until a toothpick comes out clean.</li>
                                <li>Let cool before serving.</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <!-- Recipe 4: Sugar-Free Oatmeal Cookies -->
                <div class="recipe">
                    <img src="../../assets/images/oatmealcookies.png"  alt="Sugar-Free Oatmeal Cookies">
                    <h3>Sugar-Free Oatmeal Cookies</h3>
                    <p>Healthy oatmeal cookies with no added sugar!</p>
                    <button onclick="openModal('oatmealCookiesModal')">See Recipe</button>
                </div>

                <div id="oatmealCookiesModal" class="modal">
                    <div class="modal-content">
                        <img src="../../assets/images/oatmealcookies.png" alt="Sugar-Free Oatmeal Cookies">
                        <div>
                            <span class="close" onclick="closeModal('oatmealCookiesModal')">&times;</span>
                            <h2>Sugar-Free Oatmeal Cookies Recipe</h2>
                            <p><strong>Ingredients:</strong></p>
                            <ul>
                                <li>1 1/2 cups rolled oats</li>
                                <li>1/2 cup almond butter</li>
                                <li>1 ripe banana, mashed</li>
                                <li>1 tsp cinnamon</li>
                            </ul>
                            <p><strong>Instructions:</strong></p>
                            <ol>
                                <li>Preheat oven to 350°F (175°C).</li>
                                <li>Mix all ingredients in a bowl, then form into cookies.</li>
                                <li>Bake for 12 minutes, or until golden brown.</li>
                                <li>Let cool before serving.</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <!-- Recipe 5: Sugar-Free Carrot Cake -->
                <div class="recipe">
                    <img src="../../assets/images/carrotcake.png"  alt="Sugar-Free Carrot Cake">
                    <h3>Sugar-Free Carrot Cake</h3>
                    <p>Enjoy a moist carrot cake with no added sugars!</p>
                    <button onclick="openModal('carrotCakeModal')">See Recipe</button>
                </div>

             
                <div id="carrotCakeModal" class="modal">
                    <div class="modal-content">
                        <img src="../../assets/images/carrotcake.png" alt="Sugar-Free Carrot Cake">
                        <div>
                            <span class="close" onclick="closeModal('carrotCakeModal')">&times;</span>
                            <h2>Sugar-Free Carrot Cake Recipe</h2>
                            <p><strong>Ingredients:</strong></p>
                            <ul>
                                <li>2 cups shredded carrots</li>
                                <li>1 1/2 cups almond flour</li>
                                <li>3 eggs</li>
                                <li>1/2 cup unsweetened applesauce</li>
                                <li>1 tsp vanilla extract</li>
                            </ul>
                            <p><strong>Instructions:</strong></p>
                            <ol>
                                <li>Preheat oven to 350°F (175°C).</li>
                                <li>Mix all ingredients and pour into a greased pan.</li>
                                <li>Bake for 35 minutes, or until a toothpick comes out clean.</li>
                                <li>Let cool before frosting and serving.</li>
                            </ol>
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