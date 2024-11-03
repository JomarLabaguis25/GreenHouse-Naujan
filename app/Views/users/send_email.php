<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "greenhouse";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch latest temperature, humidity, and heat index data from the database
$sql = "SELECT temperature, humidity, heatIndex FROM temperature ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch email addresses from the database
    $sql = "SELECT email FROM useraccount";
    $emailResult = $conn->query($sql);

    if ($emailResult->num_rows > 0) {
        // Prepare the email subject and message
        $emailSubject = "Greenhouse Temperature and Humidity Update";
        $row = $result->fetch_assoc();
        $temperature = $row["temperature"];
        $humidity = $row["humidity"];
        $heatIndex = $row["heatIndex"];

        $emailMessage = "The latest temperature, humidity, and heat index data are as follows:\n\n";
        $emailMessage .= "Temperature: " . $temperature . " °C\n";
        $emailMessage .= "Humidity: " . $humidity . " %\n";
        $emailMessage .= "Heat Index: " . $heatIndex . " °C\n";

        // Send email to each registered user
        while ($row = $emailResult->fetch_assoc()) {
            $email = $row["email"];
            $to = $email;
            $headers = "From: feudomykopiolo22@gmail.com" . "\r\n";
            $headers .= "Reply-To: feudomykopiolo22@gmail.com" . "\r\n";
            $headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n";

            if (mail($to, $emailSubject, $emailMessage, $headers)) {
                echo 'Email sent to ' . $email . '\n';
            } else {
                echo 'Error sending email to ' . $email . '\n';
            }
        }
    } else {
        echo 'No registered users found.';
    }
} else {
    echo 'No data available.';
}

$conn->close();
?>
