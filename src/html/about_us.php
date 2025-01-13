<?php 
include_once("config.php");
require_once 'page_template.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+MX+Guides&family=Playwrite+VN+Guides&display=swap" rel="stylesheet">

    
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="../css/navbar.css">
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<!--Box icons-->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<style>
    .about{
        display: flex;
    }
    .menu{
        position: fixed;
        width:200px;
        height:100%;
        background-color:#d2b4de;
    }
  #of{
        font-size: 20px;
    }  
   #logostyle{
        font-family: "Dancing Script", serif;
        font-size: 40px;
        color:rgb(154, 140, 155)
    }

    .div_aboutus{
        background-color:rgb(248, 246, 248) ;
    }
    .div_au2{
        position: static;
        background-color:rgb(239, 232, 238);
        width: 170px;
    }
    .aboutus{
        background-color:rgb(240, 240, 239);
        display: flex;
    }
    #foto1{
        height:570px;
        margin-left:190px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .aboutus2{
        display: flex;
        margin-top:10px;
        margin-bottom:0;
        margin-left: 0;
    }
    #linku1{
        margin-top:14px;
        text-decoration: none;
        color:#212f3d;
        font-size: 13.5px;
        font-family: "Outfit", serif;
        margin-left: 0;
    }
    #teksti1{
        margin-left:0;
        font-size: 13.5px;
        font-family: "Outfit", serif;
    }
    .aboutus3{
        margin-left: 130px;
        width: 500px;
    }
    #tekst2{
        font-size: 55px;
        margin-top: 0;
        font-family: "Playfair Display", serif;
        color:  rgb(236, 167, 83);
        margin-left:0;
        margin-bottom: 0;
    }
    #tekst3{
        font-size: 20px;
        margin-top:20px;
    }
    #tekst4{
        font-family: "Dancing Script", serif;
        font-size: 35px;
        margin-top: -2px;
        color: #808b96;
    }
    #tekst5{
        font-family: "Outfit", serif;
        font-size: 17px;
        color:#566573;
    }
    .personi1{
        display: flex;
    }
    .personi2{
        display: flex;
    }
    .personi3{
        display: flex;
    }
    .personi4{
        display: flex;
    }
    .personi1 img{
        width: 200px;
        height: 200px;
        object-fit: cover;
        border-radius: 100px;
        margin-left: 300px;
    }
    .personi2 img{
        width: 200px;
        height: 200px;
        object-fit: cover;
        border-radius: 100px;
        margin-left: 300px;
    }
    .personi3 img{
        width: 200px;
        height: 200px;
        object-fit: cover;
        border-radius: 100px;
        margin-left: 300px;
    }
    .personi4 img{
        width: 200px;
        height: 200px;
        object-fit: cover;
        border-radius: 100px;
        margin-left: 300px;
    }
    .teksti4{
        width: 750px;
        margin-left: 400px;
    }
    .teksti1{
        margin-left: 250px;
    }
    .teksti2{
        color: #424949;
    }
    .teksti5{
        margin-left: 10px;
        color: #424949;
    }
    .details{
        width: 600px;
        margin-left: 40px;
        margin-top: 10px;
    }
  
    .h11{
        color:#4a235a;
        font-size: 20px;
        font-family: "Outfit", serif;
    }
   
    #shfaq{
        display: none;
    }
    #shfaq1{
        display: none;
    }
    #shfaq2{
        display: none;
    }
    #shfaq3{
        display: none;
    }
  
    #ourteam{
        margin-left: 215px;
        color: #424949;
    }
    .personi2,.personi3, .personi4{
        margin-top: 20px;
    }
    /* footer */
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
    
    /* Feedback Section */
.feedback-section {
    padding: 40px;
    margin-top: 50px;
    text-align: center;
    width: 70%;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
    background-color: #f9f9f9;  /* Light background color */
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Soft shadow */
}

.feedback-section h2 {
    font-size: 2rem;  
    font-weight: 700; 
    color: #333; 
    margin-bottom: 10px;
}

.feedback-section p {
    font-size: 1.1rem; 
    color: #666; 
    margin-bottom: 20px;
}

