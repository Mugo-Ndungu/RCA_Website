<?php
include 'connection.php';
if (isset($_POST['formDataInfo'])) {
    // Get the form data
    $formData = json_decode($_POST['formDataInfo']);
    $message = $formData[0];
    $name = $formData[1];
    $email = $formData[2];
    $subject = $formData[3];


    // Create a prepared statement
    $sql = "INSERT INTO `contact_info` (`Message`, `Full_Name`, `Email`, `Message_Subject`) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("ssss", $message, $name, $email, $subject);

    // Execute the prepared statement
    if ($stmt->execute()) {
        // Data insertion was successful
        echo "Success";
    } else {
        // Error occurred during data insertion
        echo "Error: " . $stmt->error;
    }

    // Close the prepared statement and the database connection
    $stmt->close();
    $conn->close();
}

// <?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if (isset($_POST["formType"])) {
//         $formType = $_POST["formType"];
//         if ($formType === "contactForm") {
//             // Process the contact form data
//             $fullname = $_POST["name"];
//             $email = $_POST["email"];
//             $phone = $_POST["phone"];
//             // ... perform additional processing as needed ...

//             // Example response (you can customize this)
//             echo "Contact form submitted successfully.";
//         } elseif ($formType === "allegationForm") {
//             // Process the allegation form data
//             $orgname = $_POST["orgname"];
//             $rcaId = $_POST["rcaId"];
//             // ... perform additional processing as needed ...

//             // Example response (you can customize this)
//             echo "Allegation form submitted successfully.";
//         } else {
//             echo "Invalid form type.";
//         }
//     } else {
//         echo "Form type not specified.";
//     }
// } else {
//     echo "Invalid request method.";
// }



if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fullname = $_POST["fullname"];
    $phoneNo = $_POST["phoneNo"];
    $emailAddress = $_POST["emailAddress"];

    if (isset($_FILES["resumeFile"])) {
        $file_name = $_FILES["resumeFile"]["name"];
        $file_tmp = $_FILES["resumeFile"]["tmp_name"];

        // Specify the directory where you want to store the uploaded files
        $upload_directory = "../resume/"; // Replace with your desired directory path

        if (move_uploaded_file($file_tmp, $upload_directory . $file_name)) {
            // File uploaded successfully

            $insertresumequery = 'INSERT INTO `resume_info`
            (`fullname`, `phoneNo`, `emailAddress`, `resumeName`)
            VALUES (?, ?, ?, ?)';

            $stmt = mysqli_prepare($conn, $insertresumequery);
            mysqli_stmt_bind_param($stmt, "ssss", $fullname, $phoneNo, $emailAddress, $file_name);

            if (mysqli_stmt_execute($stmt)) {
                // Data insertion was successful
                echo "Success";
            } else {
                // Error occurred during data insertion
                echo "Error: " . mysqli_error($conn);
            }

            mysqli_stmt_close($stmt);
            echo "File uploaded and data saved successfully.";
        } else {
            echo "Error: File upload failed.";
        }
    } else {
        echo "Error: No file uploaded.";
    }
} else {
    echo "Error: Invalid request.";
}
