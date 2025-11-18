<?php
$host = "localhost";
$user = "root";
$password = "NewPass123";
$dbname = "q32db";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = "";
$image = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id'] ?? null;
    $name = trim($_POST['name']);
    $rank = trim($_POST['rank']);
    $status = $_POST['status'];
    $created_by = trim($_POST['created_by']);
    $updated_by = trim($_POST['updated_by']);

   
    if (empty($name)) {
        $message = "Name is required!";
    }
     else {

        
        if (!empty($_FILES['image']['name'])) {
            $targetDir = "uploads/";
            $imageName = time() . "_" . basename($_FILES["image"]["name"]);
            $targetFile = $targetDir . $imageName;

            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                $image = $imageName;
            }
        }

        
        if ($id) {
            if ($image) {
                $sql = "UPDATE users SET name=?, rank=?, status=?, updated_by=?, image=?, updated_at=NOW() WHERE id=?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssssi", $name, $rank, $status, $updated_by, $image, $id);
            } else {
                $sql = "UPDATE users SET name=?, rank=?, status=?, updated_by=?, updated_at=NOW() WHERE id=?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssssi", $name, $rank, $status, $updated_by, $id);
            }

            if ($stmt->execute()) $message = "Record updated successfully.";

        } 
      
        else {
           
            $sql = "INSERT INTO users (name, rank, status, image, created_by, updated_by)
                    VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssssss", $name, $rank, $status, $image, $created_by, $updated_by);

            if ($stmt->execute()) $message = "Record added successfully.";

        }
    }
}


if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    $conn->query("DELETE FROM users WHERE id=$delete_id");
    $message = "Record deleted successfully.";
}


$result = $conn->query("SELECT * FROM users ORDER BY id DESC");

$editData = null;
if (isset($_GET['edit'])) {
    $edit_id = $_GET['edit'];
    $res = $conn->query("SELECT * FROM users WHERE id=$edit_id");
    $editData = $res->fetch_assoc();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User CRUD</title>
</head>
<body>

<h2>User Management</h2>
<?php if ($message) echo "<p style='color:green;'>$message</p>"; ?>

<form method="post" enctype="multipart/form-data">

    <input type="hidden" name="id" value="<?php echo $editData['id'] ?? ''; ?>">

    Name:<br>
    <input type="text" name="name" value="<?php echo $editData['name'] ?? ''; ?>" required><br><br>

    Rank:<br>
    <input type="text" name="rank" value="<?php echo $editData['rank'] ?? ''; ?>"><br><br>

    Status:<br>
    <select name="status">
        <option value="active" <?php if (($editData['status'] ?? '') == 'active') echo 'selected'; ?>>Active</option>
        <option value="inactive" <?php if (($editData['status'] ?? '') == 'inactive') echo 'selected'; ?>>Inactive</option>
    </select><br><br>

    Created By:<br>
    <input type="text" name="created_by" value="<?php echo $editData['created_by'] ?? ''; ?>"><br><br>

    Updated By:<br>
    <input type="text" name="updated_by" value="<?php echo $editData['updated_by'] ?? ''; ?>"><br><br>

    Image:<br>
    <input type="file" name="image"><br>
    <?php
    if (!empty($editData['image'])) {
        echo "<img src='uploads/" . $editData['image'] . "' width='60'>";
    }
    ?>
    <br><br>

    <input type="submit" value="<?php echo $editData ? 'Update' : 'Add'; ?>">
</form>

<h3>List of Users</h3>

<table border="1" cellpadding="5">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Rank</th>
    <th>Status</th>
    <th>Image</th>
    <th>Created By</th>
    <th>Updated By</th>
    <th>Created At</th>
    <th>Updated At</th>
    <th>Action</th>
</tr>

<?php while ($row = $result->fetch_assoc()): ?>
<tr>
    <td><?= $row['id']; ?></td>
    <td><?= $row['name']; ?></td>
    <td><?= $row['rank']; ?></td>
    <td><?= $row['status']; ?></td>
    <td><?php if ($row['image']) echo "<img src='uploads/".$row['image']."' width='60'>"; ?></td>
    <td><?= $row['created_by']; ?></td>
    <td><?= $row['updated_by']; ?></td>
    <td><?= $row['created_at']; ?></td>
    <td><?= $row['updated_at']; ?></td>

    <td>
        <a href="?edit=<?= $row['id']; ?>">Edit</a> |
        <a href="?delete=<?= $row['id']; ?>" onclick="return confirm('Delete this record?')">Delete</a>
    </td>
</tr>
<?php endwhile; ?>

</table>

</body>
</html>



