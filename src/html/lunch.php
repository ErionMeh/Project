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
    

    <!--Receta per Crispy Caesar Chicken Cutlets-->
    <div id="chickencutlets">
    <header>
        <h1>Crispy Caesar Chicken Cutlets</h1>
    </header>
    <section class="receta-detaj">
       <div class="foto-komenti">
        <div class="foto">
            <img src="../../assets/images/crispy-caesar-chicken-cutlets-v0-v7w7qpwfr9yc1.webp" alt="Receta e Chicken Cutlets" class="receta-foto">
        </div>
        <div class="receta-komenti">
            <h2>Crispy Caesar Chicken Cutlets</h2>
            <p>Chicken <abbr title="Caesar Cutlets">CC</abbr> are a perfect warm weather meal.<br>
             Crispy chicken cutlets on the outside, tender and juicy on the inside all topped with crisp romaine lettuce and the perfect homemade dressing that is both salty and creamy.</p>
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
            <li>1 cup (3 ounces) seasoned croutons (such as Texas Toast), crumbled</li>
            <li>1/2 cup seasoned breadcrumbs</li>
            <li>1/2 cup pre-shredded Parmesan cheese, plus more for serving</li>
            <li>2 teaspoons lemon pepper seasoning mix</li>
            <li>2 teaspoons dried oregano</li>
            <li>1 teaspoon ground mustard</li>
            <li>1 cup creamy Caesar dressing (such as Ken’s Steak House), plus more for serving</li>
            <li>1 cup whole milk</li>
            <li>6 (4 ounce) chicken breasts cutlets, patted dry</li>
        </ol>
       </div>

       <div id="instructions">
        <h2>Instructions:</h2>
        <ol>
            <li>Gather all ingredients.</li>
            <li>Process croutons in a food processor until finely crumbled, about 8 pulses.</li>
            <li>Prepare dredging station. Stir together croutons, breadcrumbs, Parmesan cheese, lemon pepper, oregano, mustard, garlic powder, onion powder, and cayenne in a shallow bowl.<br>
             Whisk together Caesar dressing and milk until smooth in a separate shallow bowl. Set aside.</li>
            <li>Preheat the air fryer to 390 degrees F for 2 minutes (200 degrees C). Lightly coat the air fryer basket with cooking spray.</li>
            <li>Working with 1 cutlet at a time, fully submerge each cutlet into dressing mixture, shaking off excess.<br>
                Dredge cutlets in crouton mixture, pressing firmly until evenly coated on both sides. Place on a plate in an even layer.</li>
            <li>Working in batches, add 2 cutlets to basket in one even layer, and cook until golden brown and cooked through, 10 to 12 minutes, flipping halfway through.</li>
            <li>Transfer to a serving platter, and repeat with remaining cutlets. Serve with additional Parmesan cheese and dressing.</li>
        </ol>
       </div>

       <div id="importantinformation">
        <h2>Important Information</h2>
        <ul>
            <li><strong>Prep time:</strong>15 minutes</li>
            <li><strong>Cook time:</strong>35 minutes</li>
            <li><strong>Servings:</strong>6</li>
            <li><strong>Benefits:</strong>ight Caesar dressings contribute fewer calories, so they can be good alternatives to full-fat versions.</li>
        </ul>
       </div>

       <div id="nutritions">
        <h2>Nutritions</h2>

        <div class="nutrition-table" id="nutritionTable">
            <h3>Nutrition Facts</h3>
            <p><strong>Servings per recipe:</strong>6</p>
            <p><strong>Calories:</strong>583</p>
            <table border="1" cellspacing="10" cellpadding="15"> 
            <table>
                <tr>
                    <th>Nutrient:</th>
                    <th class="daily-value">Daily Value:</th>
                </tr>
                <tr>
                    <td>Total fat: 35g</td>
                    <td class="daily-value">45%</td>
                </tr>
                <tr>
                    <td>Saturated fat: 8g</td>
                    <td class="daily-value">38%</td>
                </tr>
                <tr>
                    <td>Cholesterol: 157mg</td>
                    <td class="daily-value">52%</td>
                </tr>
                <tr>
                    <td>Sodium: 1280mg</td>
                    <td class="daily-value">56%</td>
                </tr>
                <tr>
                    <td>Total Carbohydrate: 30g</td>
                    <td class="daily-value">11%</td>
                </tr>
                <tr>
                    <td>Dietary Fiber: 2g</td>
                    <td class="daily-value">8%</td>
                </tr>
                <tr>
                    <td>Total Sugars: 5g</td>
                    <td class="daily-value"></td>
                </tr>
                <tr>
                    <td>Protein: 34g</td>
                    <td class="daily-value">69%</td>
                </tr>
                <tr>
                    <td>Iron: 3mg</td>
                    <td class="daily-value">18%</td>
                </tr>
                <tr>
                    <td>Potassium: 375mg</td>
                    <td class="daily-value">8%</td>
                </tr>
            </table>
        </div>
       </div>

       <div id="tips">
        <h2>Tips</h2> 
            <li>Use thinly sliced chicken breasts or pound regular chicken breasts to an even thickness to ensure they cook evenly and quickly.</li>
            <li>Marinate the chicken in a light Caesar dressing for at least 30 minutes to infuse flavor.<br>
             Look for dressings with lower fat and calorie content, or make your own using Greek yogurt, lemon juice, Dijon mustard, garlic, and a small amount of grated Parmesan.</li>
            <li>Top with fresh herbs like parsley or basil for added flavor and a touch of freshness. A sprinkle of cracked black pepper or a few red pepper flakes can enhance the taste.</li>
        </ol>
       </div>

       <div id="video">
        <h2>Watch how to make it</h2>
        <p>Click to watch the making process:</p>
        <a href="https://www.youtube.com/watch?v=ajkShT9z3Do" target="_blank">Chicken Cutlets</a>
       </div>
    </section>

    <footer>
        <p>Home Cooking</p>
    </footer>

