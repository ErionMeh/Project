<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Home Cooking'; ?></title>
    
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+MX+Guides&family=Playwrite+VN+Guides&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <!-- styles -->
    <link rel="stylesheet" href="../css/navbar.css">
    <?php if (isset($additionalStyles)) echo $additionalStyles; ?>
</head>
<body>
    <?php 
    require_once 'navbar.php';
    echo generateNavbar();
    ?>

    <!-- Content section -->
    <main>
        <?php if (isset($content)) echo $content; ?>
    </main>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Logo animation
        const logo = document.getElementById('logoo');
        if (logo) {
            logo.addEventListener('click', function() {
                this.style.opacity = '0';
                setTimeout(() => {
                    this.style.opacity = '1';
                }, 200);
            });
        }
    });
    </script>
</body>
</html>