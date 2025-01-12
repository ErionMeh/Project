<?php 
include_once("config.php");
require_once 'page_template.php';
?>
<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dessert</title>
    <link rel="stylesheet" href="../css/dessert.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="../css/navbar.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    <div id="navbar-placeholder"></div>
<!--Receta per Red Velvet-->

<div id="redvelvet">
<header>
    <h1>Red Velvet Cake</h1>
</header>

<section class="recipe">
    <div class="foto-komenti">
        <div class="foto">
            <img src="../../assets/images/redvelvet.avif" alt="Red Velvet Cake" class="receta-foto">
        </div>
        <div class="receta-komenti">
            <h2>Red Velvet Cake</h2>
            <p>This cake is a must-try for special occasions! It's moist, flavorful, and has the perfect balance of sweetness and tanginess.</p>
        </div>
    </div>

    <nav>
        <ul>
            <li><a href="#ingredients">Ingredients:</a></li>
            <li><a href="#instructions">Instructions:</a></li>
            <li><a href="#importantinformation">Important Information:</a></li>
        </ul>
    </nav>

    <div id="ingredients">
        <h2>Ingredients</h2>
        <ul>
            <li>3 cups (360g) cake flour</li>
            <li>1 teaspoon baking soda</li>
            <li>2 Tablespoons (10g) unsweetened natural cocoa powder</li>
            <li>1/2 teaspoon salt</li>
            <li>1/2 cup (8 Tbsp; 113g) unsalted butter</li>
            <li>2 cups (400g) granulated sugar</li>
            <li>1 cup (240ml) canola or vegetable oil</li>
            <li>4 large eggs, room temperature and separated</li>
            <li>1 Tablespoon pure vanilla extract</li>
        </ul>
    </div>

    <div id="instructions">
        <h2>Instructions:</h2>
        <ol>
            <li>Preheat oven to 350°F (177°C). Grease two 9-inch cake pans, line with parchment paper rounds, then grease the parchment paper. </li>
            <li>In a large bowl, whisk together the flour, sugar, baking soda, cocoa powder, and salt.</li>
            <li>In another bowl, mix the oil, buttermilk, eggs, food coloring, vanilla extract, and vinegar.</li>
            <li>Combine the wet ingredients with the dry ingredients and mix until smooth.</li>
            <li>Pour the batter into the pans and bake for 25-30 minutes.</li>
            <li>Refrigerate cake for at least 30-60 minutes before slicing. This helps the cake hold its shape when cutting.</li>
        </ol>
    </div>

    <div id="importantinformation">
        <h2>Important Information:</h2>
        <ul>
            <li><strong>Prep time:</strong> 20 minutes</li>
            <li><strong>Cook time:</strong> 25 minutes</li>
            <li><strong>Servings:</strong> 16 servings</li>
        </ul>
    </div>

    
    <div class="video">
        <h2>Watch the Recipe Video:</h2>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/VbCxGHnNscE"  frameborder="0" allowfullscreen></iframe>
    </div>

</section>

<footer>
    <p>Home Cooking</p>
</footer>
</div>


<!--Receta per Blueberry cake-->
<div id="bleberrycake">
<header>
    <h1>Lemon Blueberry Layer Cake</h1>
</header>