</div>



<!--Receta per Pizza-->

<div id="pizza">
    <header>
        <h1>Pizza</h1>
    </header>
    <section class="receta-detaj">
       <div class="foto-komenti">
        <div class="foto">
            <img src="../../assets/images/Pizza.jpg" alt="Receta e Pices" class="receta-foto">
        </div>
        <div class="receta-komenti">
            <h2>Pizza</h2>
            <p>Pizza on the grill is a fantastic way to make pizza at home. The heat of a hot grill is a perfect match for a professional pizza oven.</p>
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
            <li>1 cup warm water (110 degrees F/45 degrees C)</li>
            <li>1 (.25 ounce) package active dry yeast</li>
            <li>1 pinch white sugar</li>
            <li>3 ⅓ cups all-purpose flour</li>
            <li>1 tablespoon olive oil</li>
            <li>2 teaspoons kosher salt</li>
            <li>2 cloves garlic, minced</li>
            <li>1 tablespoon chopped fresh basil</li>
            <li>¼ cup tomato sauce, divided</li>
            <li>¼ cup roasted red peppers, drained and chopped, divided</li>
            <li>4 tablespoons chopped fresh basil, divided</li>
        </ol>
       </div>

       <div id="instructions">
        <h2>Instructions:</h2>
        <ol>
            <li>Gather all ingredients.</li>
            <li>Make dough: Pour warm water into a large bowl; dissolve yeast and sugar in warm water.<br>
                 Let stand until yeast softens and begins to form a creamy foam, about 5 to 10 minutes.</li>
            <li>Mix in flour, 1 tablespoon olive oil, and salt until dough pulls away from the sides of the bowl.</li>
            <li>Turn onto a lightly floured surface. Knead until smooth, about 8 minutes.</li>
            <li>Place dough in a well-oiled bowl and cover with a damp cloth.</li>
            <li>Set aside to rise until doubled, about 1 hour. Punch down; knead in garlic and basil. Set aside to rise for 1 more hour, or until doubled again.</li>
            <li>Make pizzas: Punch down dough and divide in half. Form each half into an oblong shape 3/8 to 1/2 inch thick.</li>
            <li>Carefully place one piece of dough on the hot grill.<br>
                Dough will begin to puff almost immediately. When the bottom crust has lightly browned, turn dough over using two spatulas.</li>
            <li>Top with 1/2 of each of the following: tomato sauce, chopped tomatoes, olives, red peppers, cheese, and basil.</li>
        </ol>
       </div>

       <div id="importantinformation">
        <h2>Important Information</h2>
        <ul>
            <li><strong>Prep time:</strong>45 minutes</li>
            <li><strong>Cook time:</strong>15 minutes</li>
            <li><strong>Servings:</strong>16</li>
            <li><strong>Benefits:</strong>Satisfying meal, providing energy, essential nutrients, and joy when enjoyed in moderation.</li>
        </ul>
       </div>

       <div id="nutritions">
        <h2>Nutritions</h2>

        <div class="nutrition-table" id="nutritionTable">
            <h3>Nutrition Facts</h3>
            <p><strong>Servings per recipe:</strong>16</p>
            <p><strong>Calories:</strong>212</p>
            <table border="1" cellspacing="10" cellpadding="15"> 
            <table>
                <tr>
                    <th>Nutrient:</th>
                    <th class="daily-value">Daily Value:</th>
                </tr>
                <tr>
                    <td>Total fat: 11g</td>
                    <td class="daily-value">14%</td>
                </tr>
                <tr>
                    <td>Saturated fat: 3g</td>
                    <td class="daily-value">15%</td>
                </tr>
                <tr>
                    <td>Cholesterol: 11mg</td>
                    <td class="daily-value">4%</td>
                </tr>
                <tr>
                    <td>Sodium: 399mg</td>
                    <td class="daily-value">17%</td>
                </tr>
                <tr>
                    <td>Total Carbohydrate: 22g</td>
                    <td class="daily-value">8%</td>
                </tr>
                <tr>
                    <td>Dietary Fiber: 1g</td>
                    <td class="daily-value">4%</td>
                </tr>
                <tr>
                    <td>Total Sugars: 1g</td>
                    <td class="daily-value"></td>
                </tr>
                <tr>
                    <td>Protein: 6g</td>
                    <td class="daily-value">12%</td>
                </tr>
                <tr>
                    <td>Iron: 2mg</td>
                    <td class="daily-value">9%</td>
                </tr>
                <tr>
                    <td>Potassium: 95mg</td>
                    <td class="daily-value">2%</td>
                </tr>
            </table>
        </div>
       </div>

       <div id="tips">
        <h2>Tips</h2> 
            <li>Choose thin-crust pizza to reduce calorie intake.</li>
            <li>Maximize nutrition by loading up on vegetables.</li>
            <li>Opt for part-skim mozzarella or less cheese overall.</li>
        </ol>
       </div>

       <div id="video">
        <h2>Watch how to make it</h2>
        <p>Click to watch the making process:</p>
        <a href="https://www.youtube.com/watch?v=7HyTRka6elw" target="_blank">Pizza</a>
       </div>
    </section>

    <footer>
        <p>Home Cooking</p>
    </footer>

