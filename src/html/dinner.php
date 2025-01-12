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

<!--Receta per Hamburger-->

<div id="hamburger">
    <header>
        <h1>Cheesy Hamburger Rice Casserole</h1>
    </header>
    <section class="receta-detaj">
       <div class="foto-komenti">
        <div class="foto">
            <img src="../../assets/images/Hamburger.webp" alt="Receta e Hamburger Rice Casserole" class="receta-foto">
        </div>
        <div class="receta-komenti">
            <h2>Cheesy Hamburger Rice Casserole</h2>
            <p>A five-ingredient hamburger rice casserole topped with melty cheese, very easy and yummy!</p>
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
            <li>1 pound ground beef</li>
            <li>1 (10.75 ounce) can cream of mushroom soup</li>
            <li>1 (14.5 ounce) can diced tomatoes with juice</li>
            <li>½ cup long grain white rice</li>
            <li>¾ cup shredded mozzarella cheese</li>
            <li>salt and pepper to taste</li>
        </ol>
       </div>

       <div id="instructions">
        <h2>Instructions:</h2>
        <ol>
            <li>Crumble the ground beef into a skillet over medium-high heat. Cook and stir until evenly browned.<br>
                Drain off grease, and stir in the cream of mushroom soup, tomatoes, and uncooked rice.</li>
            <li>Cover, and simmer over low heat, stirring occasionally, until rice is cooked, about 15 minutes.</li>
            <li>Preheat the oven's broiler. When the rice is done cooking, transfer the contents of the skillet to a casserole dish. Cover with a layer of cheese.</li>
            <li>Broil until the cheese is melted and toasty. Season with salt and pepper to taste, and enjoy!</li>
        </ol>
       </div>

       <div id="importantinformation">
        <h2>Important Information</h2>
        <ul>
            <li><strong>Prep time:</strong>10 minutes</li>
            <li><strong>Cook time:</strong>15 minutes</li>
            <li><strong>Servings:</strong>4</li>
        </ul>
       </div>

       <div id="nutritions">
        <h2>Nutritions</h2>

        <div class="nutrition-table" id="nutritionTable">
            <h3>Nutrition Facts</h3>
            <p><strong>Servings per recipe:</strong>4</p>
            <p><strong>Calories:</strong>425</p>
            <table border="1" cellspacing="10" cellpadding="15"> 
            <table>
                <tr>
                    <th>Nutrient:</th>
                    <th class="daily-value">Daily Value:</th>
                </tr>
                <tr>
                    <td>Total fat: 21g</td>
                    <td class="daily-value">27%</td>
                </tr>
                <tr>
                    <td>Saturated fat: 9g</td>
                    <td class="daily-value">43%</td>
                </tr>
                <tr>
                    <td>Cholesterol: 83mg</td>
                    <td class="daily-value">28%</td>
                </tr>
                <tr>
                    <td>Sodium: 849g</td>
                    <td class="daily-value">37%</td>
                </tr>
                <tr>
                    <td>Total Carbohydrate: 28g</td>
                    <td class="daily-value">10%</td>
                </tr>
                <tr>
                    <td>Dietary Fiber: 1g</td>
                    <td class="daily-value">4%</td>
                </tr>
                <tr>
                    <td>Total Sugars: 4g</td>
                    <td class="daily-value"></td>
                </tr>
                <tr>
                    <td>Protein: 28g</td>
                    <td class="daily-value">56%</td>
                </tr>
                <tr>
                    <td>Iron: 6mg</td>
                    <td class="daily-value">34%</td>
                </tr>
                <tr>
                    <td>Potassium: 451mg</td>
                    <td class="daily-value">10%</td>
                </tr>
            </table>
        </div>
       </div>

       <div id="tips">
        <h2>Tips</h2> 
            <li>Use lean ground beef (80/20 or leaner) to avoid excess grease, or substitute with ground turkey or chicken for a lighter version.</li>
            <li>Use cooked, cooled rice to speed up the cooking process. Long-grain white rice, brown rice, or even wild rice work well.</li>
            <li>Sauté onions, garlic, and bell peppers with the ground beef for extra flavor before assembling the casserole.</li>
        </ol>
       </div>

       <div id="video">
        <h2>Watch how to make it</h2>
        <p>Click to watch the making process:</p>
        <a href="https://www.youtube.com/watch?v=GfzRZ3Q5tgk" target="_blank">Hamburger Rice Casserole</a>
       </div>
    </section>
    <footer>
        <p>Home Cooking</p>
    </footer>

