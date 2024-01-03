<?php
include 'header.php';
include 'functions.php'; 

?>

<section>
    <h2>Front Page</h2>
    <?php
    $is_user_logged_in = true;

    if ($is_user_logged_in) {
        echo "Welcome back! You are logged in.";
    } else {
        echo "Welcome! Please log in to access more content.";
    }

   
    $colors = array("Red", "Green", "Blue");

    echo "<p>Available colors:</p>";
    echo "<ul>";
    foreach ($colors as $color) {
        echo "<li>$color</li>";
    }
    echo "</ul>";

    
    $counter = 1;
    echo "<p>Counting up to 5:</p>";
    echo "<ul>";
    while ($counter <= 5) {
        echo "<li>$counter</li>";
        $counter++;
    }
    echo "</ul>";

    
    $name = "Alice";
    echo greet_user($name); 
    ?>
</section>

<?php
include 'footer.php';
?>
