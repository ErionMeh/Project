<?php 
include_once("config.php");
require_once 'page_template.php';
?>
<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Breakfast</title>
    <link rel="stylesheet" href="../css/breakfast.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="../css/navbar.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    <div id="navbar-placeholder"></div>

    <!--Receta per Pancake-->
    <div id="pancake">

    <header>
        <h1>Pancake</h1>
    </header>
    <section class="receta-detaj">
       
        <div class="foto-komenti">
            <div class="foto">
                <img src="../../assets/images/oatmeal-pancakes.jpg" alt="Receta 1 Detaj" class="receta-foto">
            </div>
            <div class="receta-komenti">
                <h2>Banana Pancake</h2>
                <p>Crowd-pleasing <abbr title="Banana Pancake">BP</abbr> made from scratch that are ready in minutes. Pancake recipes are quick, customizable, and perfect for any meal.<br>
                    With a few simple ingredients, you can create fluffy, delicious pancakes that can be topped with a variety of toppings to suit your taste.</p>
            </div>
        </div>
             
        <nav>
            <ul>
                <li><a href="#ingredients">Ingredients:</a></li>
                <li><a href="#instructions">Instructions:</a></li>
                <li><a href="#importantinformation">Important Information</a></li>
                <li><a href="#nutritions">Nutritions</a></li>
                <li><a href="#tips">Tips</a></li>
            </ul>
        </nav>

        
        <div id="ingredients">
            <h2>Ingredients:</h2>
            <ul>
                <li>1 cup all-purpose flour</li>
                <li>1 tablespoon white sugar</li>
                <li>2 teaspoons baking powder</li>
                <li>¼ teaspoon salt</li>
                <li>1 egg, beaten</li>
                <li>1 cup milk</li>
                <li>2 tablespoons vegetable oil</li>
                <li>2 ripe bananas, mashed</li>
            </ul>
        </div>

        
        <div id="instructions">
            <h2>Instructions:</h2>
            <ol>
                <li>Gather all ingredients.</li>
                <li>Combine flour, white sugar, baking powder, and salt in a bowl.<br>
                     Mix together egg, milk, vegetable oil, and bananas in a second bowl.Stir flour mixture into banana mixture; batter will be slightly lumpy.</li>
                <li>Heat a lightly oiled griddle or frying pan over medium high heat.<br>
                    Pour or scoop the batter onto the griddle, using approximately 1/4 cup for each pancake.</li>
                <li>Cook until pancakes are golden brown, 3 to 5 minutes per side. Serve hot.</li>
                <li>Serve hot and enjoy!</li>
            </ol>
        </div>
        <div id="importantinformation">
            <h2>Important Information</h2>
            <ul>
                <li><strong>Prep time:</strong> 5 minutes</li>
                <li><strong>Cook time:</strong> 10 minutes</li>
                <li><strong>Calories:</strong> 193</li>
                <li><strong>Benefits:</strong> Rich in fiber and protein</li>
            </ul>
        </div>

        <div id="nutritions">
            <h2>Nutritions</h2>
        <div class="nutrition-table" id="nutritionTable">
            <h3>Nutrition Facts</h3>
            <p><strong>Servings Per Recipe:</strong> 6</p>
            <p><strong>Calories:</strong> 193</p>
            <table border="1" cellspacing="10" cellpadding="15"> 
            <table>
                <tr>
                    <th>Nutrient</th>
                    <th class="daily-value">% Daily Value</th>
                </tr>
                <tr>
                    <td>Total Fat: 7g</td>
                    <td class="daily-value">8%</td>
                </tr>
                <tr>
                    <td>Saturated Fat: 1g</td>
                    <td class="daily-value">6%</td>
                </tr>
                <tr>
                    <td>Cholesterol: 34mg</td>
                    <td class="daily-value">11%</td>
                </tr>
                <tr>
                    <td>Sodium: 246mg</td>
                    <td class="daily-value">11%</td>
                </tr>
                <tr>
                    <td>Total Carbohydrate: 29g</td>
                    <td class="daily-value">11%</td>
                </tr>
                <tr>
                    <td>Dietary Fiber: 2g</td>
                    <td class="daily-value">6%</td>
                </tr>
                <tr>
                    <td>Total Sugars: 9g</td>
                    <td class="daily-value"></td>
                </tr>
                <tr>
                    <td>Protein: 5g</td>
                    <td class="daily-value">10%</td>
                </tr>
            </table>
        </div>
    </div>        
        <div id="tips">
            <h2>Tips</h2>
            <ol>
                <li>Use well-ripened bananas for the best flavor.</li>
                <li>Cook the pancake at medium heat to avoid burning.</li>
                <li>Experiment with add-ins like blueberries, chocolate or nuts.</li>
            </ol>
        </div>

        <div id="video">
            <h2>Watch How to Make It</h2>
            <p>Click to watch the banana pancake making process:</p>
            <a href="https://www.youtube.com/watch?v=UOKJCwyUJGU" target="_blank">Banana Pancakes</a>
        </div>
    </section>

    <footer>
        <p>Home Cooking</p>
    </footer>


    
    <!--Receta per Omlette-->
    <div id="omlete">
        <header>
            <h1>Omlette</h1>
        </header>
        <section class="receta-detaj">
            <div class="foto-komenti">
                <div class="foto">
                    <img src="../../assets/images/omelette.webp" alt="Receta e Omletës" class="receta-foto">
                </div>
                <div class="receta-komenti">
                    <h2>Omlette</h2>
                    <p>This easy, fail-proof omelette recipe is truly the best.<br>
                        With a variety of filling suggestions, you will learn how to make an omelet at home that’s even more delicious than your favorite breakfast restaurant (but so simple)!</p>
                </div>
            </div>

            <nav>
                <ul>
                    <li><a href="#ingredients">Ingredients:</a></li>
                    <li><a href="#instructions">Instructions:</a></li>
                    <li><a href="#importantinformation">Important Information:</a></li>
                    <li><a href="#nutritions">Nutritions:</a></li>
                    <li><a href="#tips">Tips:</a></li>
                </ul>
            </nav>

            <div id="ingredients">
                <h2>Ingredients:</h2>
                <ul>
                    <li>3 large eggs</li>
                    <li>Vegetable oil</li>
                    <li>¼ cup sharp cheddar cheese shredded</li>
                    <li>½ Tablespoon salted butter</li>
                    <li>Minced garlic</li>
                    <li>Pinch salt and pepper</li>
                </ul>
            </div>

            <div id="instructions">
                <h2>Instructions:</h2>
                <ol>
                    <li>Prepare the filling.</li>
                    <li>Begin by whisking the eggs vigorously until they are homogenous.</li>
                    <li>Whisk in the salt and pepper.</li>
                    <li>Melt the butter in an 8” nonstick skillet over medium-low heat.</li>
                    <li>sprinkle the cheese over the top of the omelette and add the toppings on one half of the omelette.</li>
                    <li>Serve the omelette immediately.</li>
                </ol>
            </div>

            <div id="importantinformation">
                <h2>Important Information</h2>
                <ul>
                    <li><strong>Prep time:</strong> 5 minutes</li>
                    <li><strong>Cooking time:</strong> 5 minutes</li>
                    <li><strong>Calories:</strong> 150</li>
                    <li><strong>Benefits:</strong> Supports brain health</li>
                </ul>
            </div>

            <div id="nutritions">
                <h2>Nutritions</h2>
                <div class="nutrition-table" id="nutritionTable">
                    <h3>Nutriton Facts</h3>
                    <p><strong>Servings per recipe:</strong> 1</p>
                    <p><strong>Calories:</strong> 323 kcal</p>
                    <table border="1" cellspacing="10" cellpadding="15"> 
                    <table>
                        <tr>
                            <th>Nutrient</th>
                            <th class="daily-value">% Daily Value</th>
                        </tr>
                        <tr>
                            <td>Total fat: 10g</td>
                            <td class="daily-value">15%</td>
                        </tr>
                        <tr>
                            <td>Saturated fat: 3g</td>
                            <td class="daily-value">15%</td>
                        </tr>
                        <tr>
                            <td>Cholesterol: 525mg</td>
                            <td class="daily-value">62%</td>
                        </tr>
                        <tr>
                            <td>Natrium: 150mg</td>
                            <td class="daily-value">6%</td>
                        </tr>
                        <tr>
                            <td>Total carbohydrates: 1g</td>
                            <td class="daily-value">0%</td>
                        </tr>
                        <tr>
                            <td>Potassium: 207mg</td>
                            <td class="daily-value">24%</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="tips">
                <h2>Tips</h2>
                <ol>
                    <li>Use fresh ingredients for a better taste.</li>
                    <li>Experiment with different fillings for a unique taste.</li>
                    <li>Heat the pan on medium-low before adding the eggs.</li>
                    <li>Fold very carefully.</li>
                </ol>
            </div>

            <div id="video">
                <h2>Watch how to make it</h2>
                <p>Click to watch the omlette-making process:</p>
                <a href="https://www.youtube.com/watch?v=7dV4Qw8qdsA" target="_blank">Omlette</a>
            </div>
        </section>

        <footer>
            <p>Home Cooking</p>
        </footer>

    </div>