.feedback-question {
    margin-bottom: 20px;
    text-align: left;
}

.feedback-question label {
    font-size: 1rem;
    margin-bottom: 8px;
    font-family: 'Arial', sans-serif;
    color: #333;
}

/* Styled Radio Buttons */
.radio-buttons input[type="radio"] {
    margin-right: 10px;
    transform: scale(1.2);
}

.radio-buttons label {
    margin-right: 20px;
    font-family: 'Arial', sans-serif;
    font-size: 1.1rem;
    color: #555;
}

.star-rating input[type="radio"] {
    display: none;
}

.star-rating label {
    font-size: 30px;
    color: #ccc;
    cursor: pointer;
    transition: color 0.3s ease;
}

.star-rating input[type="radio"]:checked ~ label {
    color: #ffcc00;
}

.star-rating label:hover,
.star-rating input[type="radio"]:checked ~ label:hover {
    color: #ffcc00;
}

/* Textarea Styling */
textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-family: 'Arial', sans-serif;
    font-size: 1rem;
    color: #333;
    resize: vertical;
}

textarea:focus {
    border-color: #ffcc00;
}

.submit-button input[type="submit"] {
    background-color: rgb(236, 167, 83);  
    color: white;
    padding: 12px 30px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    font-family: 'Arial', sans-serif;
    transition: background-color 0.3s ease;
}

.submit-button input[type="submit"]:hover {
    background-color: #e76a00; 
}


@media (max-width: 600px) {
    .feedback-section {
        width: 90%;
    }

    .star-rating label {
        font-size: 25px;
    }

    textarea {
        font-size: 0.9rem;
    }
}

    .contactus-section {
    padding: 40px;
    margin-top: 50px;
    text-align: center;
    width: 70%;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
    background-color: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}

.contact-header h1 {
    font-size: 2rem;
    font-weight: 700;
    color: #333;
    margin-bottom: 10px;
}

.contact-header p {
    font-size: 1.1rem;
    color: #666;
    margin-bottom: 20px;
}

.contact-methods {
    display: flex;
    justify-content: center;
    gap: 30px;
    flex-wrap: wrap;
}

.contact-item {
    text-align: center;
    margin: 10px;
}

.contact-icon {
    font-size: 40px;
    color: black;
    text-decoration: none;
    display: block;
    margin-bottom: 5px;
    transition: color 0.3s ease;
}

.contact-icon:hover {
    color: #f39c12;
}

.contact-username {
    font-size: 1rem;
    color: #333;
    text-decoration: none;
    display: block;
    margin-top: 5px;
}

.contact-username:hover {
    color: #f39c12;
}

.contact-icon i {
    font-size: 40px; 
}

/* Phone icon style */
.bxs-phone {
    font-size: 40px;
    color: black; 
}

#our-history {
    padding: 50px;
    background-color: #f4f4f4;
    text-align: center;
}

.history-title {
    font-size: 36px;
    margin-bottom: 20px;
    font-family: 'Arial', sans-serif;
}

.history-content {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    margin-bottom: 20px;
}

.history-image-container {
    margin: 10px;
    transition: transform 0.3s ease;
}

.history-image {
    width: 300px;
    height: auto;
}

.history-content p {
    width: 55%;
    font-size: 16px;
    line-height: 1.6;
    font-family: 'Arial', sans-serif;
}

.switch-button {
    font-size: 30px;
    background: none;
    border: none;
    cursor: pointer;
    color: #333;
    margin-top: 20px;
    transition: transform 0.3s ease;
}

.switch-button:hover {
    transform: scale(1.2);
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
    /* footer end */
    #thankYouPopup {
    display: none; 
    position: fixed; 
    top: 50%; 
    left: 50%; 
    transform: translate(-50%, -50%); 
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    z-index: 1000; 
    text-align: center;
}

#thankYouPopup h3 {
    margin-bottom: 15px;
}

#thankYouPopup p {
    margin: 10px 0;
}