<section class="recipe">
    <div class="foto-komenti">
        <div class="foto">
            <img src="../../assets/images/Blueberry-Cake-recipe-n.jpg" alt="Cake" class="receta-foto">
        </div>
        <div class="receta-komenti">
            <h2>Lemon Blueberry Layer Cake</h2>
            <p>Sunshine-sweet lemon blueberry layer cake dotted with juicy berries and topped with lush cream cheese frosting.<br>
                Let’s dive headfirst into this sunshine-sweet springtime layer cake… no matter the time of year!</p>
        </div>
    </div>

    <nav>
        <ul>
            <li><a href="#ingredients">Ingredients:</a></li>
            <li><a href="#instructions">Instructions:</a></li>
            <li><a href="#importantinformation">Important Information:</a></li>
        </ul>
    </nav>

    <div id="ingredients">
        <h2>Ingredients</h2>
        <ul>
            <li>1 (15.25 ounce) package white cake mix</li>
            <li>1 ¼ cups water</li>
            <li>3 egg whites</li>
            <li>⅓ cup vegetable oil</li>
            <li>1 cup cold heavy whipping cream</li>
            <li>¾ cup white sugar</li>
            <li>1 teaspoon vanilla extract</li>
            <li>⅓ cup blueberry pie filling</li>
        </ul>
    </div>

    <div id="instructions">
        <h2>Instructions:</h2>
        <ol>
            <li>Preheat oven to 350 degrees F (175 degrees C). Grease and flour two 8-inch pans. </li>
            <li>Beat cake mix, water, egg whites, vegetable oil, and lemon extract together in a bowl using an electric mixer on medium speed until batter is well combined, about 2 minutes.<br>
                Pour batter into prepared pans.</li>
            <li>Bake in the preheated oven until a toothpick inserted in the center of the cake comes out clean, 25 to 30 minutes.<br>
                Cool in pans for 10 minutes before transferring it to a wire rack to cool completely.</li>
            <li>Beat cream in a chilled bowl using an electric mixer until soft peaks are almost forming into stiff peaks; place bowl in refrigerator.</li>
            <li>Beat cream cheese, sugar, and vanilla extract together in a separate bowl using an electric mixer until smooth and creamy. Fold whipped cream into cream cheese mixture.</li>
            <li>Place 1 cake on a plate; top with blueberry pie filling. Place second cake atop blueberry filling. Generously frost cake with whipped cream cheese frosting.</li>
        </ol>
    </div>

    <div id="importantinformation">
        <h2>Important Information:</h2>
        <ul>
            <li><strong>Prep time:</strong> 20 minutes</li>
            <li><strong>Cook time:</strong> 25 minutes</li>
            <li><strong>Servings:</strong> 12 servings</li>
        </ul>
    </div>

    <div class="video">
        <h2>Watch the Recipe Video:</h2>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/R_x9DlGrHoE"  frameborder="0" allowfullscreen></iframe>
    </div>

</section>

<footer>
    <p>Home Cooking</p>
</footer>
</div>


<!--Receta per cheesecake-->

<div id="cheesecake">
<header>
    <h1>Mini Egg Cheesecake</h1>
</header>

<section class="recipe">
    <div class="foto-komenti">
        <div class="foto">
            <img src="../../assets/images/Mini-Cheesecake-Recipe-10.jpg" alt="Cake" class="receta-foto">
        </div>
        <div class="receta-komenti">
            <h2>Mini Egg Cheesecake</h2>
            <p>This mini cheesecake recipe creates bite-sized treats that are sure to please any crowd.<br>
                They're easy to make in minutes and look beautiful on a serving platter.</p>
        </div>
    </div>

    <nav>
        <ul>
            <li><a href="#ingredients">Ingredients:</a></li>
            <li><a href="#instructions">Instructions:</a></li>
            <li><a href="#importantinformation">Important Information:</a></li>
        </ul>
    </nav>

    <div id="ingredients">
        <h2>Ingredients</h2>
        <ul>
            <li>1 (12 ounce) package vanilla wafers</li>
            <li>2 (8 ounce) packages cream cheese</li>
            <li>¾ cup white sugar</li>
            <li>2 large eggs</li>
            <li>1 teaspoon vanilla extract</li>
            <li>1 (21 ounce) can cherry pie filling</li>
        </ul>
    </div>

    <div id="instructions">
        <h2>Instructions:</h2>
        <ol>
            <li>Gather all ingredients.</li>
            <li>Preheat the oven to 350 degrees F (175 degrees C). Line two 24-cup miniature muffin tins with paper liners.</li>
            <li>Crush vanilla wafers. Press 1/2 teaspoon of crushed vanilla wafers into each paper cup.</li>
            <li>Beat cream cheese, sugar, eggs, and vanilla in a mixing bowl until light and fluffy. Fill each miniature muffin liner with this mixture, almost to the top.</li>
            <li>Bake in the preheated oven for 15 minutes until the cheesecake is set. Cool. Top with a teaspoonful of cherry pie filling.</li>
            <li>Serve and enjoy!.</li>
        </ol>
    </div>

    <div id="importantinformation">
        <h2>Important Information:</h2>
        <ul>
            <li><strong>Prep time:</strong> 20 minutes</li>
            <li><strong>Cook time:</strong> 10 minutes</li>
            <li><strong>Servings:</strong> 12 servings</li>
        </ul>
    </div>

    <div class="video">
        <h2>Watch the Recipe Video:</h2>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/XnxhRYtE2N0"  frameborder="0" allowfullscreen></iframe>
    </div>