</div>



<!--Receta per Pasta-->

<div id="pasta">
    <header>
        <h1>Penne alla Vodka</h1>
    </header>
    <section class="receta-detaj">
       <div class="foto-komenti">
        <div class="foto">
            <img src="../../assets/images/pasta.jpg" alt="Receta e Pasta" class="receta-foto">
        </div>
        <div class="receta-komenti">
            <h2>Penne alla Vodka</h2>
            <p>This penne alla vodka recipe is quick and easy to make from scratch with a homemade tomato and vodka sauce that's so flavorsome for an elegant Italian meal on your table in less than half an hour!</p>
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
            <li>1 (28 ounce) can whole peeled tomatoes (preferably San Marzano)</li>
            <li>2 tablespoons olive oil</li>
            <li>3 ounces pancetta, diced</li>
            <li>½ cup finely chopped onion</li>
            <li>¼ teaspoon crushed red pepper, or more to taste</li>
            <li>⅔ cup vodka</li>
            <li>1 cup heavy cream</li>
            <li>⅔ cup freshly grated Parmesan cheese</li>
            <li>3 tablespoons chopped fresh basil</li>
        </ol>
       </div>

       <div id="instructions">
        <h2>Instructions:</h2>
        <ol>
            <li>Gather all ingredients.</li>
            <li>Place a large pot of salted water over high heat to bring to a boil.<br>
                Pour tomatoes in a medium bowl and crush well with hands or chop in a food processor. Set aside.</li>
            <li>While water heats, prepare the sauce: Heat oil and pancetta in a large saucepan or deep skillet over medium-high heat.<br>
                Cook, stirring frequently until pancetta is crisp, about 5 minutes. Add onion and cook, stirring constantly, until translucent, about 3 minutes.</li>
            <li>Add garlic and crushed red pepper and cook for 1 minute.<br>
                Add tomato paste and cook, stirring often, until the tomato paste has taken on a slight brownish color, 2 to 3 minutes. </li>
            <li>Add vodka and cook until reduced by at least half. Stir in reserved tomatoes and juices and bring mixture to a simmer.<br>
                Reduce heat and simmer until thickened, about 10 minutes.</li>
            <li>While sauce reduces, add pasta to boiling water and cook, according to package directions until al dente, 11 to 12 minutes.</li>
            <li>Once sauce is reduced, stir in heavy cream and pepper and cook for 3 minutes, stirring often.<br>
                Stir in 1/3 cup cheese, parsley, basil and pasta until well combined.</li>
        </ol>
       </div>

       <div id="importantinformation">
        <h2>Important Information</h2>
        <ul>
            <li><strong>Prep time:</strong>10 minutes</li>
            <li><strong>Cook time:</strong>15 minutes</li>
            <li><strong>Servings:</strong>6</li>
        </ul>
       </div>

       <div id="nutritions">
        <h2>Nutritions</h2>

        <div class="nutrition-table" id="nutritionTable">
            <h3>Nutrition Facts</h3>
            <p><strong>Servings per recipe:</strong>6</p>
            <p><strong>Calories:</strong>647</p>
            <table border="1" cellspacing="10" cellpadding="15"> 
            <table>
                <tr>
                    <th>Nutrient:</th>
                    <th class="daily-value">Daily Value:</th>
                </tr>
                <tr>
                    <td>Total fat: 30g</td>
                    <td class="daily-value">38%</td>
                </tr>
                <tr>
                    <td>Saturated fat: 14g</td>
                    <td class="daily-value">69%</td>
                </tr>
                <tr>
                    <td>Cholesterol: 72mg</td>
                    <td class="daily-value">24%</td>
                </tr>
                <tr>
                    <td>Sodium: 844g</td>
                    <td class="daily-value">37%</td>
                </tr>
                <tr>
                    <td>Total Carbohydrate: 65g</td>
                    <td class="daily-value">24%</td>
                </tr>
                <tr>
                    <td>Dietary Fiber: 5g</td>
                    <td class="daily-value">16%</td>
                </tr>
                <tr>
                    <td>Total Sugars: 1g</td>
                    <td class="daily-value"></td>
                </tr>
                <tr>
                    <td>Protein: 18g</td>
                    <td class="daily-value">35%</td>
                </tr>
                <tr>
                    <td>Iron: 0mg</td>
                    <td class="daily-value">0%</td>
                </tr>
                <tr>
                    <td>Potassium: 579mg</td>
                    <td class="daily-value">12%</td>
                </tr>
            </table>
        </div>
       </div>

       <div id="tips">
        <h2>Tips</h2> 
            <li>You can skip the pancetta if you want to make this a meatless meal.</li>
            <li>Don't skip the tomato paste! It adds a deep, rich flavor that makes this penne alla vodka impossible to resist.<br>
                Make sure to cook it until it takes on a brownish color.</li>
            <li>Store your leftover penne alla vodka in a shallow, airtight container in the refrigerator for up to four days.</li>
        </ol>
       </div>

       <div id="video">
        <h2>Watch how to make it</h2>
        <p>Click to watch the making process:</p>
        <a href="https://www.youtube.com/watch?v=o6vG6cs-moE" target="_blank">Penne alla Vodka</a>
       </div>
    </section>
    <footer>
        <p>Home Cooking</p>
    </footer>

