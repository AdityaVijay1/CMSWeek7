<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website Title</title>

    <!-- Add your styles or link to your CSS file here -->
    <link rel="stylesheet" href="style.css">

    <?php wp_head(); ?> <!-- If using WordPress, include this line for plugins/scripts -->
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <div class="logo">
                <a href="/">Your Logo</a>
            </div>

            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="/page.php">Page 1</a></li>
                    <li><a href="/page.php">Page 2</a></li>
                    <!-- Add more menu items as needed -->
                </ul>
            </nav>
        </div>
    </header>