#closeBtn {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 20px;
    border: none;
    background: none;
    color: #000;
    cursor: pointer;
}

  
</style>
</head>
<body>
    <div id="navbar-placeholder"></div>

    <!--------------------------------------->
  
    <div class="aboutus">
        <div>
            <img id="foto1" src="../../assets/images/aboutus1.webp">
        </div>
        <div class="aboutus3">
            <div class="aboutus2">
                <a id="linku1" href="../html/home.php">HOME COOKING <i id="right" class='bx bx-chevron-right'></i></a>
                <p id="teksti1">ABOUT US</p>
            </div>
            <p id="tekst2"><b>About Us</b></p>
            <p id="tekst3">Who We Are?</p>
            <p id="tekst5">
                Food happens to us—every single day. It bumps up against everything else we care about: family, 
                health, budget, schedule…and our happiness. 
                <br>
                <br>
                Fellow cooks, we see you because we’re not just food editors, we are you. 
                Sure, we’ve worked in publishing, restaurant kitchens, TV studios, grocery stores, 
                and meal kit companies. But we’re also parents, dog-walkers, commuters, shoppers, 
                homeowners—people who love food as much as we need it, just like you.
                <br>
                <br>
                We are that reliable friend who cooks with you by your side, showing you exactly how a recipe plays out, 
                step by step. We’re answering your questions. We’re here when you need a soft boiled egg, 
                when you’re perfecting pilau, when you’re on a budget and throwing a party anyways, when you’re 
                11 and you need a snack, when you’ve just moved in with vegans, when someone gives you an Instant Pot, 
                and when you’re pledging to eat less of this and more of that. We want you to be the first one invited to 
                the potluck.
            </p>
        </div>
    </div>
    </div>

    <!------------------------------------------>

    <div>
        <div class="teksti4">
        <h1 class="teksti1">Meet the Team</h1>
        <p class="teksti2">
        We have an entire team of geniuses behind us at Home Cooking who are experts in a little bit of everything
        -from <span class="teksti5">customer service, to social media, to videography, to assisting with recipe shoots. They are EVERYTHING.</span>
        </p>
        <p id="ourteam">Our team helps keep it all running smoothly.</p>
        </div>

        <div class="personi1">
            <img src="../../assets/images/njeri.webp">
            <div class="details"> 
                <h1 class="h11">LINDSAY</h1>
                <p>
                    Lindsay is the voice, author, and creator behind Home Cooking. 
                </p>
                <p id="shfaq">
                    
                    She develops recipes and writes content for the blog and on Instagram. 
                    The little blog that started as her casual hobby for nights and weekends while working as 
                    a teacher has now grown into a full-fledged business. She lives in Minnesota with her husband James, 
                    dog Sage, and daughter Solvi.<br><button id="hide">Show Less</button>
                </p>
                <button id="show">
                    <p>Read more</p>
                </button>
                
            </div>
        </div>

        <div class="personi2">
            <img src="../../assets/images/njeri1.jpg">
            <div class="details">
                <h1 class="h11">JAMES</h1>
                <p>
                    James is the chief tech consultant / business advisor / taste tester at Home Cooking.
                </p>
                <p id="shfaq1">
                    Day-to-day,you’ll mostly see him around Food Blogger Pro, as well as hosting the Food Blogger Pro podcast. 
                    James is also husband to Lindsay, and lives in Minnesota with their dog Sage. 
                    He can usually be found with a coffee in hand.<br><button id="hide1">Show Less</button>
                </p>
                <button id="show1">
                    <p>Read More</p>
                </button>
            </div>
        </div>


        <div class="personi3">
            <img src="../../assets/images/njeri3.jpg">
            <div class="details">
                <h1 class="h11">JENA</h1>
                <p>
                    Jenna is the Communications Manager at Home Cooking. 
                </p>
                <p id="shfaq2">
                   She manages much of the day-to-day
                     communication with readers and brands – on and off the blog. You can find her answering recipe questions on posts,
                      helping readers with ebook purchases, coordinating partnership details with brands, 
                      and other various behind-the-scenes projects. Jenna lives in Minnesota with her husband.
                      <br><button id="hide2">Show Less</button>
                </p>
                <button id="show2">
                    <p>Read More</p>
                </button>
            </div>
        </div>

        
        <div class="personi4">
            <img src="../../assets/images/njeri2.jpg">
            <div class="details">
                <h1 class="h11">KRISTA</h1>
                <p>
                    Krista is the Shoot Assistant at Home Cooking. 
                </p>
                <p id="shfaq3">
                    You’ll find her in the kitchen supporting Lindsay on shoot days, prepping and cooking recipes for the blog. 
                    She is also the resident recipe tester, who tests and re-tests many recipes to ensure the best cooking experience. 
                    Krista lives in Minnesota with her husband and 3 children. 
                    She also enjoys food photography and managing her blog Destination Delish.
                      <br><button id="hide3">Show Less</button>
                </p>
                <button id="show3">
                    <p>Read More</p>
                </button>
            </div>
        </div>