</div>


<!--Receta per Chicken Tenders -->

<div id="chickentenders">
    <header>
        <h1>Honey Mustard-Panko Chicken Tenders</h1>
    </header>
    <section class="receta-detaj">
       <div class="foto-komenti">
        <div class="foto">
            <img src="../../assets/images/chickentenders.jpg" alt="Receta e Chicken Tenders" class="receta-foto">
        </div>
        <div class="receta-komenti">
            <h2>Honey Mustard-Panko Chicken Tenders</h2>
            <p>A homemade honey mustard sauce is served with these easy baked panko <abbr title="Chicken Tenders">CT</abbr> for a family-friendly dish that everyone will enjoy.</p>
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
            <li>1 cup panko bread crumbs</li>
            <li>2 ounces grated Parmesan cheese</li>
            <li>½ teaspoon salt</li>
            <li>¼ teaspoon ground black pepper</li>
            <li>¼ teaspoon ground paprika</li>
            <li>4 tablespoons Dijon mustard</li>
            <li>3 tablespoons honey</li>
            <li>2 pounds skinless, boneless chicken breast halves</li>
            <li>4 cloves garlic, minced</li>
            <li>4 tablespoons honey</li>
        </ol>
       </div>

       <div id="instructions">
        <h2>Instructions:</h2>
        <ol>
            <li>Preheat the oven to 450 degrees F (230 degrees C). Lightly coat a large baking dish with oil.</li>
            <li>Prepare chicken tenders: Mix panko, Parmesan cheese, salt, pepper, and paprika together in a medium bowl.<br>
                Mix mustard, honey, and olive oil together in a small bowl.</li>
            <li>Slice chicken in half horizontally to form thin fillets. Cut each fillet into strips.<br>
                Dip chicken strips in the mustard mixture, then coat in the panko, and place in the prepared baking dish.</li>
            <li>Bake in the preheated oven until tenders are golden brown, 15 to 20 minutes, turning over halfway through.</li>
            <li>Prepare sauce: Mix garlic, mustard, honey, oil, lemon juice, salt, and pepper in a small bowl. Serve sauce with chicken tenders.</li>
        </ol>
       </div>

       <div id="importantinformation">
        <h2>Important Information</h2>
        <ul>
            <li><strong>Prep time:</strong>15 minutes</li>
            <li><strong>Cook time:</strong>15 minutes</li>
            <li><strong>Servings:</strong>8</li>
        </ul>
       </div>

       <div id="nutritions">
        <h2>Nutritions</h2>

        <div class="nutrition-table" id="nutritionTable">
            <h3>Nutrition Facts</h3>
            <p><strong>Servings per recipe:</strong>8</p>
            <p><strong>Calories:</strong>327</p>
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
                    <td>Saturated fat: 3g</td>
                    <td class="daily-value">16%</td>
                </tr>
                <tr>
                    <td>Cholesterol: 71mg</td>
                    <td class="daily-value">24%</td>
                </tr>
                <tr>
                    <td>Sodium: 825mg</td>
                    <td class="daily-value">36%</td>
                </tr>
                <tr>
                    <td>Total Carbohydrate: 30g</td>
                    <td class="daily-value">11%</td>
                </tr>
                <tr>
                    <td>Dietary Fiber: 1g</td>
                    <td class="daily-value">3%</td>
                </tr>
                <tr>
                    <td>Total Sugars: 15g</td>
                    <td class="daily-value"></td>
                </tr>
                <tr>
                    <td>Protein: 28g</td>
                    <td class="daily-value">56%</td>
                </tr>
                <tr>
                    <td>Iron: 1mg</td>
                    <td class="daily-value">6%</td>
                </tr>
                <tr>
                    <td>Potassium: 241mg</td>
                    <td class="daily-value">5%</td>
                </tr>
            </table>
        </div>
       </div>

       <div id="tips">
        <h2>Tips</h2> 
            <li>Slice chicken breasts into even-sized strips to ensure uniform cooking.</li>
            <li>Dip the chicken in flour, then in the honey mustard mixture, and finally in panko breadcrumbs for a thick, crispy coating.</li>
            <li>Lightly spray the tenders with cooking spray before baking or air frying to enhance crispiness.</li>
        </ol>
       </div>

       <div id="video">
        <h2>Watch how to make it</h2>
        <p>Click to watch the making process:</p>
        <a href="https://www.youtube.com/watch?v=SL60Imk8nTE" target="_blank">Chicken Tenders</a>
       </div>
    </section>

    <footer>
        <p>Home Cooking</p>
    </footer>

