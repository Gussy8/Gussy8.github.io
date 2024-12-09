<?php
ob_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cookie_name = "user";
    $cookie_value = htmlspecialchars($_POST["name"]); // Her har vi vores navn fra før
    $cookie_email = htmlspecialchars($_POST["email"]); // Og så har vi en ny value som er vores email
    $cookie_name_email = "mail";
    // Grunden til der er 
    // Her sætter vi cookien til at udløbe efter 1 minut
    setcookie($cookie_name, $cookie_value, time() + 60, "/"); // 60 seconds = 1 minute
    setcookie($cookie_name_email, $cookie_email, time() + 60, "/");
}
?>
<html>
<!DOCTYPE html>
<head></head>

<body>
<?php
    if (isset($_COOKIE[$cookie_name])) {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name] . "<br>";
    } else {
        echo "Cookie named '" . $cookie_name . "' is not set!<br>";
    }

    if (isset($_COOKIE[$cookie_name_email])) { // Her gentager vi det samme for mail som ved navnet bare med vores nye value
        echo "Cookie '" . $cookie_name_email . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name_email] . "<br>";
    } else {
        echo "Cookie named '" . $cookie_name_email . "' is not set!<br>";
    }
    ?>
    <p><strong>Note:</strong> You might have to reload the page to see the value
        of the cookie.</p>
</body>

</html>