

<?php
$isUserLoggedIn = false;

if ($isUserLoggedIn) {
    echo '<p>Welcome back! You are logged in.</p>';
} else {
    echo '<p>Welcome! Please log in to access more content.</p>';
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    
    $containsNumber = false;
    for ($i = 0; $i < strlen($username); $i++) {
        if (is_numeric($username[$i])) {
            $containsNumber = true;
            break;
        }
    }

    
    if ($username === "admin" && $password === "password" && !$containsNumber) {
        
        header("Location: dashboard.php");
        exit();
    } else {
        $errorMessage = "Invalid username or password";
        if ($containsNumber) {
            $errorMessage = "Not correct username. The username should not contain numbers.";
        }
    }
}


include 'header.php';
?>
<body style = "background-color: #ADD8E6;"></body>
    <h1>Login</h1>

    <?php if (isset($errorMessage)) { ?>
        <p><?php echo $errorMessage; ?></p>
    <?php } ?>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>

        <input type="submit" value="Login">
    </form>

    <h2>Welcome to The Home Page of my Theme</h2>

    <?php
    echo '<p>This is a paragraph echoed using PHP.</p>';
    ?>
    
    <div class="container">
        <div class="row">
            <div class="column">
                <?php
                echo "<p>Left Side Content</p>";
                ?>
            </div>

            <div class="column">
                <?php
               
                $rightSideContent = "Right Side Content";
                echo "<p>$rightSideContent</p>";
                ?>
            </div>
        </div>
    </div>

    
    
    <div class="container">
        <div class="row">
            <div class="column">
                <?php
                
                $showLeftContent = true;

                if ($showLeftContent) {
                    echo '<p>Left Side Content is showcased</p>';
                } else {
                    echo '<p>Left side content is hidden.</p>';
                }
                ?>
            </div>

            <div class="column">
                <?php
                
                $isPremiumUser = true;
                $hasAccessToPremiumContent = true;

                if ($isPremiumUser) {
                    if ($hasAccessToPremiumContent) {
                        echo '<p>Premium User: You have access to premium content.</p>';
                    } else {
                        echo '<p>Sorry, premium content is not available to you.</p>';
                    }
                } else {
                    echo '<p>Regular User: Please upgrade to premium for exclusive content.</p>';
                }
                ?>
            </div>
        </div>
    </div>

    <?php
    
    $colors = array("Red", "Green", "Blue");

    echo '<p>Available colors:</p>';
    echo '<ul>';
    foreach ($colors as $color) {
        echo "<li>$color</li>";
    }
    echo '</ul>';
    ?>
    
    <div class="container">
        <div class="row">
            <div class="column">
                <?php
                $person = array("name" => "Ben", "age" => 25, "city" => "Singapore");

                echo '<p>User details:</p>';
                echo '<ul>';
                foreach ($person as $key => $value) {
                    echo "<li><strong>$key:</strong> $value</li>";
                }
                echo '</ul>';
                ?>
            </div>

            <div class="column">
                <?php
                $numbers = array(1, 2, 3, 4, 5);

                echo '<p>Numbers:</p>';
                echo '<ul>';
                foreach ($numbers as $number) {
                    echo "<li>$number</li>";
                }
                echo '</ul>';
                ?>
            </div>
        </div>
    </div>
<?php
$userName = "Ben";
echo '<p>' . greet_user($userName) . '</p>';
?>
<body style = "background-color: black;">
<?php include 'footer.php'; ?>