</div>


<!--Receta per Pastry shells-->

<div id="pastryshells">
    <header>
        <h1>Sausage and Chicken Puff Pastry Shells</h1>
    </header>
    <section class="receta-detaj">
       <div class="foto-komenti">
        <div class="foto">
            <img src="../../assets/images/pastryshell.webp" alt="Receta e Pastry Shells" class="receta-foto">
        </div>
        <div class="receta-komenti">
            <h2>Sausage and Chicken Puff Pastry Shells</h2>
            <p>Turn a boring, ordinary pot pie into a savory chicken and Jimmy Dean sausage filling piled high on flaky puff pastry shells.<br>
                Remember to thaw the puff pastry shells overnight in the refrigerator.</p>
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
            <li>1 tablespoon unsalted butter</li>
            <li>½ cup chopped baby bella mushrooms</li>
            <li>2 (10 ounce) packages Pepperidge Farm Patty Shells-Puff Pastry</li>
            <li>1 cup chopped carrots</li>
            <li>1 cup chopped celery</li>
            <li>1 cup chopped sweet onion</li>
            <li>½ cup vegetable oil, divided</li>
            <li>6 tablespoons all-purpose flour</li>
            <li>3 ½ cups milk</li>
            <li>1 ½ teaspoons garlic salt, or more to taste</li>
            <li>¼ teaspoon ground black pepper</li>
        </ol>
       </div>

       <div id="instructions">
        <h2>Instructions:</h2>
        <ol>
            <li>Preheat the oven to 425 degrees F (220 degrees C). Line a baking sheet with parchment paper.</li>
            <li>Melt butter in a pan over medium heat. Cook and stir mushrooms until browned, 5 to 10 minutes. Set aside.</li>
            <li>Arrange thawed puffed pastry shells on the prepared baking sheet.<br>
                Bake in the preheated oven for 18 to 20 minutes. Cool on a wire rack for 5 minutes. Use a knife to remove the tops; reserve.</li>
            <li>Meanwhile, heat 2 tablespoons oil in a large pot over medium-low heat. Add carrots, celery, and onion.<br>
                Cover and cook, stirring frequently, until vegetables are soft, 15 to 20 minutes. Remove from heat and mix in mushrooms.</li>
            <li>Heat remaining oil in a pot over medium-low heat. Add flour and cook, stirring constantly with a wire whisk, until browned, 2 to 30 minutes.<br>
                Slowly pour in milk and stir constantly until blended. Whisk until well blended. Cook and stir gravy until boiling, 3 to 5 minutes. Reduce heat to a simmer.</li>
            <li>Spoon a generous serving of the sausage-chicken mixture into the puff pastry shells. Cover with the tops.</li>
        </ol>
       </div>

       <div id="importantinformation">
        <h2>Important Information</h2>
        <ul>
            <li><strong>Prep time:</strong>30 minutes</li>
            <li><strong>Cook time:</strong>45 minutes</li>
            <li><strong>Servings:</strong>12</li>
        </ul>
       </div>

       <div id="nutritions">
        <h2>Nutritions</h2>

        <div class="nutrition-table" id="nutritionTable">
            <h3>Nutrition Facts</h3>
            <p><strong>Servings per recipe:</strong>12</p>
            <p><strong>Calories:</strong>386</p>
            <table border="1" cellspacing="10" cellpadding="15"> 
            <table>
                <tr>
                    <th>Nutrient:</th>
                    <th class="daily-value">Daily Value:</th>
                </tr>
                <tr>
                    <td>Total fat: 26g</td>
                    <td class="daily-value">34%</td>
                </tr>
                <tr>
                    <td>Saturated fat: 7g</td>
                    <td class="daily-value">35%</td>
                </tr>
                <tr>
                    <td>Cholesterol: 28mg</td>
                    <td class="daily-value">9%</td>
                </tr>
                <tr>
                    <td>Sodium: 520mg</td>
                    <td class="daily-value">23%</td>
                </tr>
                <tr>
                    <td>Total Carbohydrate: 26g</td>
                    <td class="daily-value">9%</td>
                </tr>
                <tr>
                    <td>Dietary Fiber: 2g</td>
                    <td class="daily-value">6%</td>
                </tr>
                <tr>
                    <td>Total Sugars: 7g</td>
                    <td class="daily-value"></td>
                </tr>
                <tr>
                    <td>Protein: 14g</td>
                    <td class="daily-value">27%</td>
                </tr>
                <tr>
                    <td>Iron: 2mg</td>
                    <td class="daily-value">12%</td>
                </tr>
                <tr>
                    <td>Potassium: 256mg</td>
                    <td class="daily-value">5%</td>
                </tr>
            </table>
        </div>
       </div>

       <div id="tips">
        <h2>Tips</h2> 
            <li>Use high-quality puff pastry for the best flakiness. Thaw it properly in the fridge to prevent it from becoming too soft to work with.</li>
            <li>Fully cook the sausage and chicken before filling the shells. Add aromatics like onions, garlic, or bell peppers for extra flavor</li>
            <li>Combine the cooked chicken and sausage with a creamy element like cream cheese, a béchamel sauce, or even a touch of ricotta to help hold the filling together.</li>
        </ol>
       </div>

       <div id="video">
        <h2>Watch how to make it</h2>
        <p>Click to watch the making process:</p>
        <a href="https://www.youtube.com/watch?v=N7aTKHKADDc" target="_blank">Pastry Shells</a>
       </div>
    </section>

    <footer>
        <p>Home Cooking</p>
    </footer>

