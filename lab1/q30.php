<?php
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $targetDir = "uploads/";
    $fileName = basename($_FILES["profile_image"]["name"]);
    $targetFile = $targetDir . $fileName;
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $fileSize = $_FILES["profile_image"]["size"];
    $allowedTypes = ["png", "jpeg", "jpg"];
    if (!in_array($fileType, $allowedTypes)) {
        $message = "Only PNG and JPEG images are allowed!";
    }
    elseif ($fileSize > 500 * 1024) {
        $message = "File size must be less than 500 KB!";
    }
    else {
        if (move_uploaded_file($_FILES["profile_image"]["tmp_name"], $targetFile)) {
            $message = "Profile image uploaded successfully: $fileName";
        } else {
            $message = "Error uploading the file!";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Upload Profile Image</title>
</head>
<body>
    <h2>Upload Profile Image</h2>
    <form method="post" enctype="multipart/form-data">
        Select Image (PNG/JPEG, &lt; 500KB):<br><br>
        <input type="file" name="profile_image" required><br><br>
        <input type="submit" value="Upload Image">
    </form>
    <?php
    if (!empty($message)) {
        echo "<p>$message</p>";
    }
    ?>
</body>
</html>
