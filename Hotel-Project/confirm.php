<html>
    <?php

        include "connection.php";



        $guestid = rand(1,999);
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $emailcon = $_POST["emailcon"];

        $sql = "INSERT INTO guests (GuestID, FirstName, LastName, PhoneNumber, Email) VALUES (".$guestid.", '".$firstname."', '".$lastname."', ".$phone.", '".$email."')";

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