</div>


<!--Receta per Tameya-->

<div id="taameya">
    <header>
        <h1>Ta'ameya</h1>
    </header>
    <section class="receta-detaj">
       <div class="foto-komenti">
        <div class="foto">
            <img src="../../assets/images/tameya.webp" alt="Receta e Tameya" class="receta-foto">
        </div>
        <div class="receta-komenti">
            <h2>Ta'ameya</h2>
            <p>Ta'ameya (Egyptian falafel) is an all-time favorite street food in Egypt. In most parts of the Middle East, falafel is made with ground chickpeas.<br>
                In Egypt however, we make it with dried fava beans. These are best served with pita bread, tomato, onions, and tahini sauce.</p>
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
            <li>2 cups dried split fava beans</li>
            <li>1 red onion, quartered</li>
            <li>½ cup fresh parsley</li>
            <li>½ cup fresh cilantro</li>
            <li>½ cup fresh dill</li>
            <li>3 cloves garlic</li>
            <li>1 ½ teaspoons ground coriander</li>
            <li>1 ½ teaspoons salt</li>
            <li>1 teaspoon ground cumin</li>
            <li>1 cup sesame seeds (Optional)</li>
            <li>1 quart vegetable oil for frying, or as needed</li>
        </ol>
       </div>

       <div id="instructions">
        <h2>Instructions:</h2>
        <ol>
            <li>Place fava beans into large bowl and cover with several inches of water. Let soak, 8 hours to overnight. Drain.</li>
            <li>Combine soaked fava beans, red onion, parsley, cilantro, dill, garlic, coriander, salt, and cumin in a food processor; process to a dough-like consistency.</li>
            <li>Heat a skillet over medium heat. Add sesame seeds; cook, stirring occasionally, until toasted, about 5 minutes. Transfer to a large plate.</li>
            <li>Shape fava bean mixture into about 50 balls. Roll balls in sesame seeds to coat.</li>
            <li>Fill a large saucepan 1/4 full with oil; heat over medium heat. Fry fava bean balls in batches until golden brown, 3 to 5 minutes per batch. Drain on paper towels.</li>
        </ol>
       </div>

       <div id="importantinformation">
        <h2>Important Information</h2>
        <ul>
            <li><strong>Prep time:</strong>20 minutes</li>
            <li><strong>Cook time:</strong>15 minutes</li>
            <li><strong>Servings:</strong>10</li>
        </ul>
       </div>

       <div id="nutritions">
        <h2>Nutritions</h2>

        <div class="nutrition-table" id="nutritionTable">
            <h3>Nutrition Facts</h3>
            <p><strong>Servings per recipe:</strong>10</p>
            <p><strong>Calories:</strong>814</p>
            <table border="1" cellspacing="10" cellpadding="15"> 
            <table>
                <tr>
                    <th>Nutrient:</th>
                    <th class="daily-value">Daily Value:</th>
                </tr>
                <tr>
                    <td>Total fat: 87g</td>
                    <td class="daily-value">112%</td>
                </tr>
                <tr>
                    <td>Saturated fat: 6g</td>
                    <td class="daily-value">32%</td>
                </tr>
                <tr>
                    <td>Cholesterol: 0mg</td>
                    <td class="daily-value">0%</td>
                </tr>
                <tr>
                    <td>Sodium: 402mg</td>
                    <td class="daily-value">17%</td>
                </tr>
                <tr>
                    <td>Total Carbohydrate: 26g</td>
                    <td class="daily-value">9%</td>
                </tr>
                <tr>
                    <td>Dietary Fiber: 8g</td>
                    <td class="daily-value">3%</td>
                </tr>
                <tr>
                    <td>Total Sugars: 2g</td>
                    <td class="daily-value"></td>
                </tr>
                <tr>
                    <td>Protein: 3g</td>
                    <td class="daily-value">6%</td>
                </tr>
                <tr>
                    <td>Iron: 1mg</td>
                    <td class="daily-value">5%</td>
                </tr>
                <tr>
                    <td>Potassium: 141mg</td>
                    <td class="daily-value">3%</td>
                </tr>
            </table>
        </div>
       </div>

       <div id="tips">
        <h2>Tips</h2> 
            <li>Blend the soaked fava beans with fresh herbs like parsley, cilantro, and dill, along with onions, garlic, and spices (cumin, coriander, and salt). </li>
            <li>Let the mixture rest in the refrigerator for at least 30 minutes to help it firm up, making it easier to shape.</li>
            <li>Use your hands or a falafel press to shape the mixture into uniform patties or balls. Press a small indentation in the center to help them cook evenly.</li>
        </ol>
       </div>

       <div id="video">
        <h2>Watch how to make it</h2>
        <p>Click to watch the making process:</p>
        <a href="https://www.youtube.com/watch?v=Rx0kP9U40VE" target="_blank">Ta'ameya</a>
       </div>
    </section>
    <footer>
        <p>Home Cooking</p>
    </footer>