<!--Receta per Croissant-->
    <div id="croissant">
        <header>
            <h1>Croissant French Toast Bake</h1>
        </header>
        <section class="receta-detaj">
           <div class="foto-komenti">
            <div class="foto">
                <img src="../../assets/images/Croissant.webp" alt="Receta e Croissant" class="receta-foto">
            </div>
            <div class="receta-komenti">
                <h2>Croissant French Toast Bake</h2>
                <p>This <abbr title="Croissant French Toast Bake">CFT</abbr>is perfect for company or a holiday brunch—a grander version of breakfast pudding or baked French toast.<br>
                     Buttery croissants crisp on the top, and make it look as if you spent all day, but it is very easy to put together.</p>
            </div>
           </div>

           <nav>
               <ul>
                    <li><a href="#ingredients">Ingredients:</a></li>
                    <li><a href="#instructions">Instructions:</a></li>
                    <li><a href="#importantinformation">Important Information:</a></li>
                    <li><a href="#nutritions">Nutritions:</a></li>
                    <li><a href="#tips">Tips:</a></li>
               </ul>
           </nav>

           <div id="ingredients">
            <h2>Ingredients:</h2>
            <ol>
                <li>cooking spray</li>
                <li>6 large eggs</li>
                <li>1 cup milk</li>
                <li>1/2 cup heavy cream</li>
                <li>2 tablespoons brown sugar</li>
                <li>2 teaspoons vanilla extract</li>
                <li>2 teaspoons ground cinnamon</li>
                <li>1/4 teaspoon salt</li>
                <li>8 large croissants (about 1 1/4 pounds), halved horizontally</li>
                <li>confectioner's sugar, fresh berries, or maple syrup for serving</li>
            </ol>
           </div>

           <div id="instructions">
            <h2>Instructions:</h2>
            <ol>
                <li>Gather all ingredients. Preheat the oven to 350 degrees F (175 degrees C).<br>
                    Generously coat a 9x13-inch baking dish with nonstick cooking spray.</li>
                <li>Whisk together eggs, milk, heavy cream, brown sugar, vanilla, cinnamon, and salt in a large bowl.</li>
                <li>Dip each croissant half in the egg mixture until fully soaked.</li>
                <li>Arrange dipped croissants in the prepared baking dish, overlapping as needed. Pour any remaining egg mixture over croissants.</li>
                <li>Bake in the preheated oven until golden brown and a knife inserted in the center comes out clean, about 30 minutes.</li>
                <li>Let stand 15 minutes before serving. Serve with desired toppings.</li>
            </ol>
           </div>

           <div id="importantinformation">
            <h2>Important Information</h2>
            <ul>
                <li><strong>Prep time:</strong>15 minutes</li>
                <li><strong>Cooking time:</strong>30 minutes</li>
                <li><strong>Servings:</strong>10 </li>
                <li><strong>Benefits:</strong>Provides a quick energy boost and are a delicious treat.</li>
            </ul>
           </div>

           <div id="nutritions">
            <h2>Nutritions</h2>
            <div class="nutrition-table" id="nutritionTable">
                <h3>Nutrition Facts</h3>
                <p><strong>Servings per recipe:</strong>10</p>
                <p><strong>Calories:</strong>325</p>
                <table border="1" cellspacing="10" cellpadding="15"> 
                <table>
                    <tr>
                        <th>Nutrient:</th>
                        <th class="daily-value">Daily Value:</th>
                    </tr>
                    <tr>
                        <td>Total fat: 19g</td>
                        <td class="daily-value">24%</td>
                    </tr>
                    <tr>
                        <td>Saturated fat: 10g</td>
                        <td class="daily-value">51%</td>
                    </tr>
                    <tr>
                        <td>Cholesterol: 163mg</td>
                        <td class="daily-value">54%</td>
                    </tr>
                    <tr>
                        <td>Sodium: 361mg</td>
                        <td class="daily-value">16%</td>
                    </tr>
                    <tr>
                        <td>Total Carbohydrate: 29g</td>
                        <td class="daily-value">11%</td>
                    </tr>
                    <tr>
                        <td>Dietary Fiber: 2g</td>
                        <td class="daily-value">5%</td>
                    </tr>
                    <tr>
                        <td>Total Sugars: 19g</td>
                        <td class="daily-value"></td>
                    </tr>
                    <tr>
                        <td>Protein: 9g</td>
                        <td class="daily-value">19%</td>
                    </tr>
                    <tr>
                        <td>Iron: 2mg</td>
                        <td class="daily-value">9%</td>
                    </tr>
                    <tr>
                        <td>Potassium: 157mg</td>
                        <td class="daily-value">3%</td>
                    </tr>
                </table>
            </div>
           </div>
           <div id="tips">
            <h2>Tips</h2>
            <ol>
                <li>Use cold butter</li>
                <li>Brush with egg wash</li>
                <li>Use quality ingredients</li>
                <li>Top it with different fruits to suit your taste</li>
            </ol>
           </div>

           <div id="video">
            <h2>Watch how to make it</h2>
            <p>Click to watch the making process:</p>
            <a href="https://www.youtube.com/watch?v=k9DQYBlkHSQ" target="_blank">Croissant French Toast Bake</a>
           </div>
        </section>

        <footer>
            <p>Home Cooking</p>
        </footer>
    </div>
    

    <!--Receta per Cinnamon Rolls-->
    
    <div id="cinnamonrolls">
   
        <header>
            <h1>Cinnamon Rolls</h1>
        </header>
        <section class="receta-detaj">
           <div class="foto-komenti">
            <div class="foto">
                <img src="../../assets/images/Cinnamon-rolls.webp" alt="Receta e Cinnamon Rolls" class="receta-foto">
            </div>
            <div class="receta-komenti">
                <h2>Cinnamon Rolls</h2>
                <p>Easy to make but wonderful and very sweet to wake up to! You make it the night before and bake it in the morning.</p>
            </div>
           </div>

           <nav>
               <ul>
                    <li><a href="#ingredients">Ingredients:</a></li>
                    <li><a href="#instructions">Instructions:</a></li>
                    <li><a href="#importantinformation">Important Information:</a></li>
                    <li><a href="#nutritions">Nutritions:</a></li>
                    <li><a href="#tips">Tips:</a></li>
               </ul>
           </nav>

           <div id="ingredients">
            <h2>Ingredients:</h2>
            <ol>
                <li>¾ cup raisins</li>
                <li>20 frozen dinner rolls</li>
                <li>1 cup brown sugar</li>
                <li>¼ cup instant vanilla pudding mix</li>
                <li>1 tablespoon ground cinnamon</li>
                <li>¼ cup butter, melted</li>
            </ol>
           </div>

           <div id="instructions">
            <h2>Instructions:</h2>
            <ol>
                <li>Soak the raisins in warm water for 10 minutes; drain.</li>
                <li>Place the rolls in a lightly greased 10 inch Bundt pan or a 13x9 inch cake pan. In a medium mixing bowl combine the brown sugar, pudding mix and cinnamon. Sprinkle the soaked raisins and the cinnamon mixture over the rolls.<br>
                     Pour the melted butter over the rolls, cover with a clean damp cloth and let stand overnight at room temperature.</li>
                <li>In the morning, preheat oven to 350 degrees F (175 degrees C)</li>
                <li>Bake rolls for 25 minutes or until golden brown. Let cool in the pan for 5 minutes and then turn out onto a serving plate.</li>
            </ol>
           </div>

           <div id="importantinformation">
            <h2>Important Information</h2>
            <ul>
                <li><strong>Prep time:</strong>20 minutes</li>
                <li><strong>Cooking time:</strong>30 minutes</li>
                <li><strong>Servings:</strong>20</li>
                <li><strong>Benefits:</strong>Delicious and fast treat.</li>
            </ul>
           </div>

           <div id="nutritions">
            <h2>Nutritions</h2>

            <div class="nutrition-table" id="nutritionTable">
                <h3>Nutrition Facts</h3>
                <p><strong>Servings per recipe:</strong>20</p>
                <p><strong>Calories:</strong>214</p>
                <table border="1" cellspacing="10" cellpadding="15"> 
                <table>
                    <tr>
                        <th>Nutrient:</th>
                        <th class="daily-value">Daily Value:</th>
                    </tr>
                    <tr>
                        <td>Total fat: 5g</td>
                        <td class="daily-value">6%</td>
                    </tr>
                    <tr>
                        <td>Saturated fat: 2g</td>
                        <td class="daily-value">10%</td>
                    </tr>
                    <tr>
                        <td>Cholesterol: 8mg</td>
                        <td class="daily-value">10%</td>
                    </tr>
                    <tr>
                        <td>Sodium: 275mg</td>
                        <td class="daily-value">12%</td>
                    </tr>
                    <tr>
                        <td>Total Carbohydrate: 39g</td>
                        <td class="daily-value">14%</td>
                    </tr>
                    <tr>
                        <td>Dietary Fiber: 1g</td>
                        <td class="daily-value">4%</td>
                    </tr>
                    <tr>
                        <td>Total Sugars: 18g</td>
                        <td class="daily-value"></td>
                    </tr>
                    <tr>
                        <td>Protein: 5g</td>
                        <td class="daily-value">9%</td>
                    </tr>
                    <tr>
                        <td>Iron: 2mg</td>
                        <td class="daily-value">9%</td>
                    </tr>
                    <tr>
                        <td>Potassium: 114mg</td>
                        <td class="daily-value">2%</td>
                    </tr>
                </table>
            </div>
           </div>

           <div id="tips">
            <h2>Tips</h2>
            <ol>
                <li>Consider adding unique ingredients to your rolls, like orange zest or a dash of cardamom</li>
                <li>If serving for a crowd, place the rolls in a baking dish and cover them with foil to keep them warm during the event.</li>
                <li>Serve with a hot cup of coffee, tea, or a refreshing iced drink. </li>
                <li>For a twist, top them with whipped cream, crushed nuts (like pecans or walnuts), or a sprinkle of powdered sugar.</li>
            </ol>
           </div>

           <div id="video">
            <h2>Watch how to make it</h2>
            <p>Click to watch the making process:</p>
            <a href="https://www.youtube.com/watch?v=FoTaChNAk1o" target="_blank">Cinnamon Rolls</a>
           </div>
        </section>

        <footer>
            <p>Home Cooking</p>
        </footer>
    </div>


    <!-- Receta per Quinoa-->

    <div id="blueberryquinoa">

        <header>
            <h1>Blueberry Quinoa</h1>
        </header>
        <section class="receta-detaj">
           <div class="foto-komenti">
            <div class="foto">
                <img src="../../assets/images/Quinoa.jpg" alt="Receta e Quinoa" class="receta-foto">
            </div>
            <div class="receta-komenti">
                <h2>Blueberry Quinoa</h2>
                <p>Sweet blueberries and tart lemon pair well in this <abbr title="Blueberry Quinoa">BQ</abbr>, an alternative to oatmeal.<br>
                     High in protein and fiber, quinoa is a great start to your day! </p>
            </div>
           </div>

           <nav>
               <ul>
                    <li><a href="#ingredients">Ingredients:</a></li>
                    <li><a href="#instructions">Instructions:</a></li>
                    <li><a href="#importantinformation">Important Information:</a></li>
                    <li><a href="#nutritions">Nutritions:</a></li>
                    <li><a href="#tips">Tips:</a></li>
               </ul>
           </nav>

           <div id="ingredients">
            <h2>Ingredients:</h2>
            <ol>
                <li>1 cup quinoa</li>
                <li>2 cups nonfat milk</li>
                <li>1 pinch salt</li>
                <li>3 tablespoons maple syrup</li>
                <li>½ lemon, zested</li>
                <li>1 cup blueberries</li>
                <li>2 teaspoons flax seed</li>
            </ol>
           </div>

           <div id="instructions">
            <h2>Instructions:</h2>
            <ol>
                <li>Rinse quinoa with cold water in a fine-mesh strainer to remove bitterness until water runs clear and is no longer frothy.</li>
                <li>Heat milk in a saucepan over medium heat until warm, 2 to 3 minutes.<br>
                     Stir quinoa and salt into milk; simmer over medium-low heat until most liquid has been absorbed, about 20 minutes. </li>
                <li>Remove saucepan from heat. Stir maple syrup and lemon zest into quinoa mixture. Gently fold in blueberries.</li>
                <li>Divide quinoa mixture between 2 bowls; top each with 1 teaspoon flax seed to serve.</li>
            </ol>
           </div>

           <div id="importantinformation">
            <h2>Important Information</h2>
            <ul style="list-style-type: square;">
                <li><strong>Prep time:</strong>5 minutes</li>
                <li><strong>Cooking time:</strong>25 minutes</li>
                <li><strong>Servings:</strong>2</li>
                <li><strong>Benefits:</strong>Rich in protein, fiber, vitamins and minerals, making it a wholesome way to start your day.</li>
            </ul>
           </div>

           <div id="nutritions">
            <h2>Nutritions</h2>

            <div class="nutrition-table" id="nutritionTable">
                <h3>Nutrition Facts</h3>
                <p><strong>Servings per recipe:</strong>2</p>
                <p><strong>Calories:</strong>538</p>
                <table border="1" cellspacing="10" cellpadding="15"> 
                <table>
                    <tr>
                        <th>Nutrient:</th>
                        <th class="daily-value">Daily Value:</th>
                    </tr>
                    <tr>
                        <td>Total fat: 7g</td>
                        <td class="daily-value">9%</td>
                    </tr>
                    <tr>
                        <td>Saturated fat: 1g</td>
                        <td class="daily-value">5%</td>
                    </tr>
                    <tr>
                        <td>Cholesterol: 5mg</td>
                        <td class="daily-value">2%</td>
                    </tr>
                    <tr>
                        <td>Sodium: 112mg</td>
                        <td class="daily-value">5%</td>
                    </tr>
                    <tr>
                        <td>Total Carbohydrate: 99g</td>
                        <td class="daily-value">36%</td>
                    </tr>
                    <tr>
                        <td>Dietary Fiber: 9g</td>
                        <td class="daily-value">32%</td>
                    </tr>
                    <tr>
                        <td>Total Sugars: 37g</td>
                        <td class="daily-value"></td>
                    </tr>
                    <tr>
                        <td>Protein: 22g</td>
                        <td class="daily-value">43%</td>
                    </tr>
                    <tr>
                        <td>Iron: 5mg</td>
                        <td class="daily-value">27%</td>
                    </tr>
                    <tr>
                        <td>Potassium: 1013mg</td>
                        <td class="daily-value">22%</td>
                    </tr>
                </table>
            </div>
           </div>

           <div id="tips">
            <h2>Tips</h2> 
                <li>For a creamier texture, cook quinoa in milk (dairy or plant-based, like almond, oat, or coconut milk) instead of water.</li>
                <li>Instead of refined sugar, try adding a touch of honey, maple syrup, or agave syrup to sweeten the dish.</li>
                <li>For added crunch and protein, top your quinoa with some slivered almonds, chia seeds, or sunflower seeds.</li>
                <li>You can enjoy this breakfast warm right after cooking, or refrigerate it overnight and enjoy it cold as a refreshing breakfast bowl the next day.</li>
            </ol>
           </div>

           <div id="video">
            <h2>Watch how to make it</h2>
            <p>Click to watch the making process:</p>
            <a href="https://www.youtube.com/watch?v=wFThEw-FqL8" target="_blank">Blueberry Quinoa</a>
           </div>
        </section>

        <footer>
            <p>Home Cooking</p>
        </footer>
    </div>
    


    <!--Receta per Yogurt Parfait-->
    <div id="greekyogurt">

        <header>
            <h1>Greek Yogurt Parfait</h1>
        </header>
        <section class="receta-detaj">
           <div class="foto-komenti">
            <div class="foto">
                <img src="../../assets/images/berry-parfait.jpg" alt="Receta e Greek Yogurt" class="receta-foto">
            </div>
            <div class="receta-komenti">
                <h2>Greek Yogurt Parfait</h2>
                <p>These make-ahead fruity <abbr title="Greek Yogurt">GY</abbr> parfaits are perfect for an easy grab-and-go, high-protein breakfast! </p>
            </div>
           </div>

           <nav>
               <ul>
                    <li><a href="#ingredients">Ingredients:</a></li>
                    <li><a href="#instructions">Instructions:</a></li>
                    <li><a href="#importantinformation">Important Information:</a></li>
                    <li><a href="#nutritions">Nutritions:</a></li>
                    <li><a href="#tips">Tips:</a></li>
               </ul>
           </nav>

           <div id="ingredients">
            <h2>Ingredients:</h2>
            <ol>
                <li>4 cups nonfat plain Greek yogurt</li>
                <li>1 cup granular sucralose sweetener (such as Splenda)</li>
                <li>1 ½ teaspoons vanilla extract</li>
                <li>2 cups granola cereal</li>
                <li>8 cups frozen mixed fruit,no sugar added</li>
            </ol>
           </div>

           <div id="instructions">
            <h2>Instructions:</h2>
            <ol>
                <li>Combine yogurt, sweetener, and vanilla extract in a large bowl. Stir well.</li>
                <li>Place 1 cup of frozen fruit in each of 8 plastic cups. Top each with 1/2 cup yogurt mixture. Store in the refrigerator until needed.</li>
                <li>Top each cup of fruit and yogurt with 1/4 cup granola before eating.</li>
            </ol>
           </div>

           <div id="importantinformation">
            <h2>Important Information</h2>
            <ul style="list-style-type: circle;">
                <li><strong>Prep time:</strong>10 minutes</li>
                <li><strong>Total time:</strong>10 minutes</li>
                <li><strong>Servings:</strong>8</li>
                <li><strong>Benefits:</strong>Full of fiber, healthy fats, and protein.</li>
            </ul>
           </div>

           <div id="nutritions">
            <h2>Nutritions</h2>

            <div class="nutrition-table" id="nutritionTable">
                <h3>Nutrition Facts</h3>
                <p><strong>Servings per recipe:</strong>8</p>
                <p><strong>Calories:</strong>359</p>
                <table border="1" cellspacing="10" cellpadding="15"> 
                <table>
                    <tr>
                        <th>Nutrient:</th>
                        <th class="daily-value">Daily Value:</th>
                    </tr>
                    <tr>
                        <td>Total fat: 8g</td>
                        <td class="daily-value">10%</td>
                    </tr>
                    <tr>
                        <td>Saturated fat: 1g</td>
                        <td class="daily-value">7%</td>
                    </tr>
                    <tr>
                        <td>Cholesterol: 3mg</td>
                        <td class="daily-value">1%</td>
                    </tr>
                    <tr>
                        <td>Sodium: 106mg</td>
                        <td class="daily-value">5%</td>
                    </tr>
                    <tr>
                        <td>Total Carbohydrate: 61g</td>
                        <td class="daily-value">22%</td>
                    </tr>
                    <tr>
                        <td>Dietary Fiber: 5g</td>
                        <td class="daily-value">19%</td>
                    </tr>
                    <tr>
                        <td>Total Sugars: 16g</td>
                        <td class="daily-value"></td>
                    </tr>
                    <tr>
                        <td>Protein: 14g</td>
                        <td class="daily-value">27%</td>
                    </tr>
                    <tr>
                        <td>Iron: 2mg</td>
                        <td class="daily-value">10%</td>
                    </tr>
                    <tr>
                        <td>Potassium: 662mg</td>
                        <td class="daily-value">14%</td>
                    </tr>
                </table>
            </div>
           </div>

           <div id="tips">
            <h2>Tips</h2> 
                <li>For a low-calorie option, you can also use stevia or a sugar substitute.</li>
                <li> For added texture, layer in some frozen fruit as it will create a nice contrast with the creamy yogurt.</li>
                <li>For a more filling parfait, incorporate healthy fats by adding ingredients like sliced avocado, coconut flakes, or nut butter.</li>
                <li>You can get creative with your parfait by mixing in other ingredients like dark chocolate chips or dried fruit.</li>
            </ol>
           </div>

           <div id="video">
            <h2>Watch how to make it</h2>
            <p>Click to watch the making process:</p>
            <a href="https://www.youtube.com/watch?v=3ab-e37VSbI" target="_blank">Greek Yogurt Parfait</a>
           </div>
        </section>

        <footer>
            <p>Home Cooking</p>
        </footer>
    </div>
    

    <!--Receta per Crispy Potatoes-->

    <div id="crispypotatoes">

        <header>
            <h1>Crispy Potatoes</h1>
        </header>
        <section class="receta-detaj">
           <div class="foto-komenti">
            <div class="foto">
                <img src="../../assets/images/Potato.jpg" alt="Receta e Crispy Potatoes" class="receta-foto">
            </div>
            <div class="receta-komenti">
                <h2>Crispy Potatoes</h2>
                <p>The double fry method is key to achieving the super crispy, thin crust without overcooking the interior of the potato.</p>
            </div>
           </div>

           <nav>
               <ul>
                    <li><a href="#ingredients">Ingredients:</a></li>
                    <li><a href="#instructions">Instructions:</a></li>
                    <li><a href="#importantinformation">Important Information:</a></li>
                    <li><a href="#nutritions">Nutritions:</a></li>
                    <li><a href="#tips">Tips:</a></li>
               </ul>
           </nav>

           <div id="ingredients">
            <h2>Ingredients:</h2>
            <ol>
                <li>4 medium russet potatoes, peeled and cut into 2-inch pieces</li>
                <li>canola oil, for frying</li>
                <li>¼ cup rice flour</li>
                <li>2 tablespoons cornstarch</li>
                <li>1 teaspoon kosher salt</li>
                <li>1 teaspoon seasoned salt</li>
            </ol>
           </div>

           <div id="instructions">
            <h2>Instructions:</h2>
            <ol>
                <li>Place potatoes in a large saucepan with enough water to cover by 1 inch.<br>
                    Bring to a boil over high; cover, reduce heat to medium-high, and cook until potatoes are tender when pierced with a fork, 15 to 20 minutes. </li>
                <li>While potatoes cook, heat 3 inches of oil in a large Dutch oven or other heavy pot over medium-low to 350 degrees F (175 degrees C).</li>
                <li>Stir together mashed potatoes, rice flour, cornstarch, kosher salt, and seasoning salt in a medium bowl until mixture comes together and forms a dough,<br>
                    adding 1 teaspoon of water at a time as needed.</li>
                <li>Divide dough into 4 pieces. Shape each piece into a 1-inch diameter log, and cut each log into 1-inch pieces.</li>
                <li>Working in batches, fry dough pieces in hot oil until lightly golden, turning occasionally, 2 to 3 minutes.</li>
                <li>Fry a second time, in batches, until deep golden brown and crispy, another 2 minutes.<br>
                    Return to wire rack and dust with additional seasoning salt, if desired. Serve immediately.</li>
            </ol>
           </div>

           <div id="importantinformation">
            <h2>Important Information</h2>
            <ul>
                <li><strong>Prep time:</strong>15 minutes</li>
                <li><strong>Cook time:</strong>35 minutes</li>
                <li><strong>Servings:</strong>4</li>
                <li><strong>Benefits:</strong>The potato's fiber, potassium, vitamin C, and vitamin B6 content, coupled with its lack of cholesterol, all support heart health.</li>
            </ul>
           </div>

           <div id="nutritions">
            <h2>Nutritions</h2>

            <div class="nutrition-table" id="nutritionTable">
                <h3>Nutrition Facts</h3>
                <p><strong>Servings per recipe:</strong>4</p>
                <p><strong>Calories:</strong>217</p>
                <table border="1" cellspacing="10" cellpadding="15"> 
                <table>
                    <tr>
                        <th>Nutrient:</th>
                        <th class="daily-value">Daily Value:</th>
                    </tr>
                    <tr>
                        <td>Total fat: 0g</td>
                        <td class="daily-value">1%</td>
                    </tr>
                    <tr>
                        <td>Saturated fat: 0g</td>
                        <td class="daily-value">1%</td>
                    </tr>
                    <tr>
                        <td>Cholesterol: 0mg</td>
                        <td class="daily-value"></td>
                    </tr>
                    <tr>
                        <td>Sodium: 723mg</td>
                        <td class="daily-value">31%</td>
                    </tr>
                    <tr>
                        <td>Total Carbohydrate: 49g</td>
                        <td class="daily-value">18%</td>
                    </tr>
                    <tr>
                        <td>Dietary Fiber: 5g</td>
                        <td class="daily-value">18%</td>
                    </tr>
                    <tr>
                        <td>Total Sugars: 0g</td>
                        <td class="daily-value"></td>
                    </tr>
                    <tr>
                        <td>Protein: 5g</td>
                        <td class="daily-value">10%</td>
                    </tr>
                    <tr>
                        <td>Iron: 0mg</td>
                        <td class="daily-value"></td>
                    </tr>
                    <tr>
                        <td>Potassium: 910mg</td>
                        <td class="daily-value">19%</td>
                    </tr>
                </table>
            </div>
           </div>

           <div id="tips">
            <h2>Tips</h2> 
                <li>Season with salt, pepper, and any other spices you like. Garlic powder, onion powder, paprika, and rosemary work great for extra flavor.</li>
                <li>To get an even crisp on all sides, flip the potatoes halfway through the cooking process.</li>
                <li>Once the potatoes are crispy and golden, garnish them with freshly chopped herbs like parsley, thyme, or rosemary for added flavor and freshness.</li>
                <li>Crispy bubble potatoes are best served right away to maintain their crunch. They are perfect for dipping in ketchup, sour cream, or aioli.</li>
            </ol>
           </div>

           <div id="video">
            <h2>Watch how to make it</h2>
            <p>Click to watch the making process:</p>
            <a href="https://www.youtube.com/watch?v=KMwaioz09Nw" target="_blank">Crispy Potatoes</a>
           </div>
        </section>

        <footer>
            <p>Home Cooking</p>
        </footer>
    </div>
    


    <!--Receta per Pumpkin Soup-->

    <div id="pumpkinsoup">
 
        <header>
            <h1>Pumpkin Soup</h1>
        </header>
        <section class="receta-detaj">
           <div class="foto-komenti">
            <div class="foto">
                <img src="../../assets/images/Pumpkin-Soup-1.jpg" alt="Receta e Pumpkin Soup" class="receta-foto">
            </div>
            <div class="receta-komenti">
                <h2>Pumpkin Soup</h2>
                <p>This <abbr title="Pumpkin Soup">PS</abbr> is deliciously creamy and smooth. Tender onions and garlic give it depth of flavor, and it's lovely seasoned with fresh herbs and spices.</p>
            </div>
           </div>

           <nav>
               <ul>
                    <li><a href="#ingredients">Ingredients:</a></li>
                    <li><a href="#instructions">Instructions:</a></li>
                    <li><a href="#importantinformation">Important Information:</a></li>
                    <li><a href="#nutritions">Nutritions:</a></li>
                    <li><a href="#tips">Tips:</a></li>
               </ul>
           </nav>

           <div id="ingredients">
            <h2>Ingredients:</h2>
            <ol>
                <li>Pumpkin puree</li>
                <li>Onion and garlic</li>
                <li>Seasonings</li>
                <li>Whipping cream</li>
                <li>Fresh herbs</li>
                <li>Homemade chicken stocks</li>
            </ol>
           </div>

           <div id="instructions">
            <h2>Instructions:</h2>
            <ol>
                <li>Boil the stock, pumpkin, onion, garlic, thyme, salt and pepper.</li>
                <li>Reduce the heat and simmer. </li>
                <li>Blend in batches, return to the pot, then stir in the cream.</li>
                <li>Garnish with fresh parsley.</li>
            </ol>
           </div>

           <div id="importantinformation">
            <h2>Important Information</h2>
            <ul>
                <li><strong>Prep time:</strong> 15 minutes</li>
                <li><strong>Cook time:</strong> 55 minutes</li>
                <li><strong>Servings:</strong> 6</li>
                <li><strong>Benefits:</strong> Pumpkins contain antioxidants, including alpha-carotene and beta-carotene,
                    <br>which may help prevent free radical damage in the body.
                    <ul>
                        <li>Rich in vitamins A and C</li>
                        <li>Good for vision health</li>
                        <li>Helps boost immunity</li>
                    </ul>
                </li>
            </ul>
           </div>

           <div id="nutritions">
            <h2>Nutritions</h2>
            <div class="nutrition-table" id="nutritionTable">
                <h3>Nutrition Facts</h3>
                <p><strong>Servings per recipe:</strong>6</p>
                <p><strong>Calories:</strong>223</p>
                <table border="1" cellspacing="10" cellpadding="15"> 
                <table>
                    <tr>
                        <th>Nutrient:</th>
                        <th class="daily-value">Daily Value:</th>
                    </tr>
                    <tr>
                        <td>Total fat: 12g</td>
                        <td class="daily-value">15%</td>
                    </tr>
                    <tr>
                        <td>Saturated fat: 6g</td>
                        <td class="daily-value">28%</td>
                    </tr>
                    <tr>
                        <td>Cholesterol: 27mg</td>
                        <td class="daily-value">9%</td>
                    </tr>
                    <tr>
                        <td>Sodium: 401mg</td>
                        <td class="daily-value">17%</td>
                    </tr>
                    <tr>
                        <td>Total Carbohydrate: 25g</td>
                        <td class="daily-value">9%</td>
                    </tr>
                    <tr>
                        <td>Dietary Fiber: 5g</td>
                        <td class="daily-value">17%</td>
                    </tr>
                    <tr>
                        <td>Total Sugars: 11g</td>
                        <td class="daily-value"></td>
                    </tr>
                    <tr>
                        <td>Protein: 7g</td>
                        <td class="daily-value">14%</td>
                    </tr>
                    <tr>
                        <td>Iron: 2mg</td>
                        <td class="daily-value">13%</td>
                    </tr>
                    <tr>
                        <td>Potassium: 580mg</td>
                        <td class="daily-value">12%</td>
                    </tr>
                </table>
            </div>
           </div>

           <div id="tips">
            <h2>Tips</h2> 
                <li>If you're using canned or frozen pumpkin puree, it’s important to cook it for about 5 minutes to remove any tin or freezer flavors.</li>
                <li>For more robust flavors, make your own pumpkin puree:<br>
                     Place freshly chopped pumpkin on a parchment paper line baking sheet and bake for 30 minutes at 350 degrees F until fork tender and roasted</li>
                <li>It’s also fun to garnish each each bowl with toppings, such as toasted nuts, roasted chickpeas, chopped bacon, or freshly grated cheese.</li>
                <li>Store your leftover pumpkin soup in an airtight container in the refrigerator for up to five days. Reheat thoroughly on the stove or in the microwave.</li>
            </ol>
           </div>

           <div id="video">
            <h2>Watch how to make it</h2>
            <p>Click to watch the making process:</p>
            <a href="https://www.youtube.com/watch?v=olTgHutWRSI" target="_blank">Pumpkin Soup</a>
           </div>
        </section>

        <footer>
            <p>Home Cooking</p>
        </footer>
        <script src="navbar.php"></script></div>
    </div>
</body>
</html>