</div>

<!--Receta per Tacos-->

<div id="tacos">
    <header>
        <h1>Grilled Fish Tacos</h1>
    </header>
    <section class="receta-detaj">
       <div class="foto-komenti">
        <div class="foto">
            <img src="../../assets/images/Grilled-Fish-Tacos-14-1.jpg" alt="Receta e Tacos" class="receta-foto">
        </div>
        <div class="receta-komenti">
            <h2>Grilled Fish Tacos</h2>
            <p>These grilled fish tacos are made with marinated fish fillets and topped with a spicy chipotle-lime dressing.<br>
                Choose toppings to suit your taste, or include typical accompaniments such as salsa fresca, cabbage, a squeeze of lime juice, and chopped cilantro.</p>
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
            <li>¼ cup extra virgin olive oil</li>
            <li>2 tablespoons distilled white vinegar</li>
            <li>2 cloves garlic, minced</li>
            <li>1 ½ teaspoons honey</li>
            <li>1 teaspoon seafood seasoning, such as Old Bay</li>
            <li>1 teaspoon hot pepper sauce</li>
            <li>1 (8 ounce) container light sour cream</li>
            <li>½ cup adobo sauce from chipotle peppers</li>
            <li>1 (10 ounce) package tortillas</li>
            <li>3 ripe tomatoes, seeded and diced</li>
        </ol>
       </div>

       <div id="instructions">
        <h2>Instructions:</h2>
        <ol>
            <li>Gather all ingredients.</li>
            <li>Place a large pot of salted water over high heat to bring to a boil.<br>
                Pour tomatoes in a medium bowl and crush well with hands or chop in a food processor. Set aside.</li>
            <li>While water heats, prepare the sauce: Heat oil and pancetta in a large saucepan or deep skillet over medium-high heat.<br>
                Cook, stirring frequently until pancetta is crisp, about 5 minutes. Add onion and cook, stirring constantly, until translucent, about 3 minutes.</li>
            <li>Add garlic and crushed red pepper and cook for 1 minute.<br>
                Add tomato paste and cook, stirring often, until the tomato paste has taken on a slight brownish color, 2 to 3 minutes. </li>
            <li>Add vodka and cook until reduced by at least half. Stir in reserved tomatoes and juices and bring mixture to a simmer.<br>
                Reduce heat and simmer until thickened, about 10 minutes.</li>
            <li>While sauce reduces, add pasta to boiling water and cook, according to package directions until al dente, 11 to 12 minutes.</li>
            <li>Once sauce is reduced, stir in heavy cream and pepper and cook for 3 minutes, stirring often.<br>
                Stir in 1/3 cup cheese, parsley, basil and pasta until well combined.</li>
        </ol>
       </div>

       <div id="importantinformation">
        <h2>Important Information</h2>
        <ul>
            <li><strong>Prep time:</strong>35 minutes</li>
            <li><strong>Cook time:</strong>10 minutes</li>
            <li><strong>Servings:</strong>6</li>
        </ul>
       </div>

       <div id="nutritions">
        <h2>Nutritions</h2>

        <div class="nutrition-table" id="nutritionTable">
            <h3>Nutrition Facts</h3>
            <p><strong>Servings per recipe:</strong>6</p>
            <p><strong>Calories:</strong>416</p>
            <table border="1" cellspacing="10" cellpadding="15"> 
            <table>
                <tr>
                    <th>Nutrient:</th>
                    <th class="daily-value">Daily Value:</th>
                </tr>
                <tr>
                    <td>Total fat: 19g</td>
                    <td class="daily-value">25%</td>
                </tr>
                <tr>
                    <td>Saturated fat: 5g</td>
                    <td class="daily-value">27%</td>
                </tr>
                <tr>
                    <td>Cholesterol: 43mg</td>
                    <td class="daily-value">14%</td>
                </tr>
                <tr>
                    <td>Sodium: 644g</td>
                    <td class="daily-value">28%</td>
                </tr>
                <tr>
                    <td>Total Carbohydrate: 39g</td>
                    <td class="daily-value">14%</td>
                </tr>
                <tr>
                    <td>Dietary Fiber: 6g</td>
                    <td class="daily-value">21%</td>
                </tr>
                <tr>
                    <td>Total Sugars: 7g</td>
                    <td class="daily-value"></td>
                </tr>
                <tr>
                    <td>Protein: 21g</td>
                    <td class="daily-value">45%</td>
                </tr>
                <tr>
                    <td>Iron: 3mg</td>
                    <td class="daily-value">16%</td>
                </tr>
                <tr>
                    <td>Potassium: 751mg</td>
                    <td class="daily-value">16%</td>
                </tr>
            </table>
        </div>
       </div>

       <div id="tips">
        <h2>Tips</h2> 
            <li>Use firm, flaky fish like mahi-mahi, tilapia, cod, snapper, or halibut. These types hold up well on the grill and have a mild flavor.</li>
            <li>Marinate the fish in a mix of lime juice, olive oil, garlic, cumin, chili powder, and paprika for at least 20–30 minutes to infuse flavor without overpowering.</li>
            <li>Preheat the grill and oil the grates well to prevent sticking. A grill pan or foil can be used for delicate fish.</li>
        </ol>
       </div>

       <div id="video">
        <h2>Watch how to make it</h2>
        <p>Click to watch the making process:</p>
        <a href="https://www.youtube.com/watch?v=fOSn3SgepA0" target="_blank">Grilled Fish Tacos</a>
       </div>
    </section>
    <footer>
        <p>Home Cooking</p>
    </footer>

