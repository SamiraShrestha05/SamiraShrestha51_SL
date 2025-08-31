<?php
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $targetDir = "uploads/"; 
    $fileName = basename($_FILES["cv"]["name"]);
    $targetFile = $targetDir . $fileName;
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $fileSize = $_FILES["cv"]["size"];
    $allowedTypes = ["pdf", "doc", "docx"];
    if (!in_array($fileType, $allowedTypes)) {
        $message = "Only PDF, DOC, and DOCX files are allowed!";
    }
    elseif ($fileSize > 1048576) {
        $message = "File size must be less than 1 MB!";
    }
    else {
        if (move_uploaded_file($_FILES["cv"]["tmp_name"], $targetFile)) {
            $message = "File uploaded successfully: $fileName";
        } else {
            $message = "Error uploading the file!";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Upload CV</title>
</head>
<body>
    <h2>Upload Your CV</h2>
    <form method="post" enctype="multipart/form-data">
        Select CV (PDF/DOC/DOCX, &lt; 1MB):<br><br>
        <input type="file" name="cv" required><br><br>
        <input type="submit" value="Upload CV">
    </form>

    <?php
    if (!empty($message)) {
        echo "<p>$message</p>";
    }
    ?>
</body>
</html>
