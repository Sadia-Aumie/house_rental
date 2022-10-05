<?php

if (isset($_POST['submit'])) {
    if (isset($_POST['username']) && isset($_POST['password']) &&
        isset($_POST['gender']) && isset($_POST['email']) &&
        isset($_POST['phoneCode']) && isset($_POST['phone'])) {
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phoneCode = $_POST['phoneCode'];
        $phone = $_POST['phone'];
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "work";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM register WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO register(username, password, gender, email, phoneCode, phone) values(?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;
            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssssii",$username, $password, $gender, $email, $phoneCode, $phone);
                if ($stmt->execute()) {
                  
                    echo '<span style="font-size: 50px;color: white;position:absolute; bottom:30px;"> "You are registered to our website." </span>';
                   
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo '<span style="font-size: 50px;color: white;border: 3px solid black;background-color:black; ;position:absolute; bottom:30px;">"Someone already registerd using this email."</span>';
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
echo ' 
<!DOCTYPE html 
<html>
<img src="download.jpg" width="100%" height="100%" title="Logo of a company" alt="Logo of a company" />

</html>
';
?>