</section>

<footer>
    <p>Home Cooking</p>
</footer>
</div>

<!--Receta per Tiramisu-->

<div id="tiramisu">
<header>
    <h1>Dulce De Leche Tiramisu</h1>
</header>

<section class="recipe">
    <div class="foto-komenti">
        <div class="foto">
            <img src="../../assets/images/receta3.webp" alt="Cake" class="receta-foto">
        </div>
        <div class="receta-komenti">
            <h2>Dulce De Leche Tiramisu</h2>
            <p>This dulce de leche tiramisu is mouthwatering. It’s made with mascarpone cheese, dulce de leche, and whipping cream.<br>
                Ladyfingers, coffee, and the dulce de leche mascarpone cream are dreamy pairing. It’s a must for your dessert recipe book!</p>
        </div>
    </div>

    <nav>
        <ul>
            <li><a href="#ingredients">Ingredients:</a></li>
            <li><a href="#instructions">Instructions:</a></li>
            <li><a href="#importantinformation">Important Information:</a></li>
        </ul>
    </nav>

    <div id="ingredients">
        <h2>Ingredients</h2>
        <ul>
            <li>7 g gelatin powder</li>
            <li>250 g Mascarpone cheese or cream cheese</li>
            <li>250 g Dulce de leche</li>
            <li>320 g Whipping cream</li>
            <li>400 ml strong coffee</li>
            <li>40 ml coffee liqueur optional</li>
            <li>20-24 ladyfingers</li>
            <li>¼ bar Chopped dark chocolate</li>
            <li>1 tbsp Cocoa powder</li>
        </ul>
    </div>

    <div id="instructions">
        <h2>Instructions:</h2>
        <ol>
            <li>Make the coffee very strong and dissolve the sugar in it. Add the liquor and mix. Let it warm before building the cake.</li>
            <li>Mix the gelatin and water in a medium-sized bowl (microwave-safe). Let set in the fridge, for approximately 10 minutes.</li>
            <li>Whip the cream to soft peaks and set aside in the fridge.</li>
            <li>In another bowl, beat the mascarpone with the dulce de leche, and the vanilla extract until combined. Use a stand mixer with a paddle attachment or a handled mixer.</li>
            <li>Fold in the whipped cream in two parts slowly with a spatula.</li>
            <li>Add two large tablespoons of dulce de leche cream to the gelatin. Mix quickly with a hand whisk until combined. Repeat this process two more times.</li>
            <li>Fold in the gelatin and cream mixture to the rest of the dulce de leche cream slowly with a spatula.</li>
            <li>Place another layer of ladyfingers soaked in the coffee and another layer of cream. Even out the last layer with an offset spatula.</li>
            <li>Whip the dulce de leche and the whipping cream together with a mixer with a whisk attachment until stiff peaks form, and place in a piping bag with a star tip.</li>
        </ol>
    </div>

    <div id="importantinformation">
        <h2>Important Information:</h2>
        <ul>
            <li><strong>Prep time:</strong> 30 minutes</li>
            <li><strong>Cook time:</strong> Does not need cooking</li>
            <li><strong>Servings:</strong> 10 servings</li>
        </ul>
    </div>

    <div class="video">
        <h2>Watch the Recipe Video:</h2>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/h4WLdqFnLqg"  frameborder="0" allowfullscreen></iframe>
    </div>

</section>

<footer>
    <p>Home Cooking</p>
</footer>
</div>


<!--Receta per Brownie-->

<div id="brownie">
<header>
    <h1>Black Forest Skillet Brownie</h1>
</header>

