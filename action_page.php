<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $course = $_POST['course'];
    $gender = $_POST['gender'];
    $phone = $_POST['country_code'] . $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    // Save the data to a database or perform other processing
    // For demonstration, we'll just print it
    echo "Registration successful!";
    echo "Firstname: $firstname, Lastname: $lastname, Course: $course, Email: $email";
    // Always ensure to hash passwords before storing!
}
?>