</div>


<!--Receta per Roll bowl-->

<div id="rollbowl">
    <header>
        <h1>Spring Roll Bowl</h1>
    </header>
    <section class="receta-detaj">
       <div class="foto-komenti">
        <div class="foto">
            <img src="../../assets/images/rollbowl.png" alt="Receta e Roll Bowl" class="receta-foto">
        </div>
        <div class="receta-komenti">
            <h2>Spring Roll Bowl</h2>
            <p>This delicious spring <abbr title="Roll Bowl">RB</abbr> is full of crisp and crunchy vegetables, shrimp, and vermicelli noodles, topped with peanut sauce and served with Vietnamese Nuoc Cham sauce —the perfect light lunch.</p>
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
            <li>4 ounces vermicelli noodles</li>
            <li>1 pound large shrimp - peeled, deveined, and cooked</li>
            <li>1 head butterhead lettuce, torn into bite-sized pieces</li>
            <li>2 large carrots, peeled and julienned</li>
            <li>2 green onions, sliced on a bias</li>
            <li>1/2 cups small mint leaves (or torn large leaves)</li>
            <li>1/4 cup creamy peanut butter</li>
            <li>1/4 cup canned unsweetened light coconut milk</li>
            <li>1 tablespoon chopped roasted peanuts</li>
            <li>1 teaspoon sambal oelek (optional)</li>
            <li>2 tablespoons fish sauce</li>
            <li>1 tablespoon lime juice</li>
        </ol>
       </div>

       <div id="instructions">
        <h2>Instructions:</h2>
        <ol>
            <li>Gather all ingredients.</li>
            <li>Cook vermicelli noodles according to package directions. Run under cold water to cool. Divide noodles among four bowls.</li>
            <li>Add one fourth of the cooked shrimp to each bowl.<br>
                On the side of the noodles arrange 1 cup of lettuce, 1/4  cup carrots, 1/4  cup cucumber, and 1/4  an avocado to each bowl.</li>
            <li>Meanwhile for Nam Chom combine rice vinegar, fish sauce, lime juice, ginger, and birds eye chile (optional) in a small bowl.</li>
            <li>For the peanut sauce combine peanut butter, coconut milk, hoisin sauce, lime juice, peanuts and sambal oelec in a small bowl; whisk until smooth.</li>
        </ol>
       </div>

       <div id="importantinformation">
        <h2>Important Information</h2>
        <ul>
            <li><strong>Prep time:</strong>25 minutes</li>
            <li><strong>Cook time:</strong>25 minutes</li>
            <li><strong>Servings:</strong>4</li>
        </ul>
       </div>

       <div id="nutritions">
        <h2>Nutritions</h2>

        <div class="nutrition-table" id="nutritionTable">
            <h3>Nutrition Facts</h3>
            <p><strong>Servings per recipe:</strong>10</p>
            <p><strong>Calories:</strong>574</p>
            <table border="1" cellspacing="10" cellpadding="15"> 
            <table>
                <tr>
                    <th>Nutrient:</th>
                    <th class="daily-value">Daily Value:</th>
                </tr>
                <tr>
                    <td>Total fat: 32g</td>
                    <td class="daily-value">41%</td>
                </tr>
                <tr>
                    <td>Saturated fat: 6g</td>
                    <td class="daily-value">31%</td>
                </tr>
                <tr>
                    <td>Cholesterol: 240mg</td>
                    <td class="daily-value">80%</td>
                </tr>
                <tr>
                    <td>Sodium: 2096mg</td>
                    <td class="daily-value">90%</td>
                </tr>
                <tr>
                    <td>Total Carbohydrate: 38g</td>
                    <td class="daily-value">14%</td>
                </tr>
                <tr>
                    <td>Dietary Fiber: 12g</td>
                    <td class="daily-value">42%</td>
                </tr>
                <tr>
                    <td>Total Sugars: 8g</td>
                    <td class="daily-value"></td>
                </tr>
                <tr>
                    <td>Protein: 38g</td>
                    <td class="daily-value">77%</td>
                </tr>
                <tr>
                    <td>Iron: 4mg</td>
                    <td class="daily-value">20%</td>
                </tr>
                <tr>
                    <td>Potassium: 1253mg</td>
                    <td class="daily-value">27%</td>
                </tr>
            </table>
        </div>
       </div>

       <div id="tips">
        <h2>Tips</h2> 
            <li>Include crunchy, colorful veggies like julienned carrots, cucumber, red bell peppers, shredded cabbage, and bean sprouts for texture and nutrition.</li>
            <li>Incorporate your favorite protein: grilled shrimp, tofu, chicken, pork, or tempeh are all excellent options.</li>
            <li>Add fresh herbs like cilantro, mint, and Thai basil for that classic spring roll flavor. These herbs elevate the freshness and aroma of the dish.</li>
        </ol>
       </div>

       <div id="video">
        <h2>Watch how to make it</h2>
        <p>Click to watch the making process:</p>
        <a href="https://www.youtube.com/watch?v=LR4g7tgj9aM" target="_blank">Spring Roll Bowl</a>
       </div>
    </section>
    <footer>
        <p>Home Cooking</p>
    </footer>