<section class="recipe">
    <div class="foto-komenti">
        <div class="foto">
            <img src="../../assets/images/blackforestbrownie18a.jpg" alt="Cake" class="receta-foto">
        </div>
        <div class="receta-komenti">
            <h2>Black Forest Skillet Brownie</h2>
            <p>Deliciously easy Black Forest Skillet Brownie made from scratch.<br>
                Chocolate brownie studded with sour cherries and topped with whipped cream, melted milk chocolate and fresh cherries.</p>
        </div>
    </div>

    <nav>
        <ul>
            <li><a href="#ingredients">Ingredients:</a></li>
            <li><a href="#instructions">Instructions:</a></li>
            <li><a href="#importantinformation">Important Information:</a></li>
        </ul>
    </nav>

    <div id="ingredients">
        <h2>Ingredients</h2>
        <ul>
            <li>½ cup butter</li>
            <li>1 cup white sugar</li>
            <li>2 eggs</li>
            <li>1 teaspoon vanilla extract</li>
            <li>⅓ cup unsweetened cocoa powder</li>
            <li>½ cup all-purpose flour</li>
            <li>¼ teaspoon baking powder</li>
            <li>3 tablespoons butter, softened</li>
            <li>3 tablespoons unsweetened cocoa powder</li>
        </ul>
    </div>

    <div id="instructions">
        <h2>Instructions:</h2>
        <ol>
            <li>Preheat the oven to 350 degrees F (175 degrees C). Grease and flour an 8-inch square pan.</li>
            <li>Melt 1/2 cup butter in a large saucepan. Remove from heat, and stir in sugar, eggs, and 1 teaspoon vanilla.<br>
                Beat in 1/3 cup cocoa, flour, salt, and baking powder. Spread batter into prepared pan.</li>
            <li>Bake in the preheated oven until top is dry and edges have started to pull away from the sides of the pan, about 25 to 30 minutes. Let cool briefly before frosting.</li>
            <li>Combine softened butter, confectioners' sugar, 3 tablespoons cocoa, honey, and 1 teaspoon vanilla extract in a bowl.<br>
                Stir until smooth. Frost brownies while they are still warm.</li>
        </ol>
    </div>

    <div id="importantinformation">
        <h2>Important Information:</h2>
        <ul>
            <li><strong>Prep time:</strong> 15 minutes</li>
            <li><strong>Cook time:</strong> 30 minutes</li>
            <li><strong>Servings:</strong> 16 servings</li>
        </ul>
    </div>

    <div class="video">
        <h2>Watch the Recipe Video:</h2>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/EiAlloGIk3I"  frameborder="0" allowfullscreen></iframe>
    </div>

</section>

<footer>
    <p>Home Cooking</p>
</footer>
</div>


<!--Receta per Pie-->

<div id="pie">
<header>
    <h1>Peach Blueberry Pie with Crumble</h1>
</header>

<section class="recipe">
    <div class="foto-komenti">
        <div class="foto">
            <img src="../../assets/images/pie.jpg" alt="Cake" class="receta-foto">
        </div>
        <div class="receta-komenti">
            <h2>Peach Blueberry Pie with Crumble</h2>
            <p>This pie recipe features two of my favorite summer fruits: peach and blueberry.<br> 
            This fruity and tender filling is nestled in a flaky and delicate pie dough and topped with a crunchy crumble.This pie combines fruity flavors with a touch of brown sugar and vanilla. </p>
        </div>
    </div>

    <nav>
        <ul>
            <li><a href="#ingredients">Ingredients:</a></li>
            <li><a href="#instructions">Instructions:</a></li>
            <li><a href="#importantinformation">Important Information:</a></li>
        </ul>
    </nav>

    <div id="ingredients">
        <h2>Ingredients</h2>
        <ul>
            <li>150 g All purpose flour</li>
            <li>½ tsp Salt</li>
            <li>120 g Cold butter cut into cubes unsalted</li>
            <li>440 g Peaches peeled and cubed (2 very full cups)</li>
            <li>120 g Brown sugar</li>
            <li>Juice of ½ lemon</li>
            <li>120 g Granulated sugar</li>
            <li>100 g Cold butter cut into cubes</li>
        </ul>
    </div>

    <div id="instructions">
        <h2>Instructions:</h2>
        <ol>
            <li>Mix the peach pieces with the brown sugar and let it rest.</li>
            <li>Make the pie dough and let it cool.</li>
            <li>Make the crumble and set aside.</li>
            <li>Strain the peach and cook together with the rest of the filling ingredients.</li>
            <li>Roll out the dough and tuck it into a pie pan.</li>
            <li>Pour the filling, place the crumble, and bake.</li>
            <li>Let cool before unmolding, and serve with a scoop of ice cream.</li>
        </ol>
    </div>

    <div id="importantinformation">
        <h2>Important Information:</h2>
        <ul>
            <li><strong>Prep time:</strong> 45 minutes</li>
            <li><strong>Cook time:</strong> 1h 15 minutes</li>
            <li><strong>Servings:</strong> 8 servings</li>
        </ul>
    </div>

    <div class="video">
        <h2>Watch the Recipe Video:</h2>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/b5xeHUTG9DM"  frameborder="0" allowfullscreen></iframe>
    </div>

