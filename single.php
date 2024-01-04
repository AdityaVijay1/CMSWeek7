<?php include 'header.php'; ?>

    <h2>Welcome to My Sample Page Theme</h2>

    <?php
    echo '<p>This is a test message for the sample page. This is a paragraph echoed using PHP.</p>';
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

    <?php
    
    $isUserLoggedIn = false;

    if ($isUserLoggedIn) {
        echo '<p>Welcome back! You are logged in.</p>';
    } else {
        echo '<p>Welcome! Please log in to access more content.</p>';
    }
    ?>
    

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
    
    $colors = array("Black", "Red", "Gold");

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
                $person = array("name" => "John", "age" => 25, "city" => "Singapore");

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
$userName = "Tom";
echo '<p>' . greet_user($userName) . '</p>';
?>
<?php include 'footer.php'; ?>