<section class="feedback-section">
    <h2>Feedback</h2>
    <p>We would love to hear your feedback!</p>

    <form id="feedbackForm" action="#" method="POST">
        <div class="feedback-question">
            <label for="visit-again">Will you visit us again?</label><br>
            <div class="radio-buttons">
                <input type="radio" id="yes" name="visit-again" value="yes">
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="visit-again" value="no">
                <label for="no">No</label>
            </div>
        </div><br>
    

        <div class="feedback-question">
            <label for="rating">Please rate us:</label><br>
            <div class="star-rating">
                <input type="radio" id="star1" name="rating" value="1">
                <label for="star1">&#9733;</label>
                <input type="radio" id="star2" name="rating" value="2">
                <label for="star2">&#9733;</label>
                <input type="radio" id="star3" name="rating" value="3">
                <label for="star3">&#9733;</label>
                <input type="radio" id="star4" name="rating" value="4">
                <label for="star4">&#9733;</label>
                <input type="radio" id="star5" name="rating" value="5">
                <label for="star5">&#9733;</label>
            </div>
        </div><br>
    
        <div class="feedback-question">
            <label for="message">We'd love to hear your thoughts, suggestions, or anything you'd like to share:</label><br>
            <textarea id="message" name="message" rows="4" placeholder="Enter your message here..."></textarea>
        </div><br>
        
        <div id="thankYouPopup" style="display: none;">
            <button type="button" id="closeBtn" onclick="closePopup()">X</button>
            <h3>Thank you for your feedback!</h3>
            <p>Your rating: <span id="ratingValue"></span></p>
        </div>
    
        <div class="submit-button">
            <input type="submit" value="Submit Feedback">
        </div>
    </form>
</section>
    
<!--------------------------------------- Contact Us Section --------------------------------------> 
<div class="contactus-section">
    <div class="contact-header">
        <h1 class="section-title">Contact Us</h1>
        <p class="section-description">
            We’d love to hear from you! Feel free to reach out with any questions, feedback, or just to say hello.
        </p>
    </div>

    <div class="contact-methods">
        <div class="contact-item">
            <a href="https://www.instagram.com" target="_blank" class="contact-icon">
                <i class='bx bxl-instagram' id="icon"></i>
            </a>
            <a href="https://www.instagram.com/homecooking" class="contact-username">@homecooking</a>
        </div>

        <div class="contact-item">
            <a href="https://www.facebook.com" target="_blank" class="contact-icon">
                <i class='bx bxl-facebook' id="icon"></i>
            </a>
            <a href="https://www.facebook.com/homecooking" class="contact-username">@homecooking</a>
        </div>

        <div class="contact-item">
            <a href="mailto:homecooking@gmail.com" class="contact-icon">
                <i class='bx bx-envelope' id="icon"></i>
            </a>
            <a href="mailto:homecooking@gmail.com" class="contact-username">homecooking@gmail.com</a>
        </div>

        <div class="contact-item">
            <a href="tel:+3834567895" class="contact-icon">
                <i class='bx bxs-phone' id="icon"></i>
            </a>
            <a href="tel:+3834567895" class="contact-username">+383 (45) 567-895</a>
        </div>

        <div class="contact-item">
            <a href="https://www.pinterest.com/homecooking" target="_blank" class="contact-icon">
                <i class='bx bxl-pinterest' id="icon"></i>
            </a>
            <a href="https://www.pinterest.com/homecooking" class="contact-username">@homecooking</a>
        </div>

        <div class="contact-item">
            <a href="https://www.tiktok.com/@homecooking" target="_blank" class="contact-icon">
                <i class='bx bxl-tiktok' id="icon"></i>
            </a>
            <a href="https://www.tiktok.com/@homecooking" class="contact-username">@homecooking</a>
        </div>
    </div>