</div>

<!--Receta per Riggies-->

<div id="turkeyriggies">
    <header>
        <h1>Baked Turkey Riggies</h1>
    </header>
    <section class="receta-detaj">
       <div class="foto-komenti">
        <div class="foto">
            <img src="../../assets/images/riggies.jpg" alt="Receta e Riggies" class="receta-foto">
        </div>
        <div class="receta-komenti">
            <h2>Baked Turkey Riggies</h2>
            <p>This Central New York dish is a perfect way to use up your Thanksgiving leftovers in a baked casserole version that includes turkey instead of the usual chicken.</p>
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
            <li>1 ½ pounds cooked, chopped turkey meat</li>
            <li>½ cup chopped pepperoncini peppers</li>
            <li>½ cup chopped, pitted kalamata olives</li>
            <li>1 tablespoon olive oil, or as needed</li>
            <li>6 ounces hot Italian sausage, casings removed</li>
            <li>½ cup white wine</li>
            <li>1 (28 ounce) jar prepared marinara sauce</li>
            <li>1 pound rigatoni pasta, cooked and drained</li>
            <li>8 ounces fresh mozzarella cheese, cubed</li>
            <li>½ cup grated Parmigiano-Reggiano cheese</li>
        </ol>
       </div>

       <div id="instructions">
        <h2>Instructions:</h2>
        <ol>
            <li>Gather all ingredients.</li>
            <li>Chop leftover turkey and place in a mixing bowl. Add pepperoncini peppers and kalamata olives; set aside</li>
            <li>Heat olive oil in a large pot over medium-high heat. Add Italian sausage and cook until sausage is browned and crumbled, breaking it up into small pieces, about 5 minutes.<br>
                Add diced onions, mushrooms, and salt. Cook until onions are soft and start to get translucent, 3 to 4 minutes.</li>
            <li>Deglaze the bottom of the pot with white wine and simmer until wine has evaporated, about 5 minutes.<br>
                Add chicken broth, marinara sauce, water, and cream. Add turkey mixture and bring to a simmer. Reduce heat to medium low and simmer about 15 minutes.</li>
            <li>Meanwhile, bring a large pot of lightly salted water to a boil. Cook rigatoni in the boiling water, stirring occasionally, about 10 minutes. Drain. Preheat the oven to 400 degrees F.</li>
            <li>Transfer the cooked rigatoni into the sauce pot and mix well. Transfer mixture to a large casserole dish. Dot surface with mozzarella cheese and push inside the pasta mixture. Sprinkle the top with freshly grated Parmesan cheese.</li>
            <li>Bake in the preheated oven until sauce is bubbling around the edges, and the top is nicely browned, 40 to 45 minutes.<br>
                Remove from oven and let sit for 10 to 15 minutes. Sprinkle with parsley.</li>
        </ol>
       </div>

       <div id="importantinformation">
        <h2>Important Information</h2>
        <ul>
            <li><strong>Prep time:</strong>15 minutes</li>
            <li><strong>Cook time:</strong>1h 10 minutes</li>
            <li><strong>Servings:</strong>8</li>
        </ul>
       </div>

       <div id="nutritions">
        <h2>Nutritions</h2>

        <div class="nutrition-table" id="nutritionTable">
            <h3>Nutrition Facts</h3>
            <p><strong>Servings per recipe:</strong>8</p>
            <p><strong>Calories:</strong>730</p>
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
                    <td>Saturated fat: 14g</td>
                    <td class="daily-value">68%</td>
                </tr>
                <tr>
                    <td>Cholesterol: 131mg</td>
                    <td class="daily-value">44%</td>
                </tr>
                <tr>
                    <td>Sodium: 1467g</td>
                    <td class="daily-value">64%</td>
                </tr>
                <tr>
                    <td>Total Carbohydrate: 61g</td>
                    <td class="daily-value">22%</td>
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
                    <td>Protein: 49g</td>
                    <td class="daily-value">91%</td>
                </tr>
                <tr>
                    <td>Iron: 0mg</td>
                    <td class="daily-value">0%</td>
                </tr>
                <tr>
                    <td>Potassium: 820mg</td>
                    <td class="daily-value">17%</td>
                </tr>
            </table>
        </div>
       </div>

       <div id="tips">
        <h2>Tips</h2> 
            <li>The ideal casserole baking dish size is 9 x 13 inches.</li>
            <li>Use rigatoni or another sturdy pasta that holds the sauce well, like penne or ziti. Cook it al dente since it will continue to cook in the oven.</li>
            <li>Stir shredded mozzarella or Parmesan into the sauce for richness, and sprinkle more on top before baking for a bubbly, golden crust.</li>
        </ol>
       </div>

       <div id="video">
        <h2>Watch how to make it</h2>
        <p>Click to watch the making process:</p>
        <a href="https://www.youtube.com/watch?v=20jL0aMPpQc" target="_blank">Baked Turkey Riggies</a>
       </div>
    </section>
    <footer>
        <p>Home Cooking</p>
    </footer>

