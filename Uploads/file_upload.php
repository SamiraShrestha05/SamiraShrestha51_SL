<pre>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $err = [];
    if ($_FILES['profile']['error'] == 0) {
        if ($_FILES['profile']['size'] < 1000000) {
            $file_formats = ['image/png','image/jpeg','image/gif'];
            if (in_array($_FILES['profile']['type'],$file_formats)) {
                if(move_uploaded_file($_FILES['profile']['tmp_name'],'uploads/' . $_FILES['profile']['name'])){
                    echo "File upload success";
                } else {
                    $err['profile'] = 'File upload error';
                }
            } else {
                $err['profile'] = 'Please upload valid file format(jpeg,png,gif).';
            }
        } else {
            $err['profile'] = 'Please select file below 100kb.';
        }
    } else {
        $err['profile'] = 'Please select file';
    }
    if ($_FILES['cv']['error'] == 0) {
        if ($_FILES['cv']['size'] < 1000000) {
            $file_formats = ['application/pdf'];
            if (in_array($_FILES['cv']['type'],$file_formats)) {
                if(move_uploaded_file($_FILES['cv']['tmp_name'],'uploads/' . $_FILES['cv']['name'])){
                    echo "File upload success";
                } else {
                    $err['cv'] = 'File upload error';
                }
            } else {
                $err['cv'] = 'Please upload valid file format(jpeg,png,gif).';
            }
        } else {
            $err['cv'] = 'Please select file below 100kb.';
        }
    } else {
        $err['cv'] = 'Please select file';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <h1>File Upload</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Profile Picture</label>
        <input type="file" name="profile" />
        <?php echo isset($err['profile'])?$err['profile']:''; ?>
        <br />
        <label for="">CV </label>
        <input type="file" name="cv" />
        <?php echo isset($err['cv'])?$err['cv']:''; ?>
        <br />
        <input type="submit" name="submit" value="Upload File" />
    </form>
</body>
</html>