</div>

<!-------------------------------------------------------------------------------------------------->



  
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
        <!--------------Footer end----------->

        <script src="navbar.php"></script>

    </body>
    <script type="text/javascript">
      
    
$(document).ready(function () {
    function shfaq_heq(action) {
        const audio = document.getElementById("audio-lindsay");
        if (action === 'show') {
            $('#shfaq').show();
            $('#show').hide();
            $('#hide').show();
            audio.play(); 
        } else if (action === 'hide') {
            $('#shfaq').hide();
            $('#hide').hide();
            $('#show').show();
            audio.pause(); 
            audio.currentTime = 0; 
        }
    }

    $('#show').click(function () {
        shfaq_heq('show');
    });

    $('#hide').click(function () {
        shfaq_heq('hide');
    });
});

$(document).ready(function () {
      
      function heq_shfaq(action) {
        if (action === 'show1') {
          $('#shfaq1').show();          
          $('#show1').hide();       
          $('#hide1').show();       
        } else if (action === 'hide1') {
          $('#shfaq1').hide();          
          $('#hide1').hide();       
          $('#show1').show();      
        }
      }
      
      $('#show1').click(function () {
        heq_shfaq('show1'); 
      });

      $('#hide1').click(function () {
        heq_shfaq('hide1'); 
      });
 });


 $(document).ready(function () {
      
      function heq_shfaq1(action) {
        if (action === 'show2') {
          $('#shfaq2').show();          
          $('#show2').hide();       
          $('#hide2').show();       
        } else if (action === 'hide2') {
          $('#shfaq2').hide();          
          $('#hide2').hide();       
          $('#show2').show();      
        }
      }
      
      $('#show2').click(function () {
        heq_shfaq1('show2'); 
      });

      $('#hide2').click(function () {
        heq_shfaq1('hide2'); 
      });
 });

 $(document).ready(function () {
      
      function heq_shfaq2(action) {
        if (action === 'show3') {
          $('#shfaq3').show();          
          $('#show3').hide();       
          $('#hide3').show();       
        } else if (action === 'hide3') {
          $('#shfaq3').hide();          
          $('#hide3').hide();       
          $('#show3').show();      
        }
      }
      
      $('#show3').click(function () {
        heq_shfaq2('show3'); 
      });

      $('#hide3').click(function () {
        heq_shfaq2('hide3'); 
      });
 });
    
 function switchPositions() {
    var imageContainer = document.querySelector('.history-image-container');
    
  
    if (imageContainer.style.order === '1') {
        imageContainer.style.order = '-1'; 
    } else {
        imageContainer.style.order = '1'; 
    }
}
document.getElementById('feedbackForm').addEventListener('submit', function(event) { 
    event.preventDefault(); 

    
    var visitAgain = document.querySelector('input[name="visit-again"]:checked');
    var rating = document.querySelector('input[name="rating"]:checked');
    var message = document.getElementById('message').value.trim();

    if (!visitAgain) {
        alert("Please select whether you will visit us again.");
        return; 
    }

    
    if (!rating) {
        alert("Please rate us.");
        return; 
    }

    
    if (message === "") {
        alert("Please enter your feedback before submitting.");
        return; 
    }

    let maxValue = 5; 
    let ratingValue = parseInt(rating.value);

    
    if (ratingValue > maxValue) {
        alert("Rating exceeds maximum value of 5!");
        return;
    }

    
    let ratingAsString = ratingValue.toString();

   
    let ratingInExponential = ratingValue.toExponential();

  
    document.getElementById('thankYouPopup').style.display = 'block';
    document.getElementById('ratingValue').textContent = ratingAsString;
    document.getElementById('ratingExp').textContent = ratingInExponential;
    document.getElementById('maxValue').textContent = maxValue;
});

function closePopup() {
    document.getElementById('thankYouPopup').style.display = 'none';
}


</script>
</html>