</div>

<!--Receta per curry chicken-->

<div id="currychicken">
    <header>
        <h1>Jamaican Style Curry Chicken</h1>
    </header>
    <section class="receta-detaj">
       <div class="foto-komenti">
        <div class="foto">
            <img src="../../assets/images/currychicken.jpg" alt="Receta e Curry Chicken" class="receta-foto">
        </div>
        <div class="receta-komenti">
            <h2>Jamaican Style Curry Chicken</h2>
            <p>It's rich and hearty, with flavor that's great when you can't get the real thing in the islands.<br>
                Try a variety of hot peppers to change the flavor — even sweet bell peppers give it a different taste. Use fresh thyme to really bring out the fresh taste.</p>
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
            <li>¼ cup vegetable oil</li>
            <li>1 onion, chopped</li>
            <li>1 tomato, chopped</li>
            <li>2 slices habanero pepper (Optional)</li>
            <li>1 garlic clove, chopped</li>
            <li>2 tablespoons Jamaican-style curry powder</li>
            <li>¼ teaspoon ground thyme</li>
            <li>2 skinless, boneless chicken breast halves, cut into 1 1/2-inch pieces</li>
            <li>½ teaspoon salt, or to taste</li>
        </ol>
       </div>

       <div id="instructions">
        <h2>Instructions:</h2>
        <ol>
            <li>Gather all ingredients.</li>
            <li>Heat vegetable oil in a skillet over medium-high heat. Add onion, tomato, habanero pepper, garlic, curry powder, and thyme and cook, stirring, until onion is golden, about 7 minutes.</li>
            <li>Stir in chicken and cook until chicken is lightly browned, about 5 minutes.</li>
            <li>Pour water into the skillet. Reduce heat to low, cover, and simmer until chicken is no longer pink at the center, about 30 minutes. Season with salt.</li>
            <li>Serve and enjoy!</li>
        </ol>
       </div>

       <div id="importantinformation">
        <h2>Important Information</h2>
        <ul>
            <li><strong>Prep time:</strong>10 minutes</li>
            <li><strong>Cook time:</strong>45minutes</li>
                <li><strong>Servings:</strong>4</li>
        </ul>
       </div>


       <div id="nutritions">
        <h2>Nutritions</h2>

        <div class="nutrition-table" id="nutritionTable">
            <h3>Nutrition Facts</h3>
            <p><strong>Servings per recipe:</strong>4</p>
            <p><strong>Calories:</strong>210</p>
            <table border="1" cellspacing="10" cellpadding="15"> 
            <table>
                <tr>
                    <th>Nutrient:</th>
                    <th class="daily-value">Daily Value:</th>
                </tr>
                <tr>
                    <td>Total fat: 15g</td>
                    <td class="daily-value">20%</td>
                </tr>
                <tr>
                    <td>Saturated fat: 3g</td>
                    <td class="daily-value">13%</td>
                </tr>
                <tr>
                    <td>Cholesterol: 30mg</td>
                    <td class="daily-value">10%</td>
                </tr>
                <tr>
                    <td>Sodium: 322g</td>
                    <td class="daily-value">14%</td>
                </tr>
                <tr>
                    <td>Total Carbohydrate: 6g</td>
                    <td class="daily-value">2%</td>
                </tr>
                <tr>
                    <td>Dietary Fiber: 2g</td>
                    <td class="daily-value">7%</td>
                </tr>
                <tr>
                    <td>Total Sugars: 2g</td>
                    <td class="daily-value"></td>
                </tr>
                <tr>
                    <td>Protein: 13g</td>
                    <td class="daily-value">25%</td>
                </tr>
                <tr>
                    <td>Iron: 2mg</td>
                    <td class="daily-value">9%</td>
                </tr>
                <tr>
                    <td>Potassium: 258mg</td>
                    <td class="daily-value">5%</td>
                </tr>
            </table>
        </div>
       </div>

       <div id="tips">
        <h2>Tips</h2> 
            <li>Season the chicken with curry powder, salt, black pepper, thyme, garlic, ginger, and scallions</li>
            <li>Serve with steamed white rice, rice and peas, or roti.</li>
            <li>Pair with a side of fried plantains, steamed vegetables, or a simple green salad.</li>
        </ol>
       </div>

       <div id="video">
        <h2>Watch how to make it</h2>
        <p>Click to watch the making process:</p>
        <a href="https://www.youtube.com/watch?v=XUK5zYSd9k8" target="_blank">Jamaican Style Curry Chicken</a>
       </div>
    </section>
    <footer>
        <p>Home Cooking</p>
    </footer>

