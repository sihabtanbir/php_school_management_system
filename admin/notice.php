<?php
 include 'connect.php';
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if a file was uploaded without errors
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        $target_dir = "uploads/"; // Change this to the desired directory for uploaded files
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if the file is allowed (you can modify this to allow specific file types)
        $allowed_types = array("jpg", "jpeg", "png", "gif", "pdf");
        if (!in_array($file_type, $allowed_types)) {
            echo "Sorry, only JPG, JPEG, PNG, GIF, and PDF files are allowed.";
        } else {
            // Move the uploaded file to the specified directory
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                // File upload success, now store information in the database
                $filename = $_FILES["file"]["name"];
                $filesize = $_FILES["file"]["size"];
                $filetype = $_FILES["file"]["type"];

                // Database connection
                $db_host = "localhost";
                $db_user = "root";
                $db_pass = "";
                $db_name = "fileuploaddownload";

                $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Insert the file information into the database
                $sql = "INSERT INTO files (filename, filesize, filetype) VALUES ('$filename', $filesize, '$filetype')";

                if ($conn->query($sql) === TRUE) {
                    echo "The file " . basename($_FILES["file"]["name"]) . " has been uploaded and the information has been stored in the database.";
                } else {
                    echo "Sorry, there was an error uploading your file and storing information in the database: " . $conn->error;
                }

                $conn->close();
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        echo "No file was uploaded.";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="back-styles.css">
</head>
<body>
  <!-- header  -->
  <?php  include 'header.php'; ?>


  <div class="main-content d-flex">
    <!-- aside  -->
     <?php  include 'aside.php'; ?>
    <main class="w-75">

    <div class="container ">
      <h2 class="text-center p-2">Upload Notice</h2>

    <form action="" class="m-4  w-100 justify-around">
      <table class="table border mx-auto">
        <tr>
          <td><input type="file" name="file"></td>
          <td class="p-2">
            <select name="type" id="" class="px-2">
            <option value="exam">Exam Notice</option>
            <option value="admission">Admission Notice</option>
            <option value="result">Result Notice</option>
            <option value="general">General Notice</option>
          </select></td>
          <td class="p-2">
            <button type="submit" name="notice" class="px-2">upload file</button>
          </td>
        </tr>
      </table>
      </form>

    </div>
    </main>
  </div>
</body>
</html>