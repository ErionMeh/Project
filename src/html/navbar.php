<?php


// For debugging - you can temporarily uncomment these lines to see session info
// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

// Regular user links
$links = [
    ["href" => "home.php", "text" => "HOME"],
    ["href" => "recipes.php", "text" => "RECIPES"],
    ["href" => "book.php", "text" => "BOOK"],
    ["href" => "about_us.php", "text" => "ABOUT US"],
    ["href" => "healthandwellnes.php", "text" => "HEALTH & WELLNESS"],
    ["href" => "edit.php?id=1", "text" => "EDIT PROFILE"]
];

// Additional links for admin users
$adminLinks = [
    ["href" => "dashboard.php", "text" => "USER DASHBOARD"]
];

function generateNavbar() {
    global $links, $adminLinks;
    ob_start();
?>
    <nav class="background">
        <div class="logo">
            <p id="logoo">
                <b id="homee">Home</b>
                <span id="logostyle">Cooking</span>
            </p>
        </div>
        <div id="list">
            <ul class="list">
                <?php 
                // Display regular links
                foreach ($links as $link): ?>
                    <li><a href="<?php echo $link['href']; ?>"><?php echo $link['text']; ?></a></li>
                <?php endforeach; 
                
                // Display admin links if user is admin
                if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1): ?>
                    <!-- Add a visual separator -->
                    <li class="nav-separator">|</li>
                    <?php foreach ($adminLinks as $link): ?>
                        <li><a href="<?php echo $link['href']; ?>" class="admin-link"><?php echo $link['text']; ?></a></li>
                    <?php endforeach;
                endif; 
                
                // Add logout link if user is logged in
                if(isset($_SESSION['user_id'])): ?>
                    <li class="nav-separator">|</li>
                    <li><a href="logout.php" class="logout-link">LOGOUT</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
    <hr id="hr1">

    <!-- Add some CSS for admin links -->
    <style>
nav.background {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
    box-shadow: 0 4px 2px -2px gray;
    background-color: #fff;
}

body {
    margin-top: 60px;
}

        .admin-link {
            color: #ff6b6b !important;
        }
        .logout-link {
            color: #666 !important;
        }
        .nav-separator {
            color: #ddd;
            margin: 0 10px;
        }
    </style>
<?php
    return ob_get_clean();
}
?>