</div>

<!--Receta per shrimps-->
 
<div id="shrimp">
    <header>
        <h1>Sweet and Spicy Jerk Shrimp</h1>
    </header>
    <section class="receta-detaj">
       <div class="foto-komenti">
        <div class="foto">
            <img src="../../assets/images/shrimps.jpg" alt="Receta e Shrimp" class="receta-foto">
        </div>
        <div class="receta-komenti">
            <h2>Sweet and Spicy Jerk Shrimp</h2>
            <p>Get a taste of island life with Jamaican jerk-seasoned shrimp, juicy pineapple, roasted veggies, and spicy jalapenos.<br>
               Serve over salad greens or, for a heartier meal, with cooked brown rice.</p>
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
            <li>1 ½ pounds large shrimp in shells</li>
            <li>1 (20 ounce) can pineapple slices packed in 100% juice, drained, and cut into 2-inch pieces</li>
            <li>2 red bell peppers, cut into thin strips</li>
            <li>1 large red onion, sliced</li>
            <li>1 jalapeno pepper - halved lengthwise, seeded, and sliced</li>
            <li>1 tablespoon Jamaican jerk seasoning</li>
            <li>½ cup chopped fresh cilantro</li>
            <li>2 cups hot cooked brown rice</li>
            <li>1 lime, cut into wedges</li>
        </ol>
       </div>

       <div id="instructions">
        <h2>Instructions:</h2>
        <ol>
            <li>Preheat the oven to 425 degrees F (220 degrees C). Line two 10x15-inch baking pans with foil.</li>
            <li>Peel and devein shrimp, leaving tails intact if desired. Rinse shrimp and pat dry.</li>
            <li>Gently toss shrimp together with pineapple, bell peppers, red onion, jalapeno, oil, and jerk seasoning in a large bowl. Divide mixture between the prepared pans.</li>
            <li>Roast in the preheated oven until shrimp are opaque, about 15 minutes.</li>
            <li>Sprinkle with cilantro and serve with brown rice and lime wedges.</li>
        </ol>
       </div>

       <div id="importantinformation">
        <h2>Important Information</h2>
        <ul>
            <li><strong>Prep time:</strong>20 minutes</li>
            <li><strong>Cook time:</strong>15minutes</li>
                <li><strong>Servings:</strong>4</li>
        </ul>
       </div>


       <div id="nutritions">
        <h2>Nutritions</h2>

        <div class="nutrition-table" id="nutritionTable">
            <h3>Nutrition Facts</h3>
            <p><strong>Servings per recipe:</strong>4</p>
            <p><strong>Calories:</strong>455</p>
            <table border="1" cellspacing="10" cellpadding="15"> 
            <table>
                <tr>
                    <th>Nutrient:</th>
                    <th class="daily-value">Daily Value:</th>
                </tr>
                <tr>
                    <td>Total fat: 9g</td>
                    <td class="daily-value">12%</td>
                </tr>
                <tr>
                    <td>Saturated fat: 2g</td>
                    <td class="daily-value">8%</td>
                </tr>
                <tr>
                    <td>Cholesterol: 259mg</td>
                    <td class="daily-value">86%</td>
                </tr>
                <tr>
                    <td>Sodium: 468g</td>
                    <td class="daily-value">28%</td>
                </tr>
                <tr>
                    <td>Total Carbohydrate: 6g</td>
                    <td class="daily-value">2%</td>
                </tr>
                <tr>
                    <td>Dietary Fiber: 6g</td>
                    <td class="daily-value">21%</td>
                </tr>
                <tr>
                    <td>Total Sugars: 30g</td>
                    <td class="daily-value"></td>
                </tr>
                <tr>
                    <td>Protein: 31g</td>
                    <td class="daily-value">63%</td>
                </tr>
                <tr>
                    <td>Iron: 6mg</td>
                    <td class="daily-value">33%</td>
                </tr>
                <tr>
                    <td>Potassium: 554mg</td>
                    <td class="daily-value">12%</td>
                </tr>
            </table>
        </div>
       </div>

       <div id="tips">
        <h2>Tips</h2> 
            <li>Adjust the amount of jerk seasoning or Scotch bonnet peppers based on your spice tolerance.</li>
            <li>Fresh or high-quality frozen shrimp will give the best texture and flavor.</li>
            <li>For deeper flavor, add a pinch of allspice, nutmeg, or cinnamon to the marinade.</li>
        </ol>
       </div>

       <div id="video">
        <h2>Watch how to make it</h2>
        <p>Click to watch the making process:</p>
        <a href="https://www.youtube.com/watch?v=0uS1nb-GsFQ" target="_blank">Sweet and Spicy Jerk Shrimp</a>
       </div>
    </section>
    <footer>
        <p>Home Cooking</p>
    </footer>

