<?php
include 'connection.php';
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the form data

    // Retrieve data from the POST request
    $situation_reported = $_POST["mysituationselect"];
    $full_name = $_POST["name"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone"];
    $organization_name = $_POST["orgname"];
    $rca_id = $_POST["rcaId"];
    $country = $_POST["countries"];
    $organization_product = $_POST["orgproduct"];
    $role_in_organization = $_POST["role"];
    $allegation_description = $_POST["allegation"];
    $confidentiality_agreement = 1;

    // Handle file upload if needed (e.g., saving the uploaded file)
    if (isset($_FILES["filename"])) {
        $upload_dir = "../allegations/"; // Specify the directory where you want to save the files
        $uploaded_file = $upload_dir . $_FILES["filename"]["name"];

        // Move the uploaded file to the desired location
        if (move_uploaded_file($_FILES["filename"]["tmp_name"], $uploaded_file)) {
            // File uploaded successfully
            $evidence_filename = $_FILES["filename"]["name"];
        } else {
            // Error occurred during file upload
            $evidence_filename = "No file uploaded";
        }
    } else {
        $evidence_filename = "No file uploaded";
    }

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute an SQL INSERT statement
    $sqlAllegationsQuery = "INSERT INTO allegations 
    (situation_reported, full_name, email, phone_number, organization_name, rca_id, country, organization_product, role_in_organization, allegation_description, evidence_filename, confidentiality_agreement) 
    VALUES 
    (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Create a prepared statement
    $stmt = $conn->prepare($sqlAllegationsQuery);


    // Bind parameters to the prepared statement
    $stmt->bind_param("sssssssssssi",$situation_reported,$full_name,$email,$phone_number,$organization_name,$rca_id,$country,$organization_product,$role_in_organization,$allegation_description,$evidence_filename,$confidentiality_agreement);

    if ($stmt->execute()) {
        // Data insertion was successful
        echo "Success";
    } else {
        // Error occurred during data insertion
        echo "Error: " . $stmt->error;
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
} else {
    // If the form was not submitted via POST, you can redirect or handle the situation accordingly
    echo "Form not submitted.";
}