</div>


<!--Receta per Chicken Wraps-->

<div id="chickenwraps">
    <header>
        <h1>Chicken Wraps</h1>
    </header>
    <section class="receta-detaj">
       <div class="foto-komenti">
        <div class="foto">
            <img src="../../assets/images/Grilled-Chicken-Wrap.webp" alt="Receta e Chicken Wraps" class="receta-foto">
        </div>
        <div class="receta-komenti">
            <h2>Simple Sweet and Spicy Chicken Wraps</h2>
            <p>These spicy <abbr title="Chicken Wraps">CW</abbr> have a creamy sauce made with mayo, honey, and cucumber to create an easy summer meal that will rock your taste buds!</p>
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
            <li>½ cup mayonnaise</li>
            <li>¼ cup finely chopped seedless cucumber</li>
            <li>1 tablespoon honey</li>
            <li>½ teaspoon cayenne pepper</li>
            <li>2 tablespoons olive oil</li>
            <li>1 ½ pounds skinless, boneless chicken breast halves - cut into thin strips</li>
            <li>1 cup thick and chunky salsa</li>
            <li>1 tablespoon honey</li>
            <li>½ teaspoon cayenne pepper</li>
        </ol>
       </div>

       <div id="instructions">
        <h2>Instructions:</h2>
        <ol>
            <li>Make the sauce: Mix mayonnaise, cucumber, honey, cayenne pepper, and black pepper together in a bowl until smooth. Cover and refrigerate until needed.</li>
            <li>Make the wraps: Heat olive oil in a skillet on medium-high heat. Add chicken strips; cook and stir until they start to turn golden and are no longer pink in the middle, about 8 minutes.<br>
                Stir in salsa, honey, and cayenne pepper. Reduce the heat to medium-low; simmer, stirring occasionally, until flavors have blended, about 5 minutes.</li>
            <li>Stack tortillas, 4 at a time, in a microwave oven and heat until warm and pliable, 20 to 30 seconds per batch.</li>
            <li>Spread each tortilla with 1 tablespoon mayonnaise-cucumber sauce, top with a layer of spinach, and arrange about 1/2 cup of the chicken mixture on top.</li>
            <li>Fold the bottom of each tortilla up about 2 inches, and start rolling from the right side. </li>
        </ol>
       </div>

       <div id="importantinformation">
        <h2>Important Information</h2>
        <ul>
            <li><strong>Prep time:</strong>20 minutes</li>
            <li><strong>Cook time:</strong>15 minutes</li>
            <li><strong>Servings:</strong>8</li>
        </ul>
       </div>

       <div id="nutritions">
        <h2>Nutritions</h2>

        <div class="nutrition-table" id="nutritionTable">
            <h3>Nutrition Facts</h3>
            <p><strong>Servings per recipe:</strong>8</p>
            <p><strong>Calories:</strong>488</p>
            <table border="1" cellspacing="10" cellpadding="15"> 
            <table>
                <tr>
                    <th>Nutrient:</th>
                    <th class="daily-value">Daily Value:</th>
                </tr>
                <tr>
                    <td>Total fat: 23g</td>
                    <td class="daily-value">29%</td>
                </tr>
                <tr>
                    <td>Saturated fat: 4g</td>
                    <td class="daily-value">21%</td>
                </tr>
                <tr>
                    <td>Cholesterol: 57mg</td>
                    <td class="daily-value">19%</td>
                </tr>
                <tr>
                    <td>Sodium: 491mg</td>
                    <td class="daily-value">34%</td>
                </tr>
                <tr>
                    <td>Total Carbohydrate: 46g</td>
                    <td class="daily-value">16%</td>
                </tr>
                <tr>
                    <td>Dietary Fiber: 4g</td>
                    <td class="daily-value">13%</td>
                </tr>
                <tr>
                    <td>Total Sugars: 7g</td>
                    <td class="daily-value"></td>
                </tr>
                <tr>
                    <td>Protein: 27g</td>
                    <td class="daily-value">53%</td>
                </tr>
                <tr>
                    <td>Iron: 4mg</td>
                    <td class="daily-value">23%</td>
                </tr>
                <tr>
                    <td>Potassium: 576mg</td>
                    <td class="daily-value">12%</td>
                </tr>
            </table>
        </div>
       </div>

       <div id="tips">
        <h2>Tips</h2> 
            <li>Use grilled, baked, or pan-seared chicken breast for a healthier option.</li>
            <li>Marinate the chicken in a mix of honey, soy sauce, chili flakes, and a splash of lime juice for at least 30 minutes to infuse sweet and spicy flavors.</li>
            <li>Drizzle the chicken with a balanced sauce made from honey, sriracha, garlic, and a touch of sesame oil. Adjust the heat level to your preference.</li>
        </ol>
       </div>

       <div id="video">
        <h2>Watch how to make it</h2>
        <p>Click to watch the making process:</p>
        <a href="https://www.youtube.com/watch?v=UJi0fS1SxHg" target="_blank">Chicken Wraps</a>
       </div>
    </section>
    <footer>
        <p>Home Cooking</p>
    </footer>

