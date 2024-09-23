<?php
// Establishing connection to MySQL
$con = mysqli_connect('localhost', 'root', '');

if ($con) {
    echo "Connection successful<br>";
} else {
    die("Connection failed: " . mysqli_connect_error());
}

// Selecting the correct database ('portfolio')
$db_selected = mysqli_select_db($con, 'portfolio');


// Retrieving data from the form
$name = isset($_POST['user']) ? $_POST['user'] : ''; 
$email = isset($_POST['email']) ? $_POST['email'] : '';
$number = isset($_POST['number']) ? $_POST['number'] : '';
$subject = isset($_POST['subject']) ? $_POST['subject'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';

// Inserting data into the table
$query = "INSERT INTO protfoliodata (name, email, number, subject, message) 
          VALUES ('$name', '$email', '$number', '$subject', '$message')"; 

// Executing the query
if (mysqli_query($con, $query)) {
    // Redirecting to index.php if successful
    header('Location: index.php');
} else {
    die("Error inserting data: " . mysqli_error($con));
}

// Closing the connection
mysqli_close($con);
?>