</section>

<footer>
    <p>Home Cooking</p>
</footer>
</div>


<!--Receta per walnut cake-->

<div id="walnutcake">
<header>
    <h1>Walnut Dulce de Leche Cake with Chantilly Cream</h1>
</header>

<section class="recipe">
    <div class="foto-komenti">
        <div class="foto">
            <img src="../../assets/images/walnut.jpg" alt="Cake" class="receta-foto">
        </div>
        <div class="receta-komenti">
            <h2>Walnut Dulce de Leche Cake with Chantilly Cream</h2>
            <p>Walnut Dulce de Leche Cake with Chantilly Cream
                This walnut cake is really delicious; It has a thin crispy exterior but is extremely moist on the inside.<br>
                Its texture reminds me of the typical French dessert called dacquoise.<br>
                Dacquoise is a baked meringue mixed with different types of nuts. This cake has a subtle nutty flavor that pairs amazingly with dulce de leche.</p>
        </div>
    </div>

    <nav>
        <ul>
            <li><a href="#ingredients">Ingredients:</a></li>
            <li><a href="#instructions">Instructions:</a></li>
            <li><a href="#importantinformation">Important Information:</a></li>
        </ul>
    </nav>

    <div id="ingredients">
        <h2>Ingredients</h2>
        <ul>
            <li>4 Eggs</li>
            <li>180 g White granulated sugar</li>
            <li>220 g Walnuts</li>
            <li>300 g Confectioners dulce de leche thic</li>
            <li>300 g Heavy cream</li>
            <li>120 g Walnuts</li>
            <li>60 g White granulated sugar</li>
        </ul>
    </div>

    <div id="instructions">
        <h2>Instructions:</h2>
        <ol>
            <li>Preheat the oven to 160°C or 320°F. Butter and flour a 20cm or an 8-inch cake pan. To ensure unmolding, line the base with parchment paper.</li>
            <li>Blend the walnuts until you have a coarse flour. Set aside.</li>
            <li>In the bowl of a stand mixer with a whisk attachment, mix the yolks with the sugar until a thick pale yellowish batter forms.</li>
            <li>In another bowl, with a clean whisk attachment whip the egg whites until stiff peaks form.</li>
            <li>Add the walnut flour to the yolk mixture. Incorporate gently with a spatula.</li>
            <li>Add the egg whites to the batter, in three steps, folding in gently so that we don’t lose air in the mixture.</li>
            <li>Once the praline is cold, chop it to the desired size and it is ready to decorate our cake.</li>
        </ol>
    </div>

    <div id="importantinformation">
        <h2>Important Information:</h2>
        <ul>
            <li><strong>Prep time:</strong> 40 minutes</li>
            <li><strong>Cook time:</strong> 40 minutes</li>
            <li><strong>Servings:</strong> 12 servings</li>
        </ul>
    </div>

    <div class="video">
        <h2>Watch the Recipe Video:</h2>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/FqZK8rsARTI"  frameborder="0" allowfullscreen></iframe>
    </div>

</section>

<footer>
    <p>Home Cooking</p>
</footer>
</div>

<script src="navbar.php"></script>

</body>
</html>