</div>


<!--Reseta per Tortellini-->

<div id="tortellini">
    <header>
        <h1>Tortellini Salad</h1>
    </header>
    <section class="receta-detaj">
       <div class="foto-komenti">
        <div class="foto">
            <img src="../../assets/images/tortellini.jpg" alt="Receta e Tortellini" class="receta-foto">
        </div>
        <div class="receta-komenti">
            <h2>Tortellini Salad</h2>
            <p>This Italian tortellini salad is truly a delicious summertime pasta dish, but we enjoy it all year long.<br>
                It's an easy make-ahead salad, perfect to pack for a picnic, take to a potluck, or serve at your next backyard BBQ.</p>
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
            <li>20 ounces refrigerated cheese tortellini</li>
            <li>1 1/2 cups halved cherry tomatoes</li>
            <li>3/4 cup halved small fresh mozzarella balls</li>
            <li>1 (5 ounce) package mini pepperoni</li>
            <li>salt and freshly ground black pepper to taste</li>
            <li>1 cup light Italian salad dressing (store bought or homemade)</li>
            <li>11/3 cup grated Parmesan cheese</li>
            <li>3/4 cup diced red or yellow bell pepper</li>
        </ol>
       </div>

       <div id="instructions">
        <h2>Instructions:</h2>
        <ol>
            <li>Fill a large pot with lightly salted water and bring to a rolling boil; stir in tortellini and return to a boil.<br>
                Cook uncovered, stirring occasionally, until the tortellini float to the top and the filling is hot, about 3 minutes.<br>
                Be sure not to overcook, as they’ll start to unfold. Drain well, cool to room temperature, and transfer to a large bowl.</li>
            <li>Combine tomatoes, mozzarella balls, cucumber, bell peppers, pepperoni, banana peppers, red onion, black olives, parsley, salt, and pepper in a separate bowl, and add to the tortellini.</li>
            <li>Drizzle Italian dressing over salad, lightly tossing all ingredients until well coated. Refrigerate for at least 1 hour before serving.</li>
            <li>Stir again right before serving, garnish with grated Parmesan, and serve chilled. Store leftovers in the fridge in an air-tight container.</li>
        </ol>
       </div>

       <div id="importantinformation">
        <h2>Important Information</h2>
        <ul>
            <li><strong>Prep time:</strong>20 minutes</li>
            <li><strong>Cook time:</strong>3 minutes</li>
            <li><strong>Servings:</strong>6</li>
        </ul>
       </div>

       <div id="nutritions">
        <h2>Nutritions</h2>

        <div class="nutrition-table" id="nutritionTable">
            <h3>Nutrition Facts</h3>
            <p><strong>Servings per recipe:</strong>6</p>
            <p><strong>Calories:</strong>556</p>
            <table border="1" cellspacing="10" cellpadding="15"> 
            <table>
                <tr>
                    <th>Nutrient:</th>
                    <th class="daily-value">Daily Value:</th>
                </tr>
                <tr>
                    <td>Total fat: 26g</td>
                    <td class="daily-value">34%</td>
                </tr>
                <tr>
                    <td>Saturated fat: 11g</td>
                    <td class="daily-value">54%</td>
                </tr>
                <tr>
                    <td>Cholesterol: 78mg</td>
                    <td class="daily-value">26%</td>
                </tr>
                <tr>
                    <td>Sodium: 1463mg</td>
                    <td class="daily-value">62%</td>
                </tr>
                <tr>
                    <td>Total Carbohydrate: 57g</td>
                    <td class="daily-value">21%</td>
                </tr>
                <tr>
                    <td>Dietary Fiber: 4g</td>
                    <td class="daily-value">13%</td>
                </tr>
                <tr>
                    <td>Total Sugars: 7g</td>
                    <td class="daily-value"></td>
                </tr>
                <tr>
                    <td>Protein: 23g</td>
                    <td class="daily-value">47%</td>
                </tr>
                <tr>
                    <td>Iron: 3mg</td>
                    <td class="daily-value">15%</td>
                </tr>
                <tr>
                    <td>Potassium: 448mg</td>
                    <td class="daily-value">10%</td>
                </tr>
            </table>
        </div>
       </div>

       <div id="tips">
        <h2>Tips</h2> 
            <li>Use fresh or refrigerated cheese or meat tortellini for the best flavor.</li>
            <li>After cooking, rinse the tortellini under cold water to stop the cooking process and keep them firm.</li>
            <li>Serve the salad cold or at room temperature, making it a perfect dish for potlucks, picnics, or light lunches.</li>
        </ol>
       </div>

       <div id="video">
        <h2>Watch how to make it</h2>
        <p>Click to watch the making process:</p>
        <a href="https://www.youtube.com/watch?v=glXA_dh-xdw" target="_blank">Tortellini </a>
       </div>
    </section>
    <footer>
        <p>Home Cooking</p>
    </footer>

</div>

<script src="navbar.php"></script>
</body>
</html>