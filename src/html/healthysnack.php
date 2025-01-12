<?php 
include_once("config.php");
require_once 'page_template.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthy Snacks Recipes</title>
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
            <h1>Healthy Snacks Recipes</h1>
            <p>Enjoy these healthy and delicious snacks any time of the day!</p>
        </div>
        <div class="recipe-list">
            <p>Indulge in these healthy snacks for a nutritious and tasty break!</p>
            <div class="recipes">
                <!-- Recipe 1: Avocado & Tuna Salad Bites -->
                <div class="recipe">
                    <img src="../../assets/images/avocado_tuna_bites.png" alt="Avocado & Tuna Salad Bites">
                    <h3>Avocado & Tuna Salad Bites</h3>
                    <p>A refreshing, protein-packed bite!</p>
                    <button onclick="openModal('avocadoTunaBitesModal')">See Recipe</button>
                </div>

                
                <div id="avocadoTunaBitesModal" class="modal">
                    <div class="modal-content">
                        <img src="../../assets/images/avocado_tuna_bites.png" alt="Avocado & Tuna Salad Bites">
                        <div>
                            <span class="close" onclick="closeModal('avocadoTunaBitesModal')">&times;</span>
                            <h2>Avocado & Tuna Salad Bites Recipe</h2>
                            <p><strong>Ingredients:</strong></p>
                            <ul>
                                <li>1 avocado, cubed</li>
                                <li>1 can of tuna, drained</li>
                                <li>1 tbsp olive oil</li>
                                <li>1 tsp lemon juice</li>
                                <li>Salt and pepper to taste</li>
                                <li>Fresh parsley for garnish</li>
                            </ul>
                            <p><strong>Instructions:</strong></p>
                            <ol>
                                <li>In a bowl, combine the tuna, avocado, olive oil, lemon juice, salt, and pepper.</li>
                                <li>Mix gently until combined.</li>
                                <li>Spoon the salad onto small cucumber or cherry tomato slices for a fresh, bite-sized snack.</li>
                                <li>Garnish with parsley.</li>
                            </ol>
                            <p><strong>Protein:</strong> 20g per serving</p>
                        </div>
                    </div>
                </div>

                <!-- Recipe 2: No-bake Fruity Oat Bars -->
                <div class="recipe">
                    <img src="../../assets/images/no-bake_fruity_oat_bars.png" alt="No-bake Fruity Oat Bars">
                    <h3>No-bake Fruity Oat Bars</h3>
                    <p>Sweet, chewy, and packed with nutrients!</p>
                    <button onclick="openModal('noBakeOatBarsModal')">See Recipe</button>
                </div>

          
                <div id="noBakeOatBarsModal" class="modal">
                    <div class="modal-content">
                        <img src="../../assets/images/no-bake_fruity_oat_bars.png" alt="No-bake Fruity Oat Bars">
                        <div>
                            <span class="close" onclick="closeModal('noBakeOatBarsModal')">&times;</span>
                            <h2>No-bake Fruity Oat Bars Recipe</h2>
                            <p><strong>Ingredients:</strong></p>
                            <ul>
                                <li>150g/5½oz peanut butter</li>
                                <li>150g/5½oz honey or agave syrup</li>
                                <li>2 tsp vanilla extract</li>
                                <li>200g/7oz porridge oats, gluten-free if required</li>
                                <li>50g/1¾oz brown puffed rice or puffed oats, gluten-free if required</li>
                                <li>75g/2½oz pumpkin seeds</li>
                                <li>125g/4½oz dates, roughly chopped</li>
                            </ul>
                            <p><strong>Instructions:</strong></p>
                            <ol>
                                <li>In a saucepan, warm the peanut butter, honey, and vanilla extract over low heat until combined.</li>
                                <li>In a large bowl, mix the oats, puffed rice, pumpkin seeds, and dates.</li>
                                <li>Pour the warm peanut butter mixture over the dry ingredients and stir until fully coated.</li>
                                <li>Press the mixture firmly into a lined baking dish and refrigerate for at least 2 hours.</li>
                                <li>Cut into bars and enjoy!</li>
                            </ol>
                            <p><strong>Protein:</strong> 12g per serving</p>
                        </div>
                    </div>
                </div>

                <!-- Recipe 3: Zucchini Noodles with Pesto -->
                <div class="recipe">
                    <img src="../../assets/images/zucchini_noodles_pesto.png" alt="Zucchini Noodles with Pesto">
                    <h3>Zucchini Noodles with Pesto</h3>
                    <p>A light, healthy, and refreshing snack!</p>
                    <button onclick="openModal('zucchiniPestoModal')">See Recipe</button>
                </div>

                <div id="zucchiniPestoModal" class="modal">
                    <div class="modal-content">
                        <img src="../../assets/images/zucchini_noodles_pesto.png" alt="Zucchini Noodles with Pesto">
                        <div>
                            <span class="close" onclick="closeModal('zucchiniPestoModal')">&times;</span>
                            <h2>Zucchini Noodles with Pesto Recipe</h2>
                            <p><strong>Ingredients:</strong></p>
                            <ul>
                                <li>2 zucchinis, spiralized into noodles</li>
                                <li>1/4 cup homemade or store-bought pesto</li>
                                <li>1 tbsp olive oil</li>
                                <li>1 tbsp pine nuts (optional)</li>
                                <li>Parmesan cheese (optional)</li>
                            </ul>
                            <p><strong>Instructions:</strong></p>
                            <ol>
                                <li>Heat olive oil in a pan and sauté zucchini noodles for 2-3 minutes until just tender.</li>
                                <li>Stir in pesto and toss to coat evenly.</li>
                                <li>Top with pine nuts and a sprinkle of Parmesan cheese if desired.</li>
                            </ol>
                            <p><strong>Protein:</strong> 5g per serving</p>
                        </div>
                    </div>
                </div>

                <!-- Recipe 4: Cauliflower Buffalo Bites -->
                <div class="recipe">
                    <img src="../../assets/images/cauliflower_buffalo_bites.png" alt="Cauliflower Buffalo Bites">
                    <h3>Cauliflower Buffalo Bites</h3>
                    <p>A spicy, crispy snack with a kick!</p>
                    <button onclick="openModal('cauliflowerBuffaloModal')">See Recipe</button>
                </div>

               
                <div id="cauliflowerBuffaloModal" class="modal">
                    <div class="modal-content">
                        <img src="../../assets/images/cauliflower_buffalo_bites.png" alt="Cauliflower Buffalo Bites">
                        <div>
                            <span class="close" onclick="closeModal('cauliflowerBuffaloModal')">&times;</span>
                            <h2>Cauliflower Buffalo Bites Recipe</h2>
                            <p><strong>Ingredients:</strong></p>
                            <ul>
                                <li>1 head cauliflower, cut into florets</li>
                                <li>1/2 cup whole wheat flour</li>
                                <li>1 cup water</li>
                                <li>1 tsp garlic powder</li>
                                <li>1 cup buffalo sauce</li>
                                <li>Salt and pepper to taste</li>
                            </ul>
                            <p><strong>Instructions:</strong></p>
                            <ol>
                                <li>Preheat the oven to 400°F (200°C).</li>
                                <li>In a bowl, mix flour, water, garlic powder, salt, and pepper to make a batter.</li>
                                <li>Dip cauliflower florets into the batter and place them on a baking sheet.</li>
                                <li>Bake for 20 minutes, then toss in buffalo sauce and bake for an additional 10 minutes.</li>
                            </ol>
                            <p><strong>Protein:</strong> 6g per serving</p>
                        </div>
                    </div>
                </div>

                <!-- Recipe 5: Greek Yogurt with Berries & Nuts -->
                <div class="recipe">
                    <img src="../../assets/images/greek_yogurt_berries_nuts.png" alt="Greek Yogurt with Berries & Nuts">
                    <h3>Greek Yogurt with Berries & Nuts</h3>
                    <p>A creamy, crunchy, and delicious snack!</p>
                    <button onclick="openModal('greekYogurtModal')">See Recipe</button>
                </div>

                
                <div id="greekYogurtModal" class="modal">
                    <div class="modal-content">
                        <img src="../../assets/images/greek_yogurt_berries_nuts.png" alt="Greek Yogurt with Berries & Nuts">
                        <div>
                            <span class="close" onclick="closeModal('greekYogurtModal')">&times;</span>
                            <h2>Greek Yogurt with Berries & Nuts Recipe</h2>
                            <p><strong>Ingredients:</strong></p>
                            <ul>
                                <li>1 cup Greek yogurt</li>
                                <li>1/4 cup mixed berries (blueberries, strawberries, raspberries)</li>
                                <li>1 tbsp honey</li>
                                <li>2 tbsp chopped almonds or walnuts</li>
                            </ul>
                            <p><strong>Instructions:</strong></p>
                            <ol>
                                <li>Place Greek yogurt in a bowl.</li>
                                <li>Top with fresh berries and drizzle with honey.</li>
                                <li>Sprinkle with chopped almonds or walnuts for extra crunch.</li>
                            </ol>
                            <p><strong>Protein:</strong> 15g per serving</p>
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
