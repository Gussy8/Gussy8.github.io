<?php
    ob_start(); 
        $cookie_name = "user"; // Der bliver lavet en variabel som får navnet der hedder user
        $cookie_value = "John Doe"; //her har vi lavet endnu en variabel der har en værdu som skal være et navn
        setcookie($cookie_name, $cookie_value, time() + 60, "/"); // 60 = 1 minute
?>
<html>
<!DOCTYPE html>
<head></head>

<body>
    <?php
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!"; //Her fortæller den at den er ikke er der
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>"; //Hvis man så refresher så får man den og så
                                                          // kommer der til at stå det navn men har skrevet ind
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
    ?>
    <p><strong>Note:</strong> You might have to reload the page to see the value
        of the cookie.</p>
</body>

</html>