</div>

<!--Receta per quesadillas-->

<div id="quesadillas">
    <header>
        <h1>Air Fryer Quesadillas</h1>
    </header>
    <section class="receta-detaj">
       <div class="foto-komenti">
        <div class="foto">
            <img src="../../assets/images/air-fryer-quesadillas-feature-post-1.jpg" alt="Receta e quesadillas" class="receta-foto">
        </div>
        <div class="receta-komenti">
            <h2>Air Fryer Quesadillas</h2>
            <p>These air fryer quesadillas are golden and crispy, quick and easy to make, and there are no skillets to wash.<br>
                Both flour and corn tortillas work for this recipe and the choice of cheese is up to you.</p>
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
            <li>2 flour tortillas</li>
            <li>1/2 cup shredded cheese</li>
            <li>nonstick cooking spray</li>
        </ol>
       </div>

       <div id="instructions">
        <h2>Instructions:</h2>
        <ol>
            <li>Heat tortillas in the microwave until pliable, about 15 seconds.</li>
            <li>Place 1/4 cup cheese on one half of each tortilla; fold other half of tortilla over cheese. Place in  air fryer. Spray with non-stick cooking spray.</li>
            <li>Set temperature to 375 degrees F. Place quesadillas in the basket of the air fryer, and cook until golden brown, 4 to 6 minutes. Flip quesadillas, press down with a spatula, and air fry an additional 2 to 3 minutes.</li>
        </ol>
       </div>

       <div id="importantinformation">
        <h2>Important Information</h2>
        <ul>
            <li><strong>Prep time:</strong>10 minutes</li>
            <li><strong>Cook time:</strong>10 minutes</li>
                <li><strong>Servings:</strong>2</li>
        </ul>
       </div>


       <div id="nutritions">
        <h2>Nutritions</h2>

        <div class="nutrition-table" id="nutritionTable">
            <h3>Nutrition Facts</h3>
            <p><strong>Servings per recipe:</strong>2</p>
            <p><strong>Calories:</strong>253</p>
            <table border="1" cellspacing="10" cellpadding="15"> 
            <table>
                <tr>
                    <th>Nutrient:</th>
                    <th class="daily-value">Daily Value:</th>
                </tr>
                <tr>
                    <td>Total fat: 12g</td>
                    <td class="daily-value">16%</td>
                </tr>
                <tr>
                    <td>Saturated fat: 6g</td>
                    <td class="daily-value">30%</td>
                </tr>
                <tr>
                    <td>Cholesterol: 28mg</td>
                    <td class="daily-value">9%</td>
                </tr>
                <tr>
                    <td>Sodium: 388g</td>
                    <td class="daily-value">17%</td>
                </tr>
                <tr>
                    <td>Total Carbohydrate: 25g</td>
                    <td class="daily-value">9%</td>
                </tr>
                <tr>
                    <td>Dietary Fiber: 1g</td>
                    <td class="daily-value">5%</td>
                </tr>
                <tr>
                    <td>Total Sugars: 0g</td>
                    <td class="daily-value"></td>
                </tr>
                <tr>
                    <td>Protein: 10g</td>
                    <td class="daily-value">20%</td>
                </tr>
                <tr>
                    <td>Iron: 1mg</td>
                    <td class="daily-value">8%</td>
                </tr>
                <tr>
                    <td>Potassium: 77mg</td>
                    <td class="daily-value">2%</td>
                </tr>
            </table>
        </div>
       </div>

       <div id="tips">
        <h2>Tips</h2> 
            <li>Use melting cheeses like cheddar, mozzarella, Monterey Jack, or a Mexican cheese blend for the gooey texture.</li>
            <li>Keep the fillings balanced. Overloading the tortilla can make it harder to crisp up evenly.</li>
            <li>Press the tortilla edges down firmly or use a bit of cheese near the edges as a “glue” to hold the quesadilla together.</li>
        </ol>
       </div>

       <div id="video">
        <h2>Watch how to make it</h2>
        <p>Click to watch the making process:</p>
        <a href="https://www.youtube.com/watch?v=hy7smqs0q0k" target="_blank">Air Fryer Quesadillas</a>
       </div>
    </section>
    <footer>
        <p>Home Cooking</p>
    </footer>

</div>
<script src="navbar.php"></script>
</body>
</html>