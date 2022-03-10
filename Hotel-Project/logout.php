<?php
session_start();
?>
<!DOCTYPE html>
<?php 
    unset($_SESSION["sfirstname"]);
    unset($_SESSION["slastname"]);
    unset($_SESSION["semail"]);
    header("Location: http://localhost/Hotel-Project02/Hotel-Project/");
    exit();
?>
</html>