

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
// xss validation----------------------------------------


    $full$name = htmlspecialchars($_POST["name"], ENT_QUOTES, 'UTF-8');
    $phone = htmlspecialchars($_POST["mobile"], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');
    $subject = htmlspecialchars($_POST["subject"], ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars($_POST["message"], ENT_QUOTES, 'UTF-8');
    
    $server = "localhost:4306";
    $username = "root";
    $password = "";
    $database = "users1234";
    
    $conn = mysqli_connect($server, $username, $password, $database);
    if (!$conn) {
        die("Error: " . mysqli_connect_error());
    }

    // check Whether this username Exists
    $checkDuplicateSql = "SELECT * FROM contact_form WHERE mobile = '$phone' OR email = '$email'";
    $duplicateResult = $conn->query($checkDuplicateSql);

    if ($duplicateResult->num_rows > 0) {
        // Duplicate username found, show an error message
        echo "Error mobile and email already exist. Please choose a different .";
    } else {
        // Insert data into the database
        $sql = "INSERT INTO `contact_form` (`fullname`, `phone`, `email`,`subject`,`message`) VALUES ('$fullname','$phone' ,'$email','$subject','$message')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "Success: Data inserted successfully.";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
