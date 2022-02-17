<html>
    <?php

        include "connection.php";




        $guestid = rand(1,999);
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $password = $_POST["password"];
        $emailcon = $_POST["passwordcon"];



        $sql = "INSERT INTO guests (GuestID, FirstName, LastName, PhoneNumber, Email, Password) VALUES (".$guestid.", '".$firstname."', '".$lastname."', ".$phone.", '".$email."', '".$password."')";

        if ($conn->query($sql) === TRUE) {
          //echo "New record created successfully";
          // header('Location: ./siker.php');
        } else {
          //echo "Error: " . $sql . "<br>" . $conn->error;
          // header('Location: ./hiba.php');
        }
        
        $conn->close();
    ?>
</html>