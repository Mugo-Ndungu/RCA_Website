<?php
include 'connection.php';
if (isset($_POST['formDataInfo'])) {
    // Get the form data
    $formData = json_decode($_POST['formDataInfo']);
    $message = $formData[0];
    $name = $formData[1];
    $email = $formData[2];
    $subject = $formData[3];
    
    
    // Insert the data into the contact_info table
    $sql = "INSERT INTO `contact_info` (`Message`, `Full_Name`, `Email`, `Message_Subject`)
            VALUES ('$message', '$name', '$email', '$subject')";
    if (mysqli_query($conn, $sql)) {
        // Data insertion was successful
        echo "Success";
    } else {
        // Error occurred during data insertion
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    // Close the database connection
    mysqli_close($conn);
    
}

if (isset($_POST['userAllegationData'])){
    
}

if(isset($_POST['resumeData'])){
    
}