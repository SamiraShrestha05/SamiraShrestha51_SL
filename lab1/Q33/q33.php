<?php
include 'db.php';

$message = "";


if (isset($_POST['course_submit'])) {
    $course_id = $_POST['course_id'] ?? null;
    $title = $_POST['title'];
    $duration = $_POST['duration'];
    $status = $_POST['status'];

    if ($course_id) {
        
        $stmt = $conn->prepare("UPDATE courses SET title=?, duration=?, status=? WHERE id=?");
        $stmt->bind_param("sssi", $title, $duration, $status, $course_id);
        $stmt->execute();
        $message = "Course updated successfully!";
    } else {
       
        $stmt = $conn->prepare("INSERT INTO courses (title, duration, status) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $title, $duration, $status);
        $stmt->execute();
        $message = "Course added successfully!";
    }
}


if (isset($_GET['delete_course'])) {
    $id = $_GET['delete_course'];
    $conn->query("DELETE FROM courses WHERE id=$id");
    $message = "Course deleted successfully!";
}


$courses = $conn->query("SELECT * FROM courses");


if (isset($_POST['student_submit'])) {
    $student_id = $_POST['student_id'] ?? null;
    $name = $_POST['name'];
    $course_id = $_POST['course_id'];
    $fee = $_POST['fee'];
    $rollno = $_POST['rollno'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $status = $_POST['status'];

    if ($student_id) {
       
        $stmt = $conn->prepare("UPDATE students SET name=?, course_id=?, fee=?, rollno=?, phone=?, address=?, dob=?, status=? WHERE id=?");
        $stmt->bind_param("sidsssssi", $name, $course_id, $fee, $rollno, $phone, $address, $dob, $status, $student_id);
        $stmt->execute();
        $message = "Student updated successfully!";
    } else {
      
        $stmt = $conn->prepare("INSERT INTO students (name, course_id, fee, rollno, phone, address, dob, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sidsssss", $name, $course_id, $fee, $rollno, $phone, $address, $dob, $status);
        $stmt->execute();
        $message = "Student added successfully!";
    }
}


if (isset($_GET['delete_student'])) {
    $id = $_GET['delete_student'];
    $conn->query("DELETE FROM students WHERE id=$id");
    $message = "Student deleted successfully!";
}


$students = $conn->query("SELECT s.*, c.title as course_title FROM students s LEFT JOIN courses c ON s.course_id=c.id");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Courses & Students CRUD</title>
    <style>
        table { border-collapse: collapse; width: 80%; margin-bottom: 20px; }
        th, td { border:1px solid #000; padding: 8px; text-align: center; }
        th { background: #f2f2f2; }
        form { margin-bottom: 20px; }
    </style>
</head>
<body>
<h2>Courses & Students Management</h2>
<?php if($message) echo "<p style='color:green;'>$message</p>"; ?>


<h3>Add / Update Course</h3>
<form method="post">
    <input type="hidden" name="course_id" value="<?php echo $_GET['edit_course'] ?? ''; ?>">
    Title:<br><input type="text" name="title" required><br>
    Duration:<br><input type="text" name="duration"><br>
    Status:<br>
    <select name="status">
        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
    </select><br><br>
    <input type="submit" name="course_submit" value="Save Course">
</form>

<h3>Courses List</h3>
<table>
<tr>
    <th>ID</th><th>Title</th><th>Duration</th><th>Status</th><th>Created At</th><th>Updated At</th><th>Actions</th>
</tr>
<?php while($course = $courses->fetch_assoc()): ?>
<tr>
    <td><?php echo $course['id']; ?></td>
    <td><?php echo $course['title']; ?></td>
    <td><?php echo $course['duration']; ?></td>
    <td><?php echo $course['status']; ?></td>
    <td><?php echo $course['created_at']; ?></td>
    <td><?php echo $course['updated_at']; ?></td>
    <td>
        <a href="?edit_course=<?php echo $course['id']; ?>">Edit</a> |
        <a href="?delete_course=<?php echo $course['id']; ?>" onclick="return confirm('Delete this course?');">Delete</a>
    </td>
</tr>
<?php endwhile; ?>
</table>


<h3>Add / Update Student</h3>
<form method="post">
    <input type="hidden" name="student_id" value="<?php echo $_GET['edit_student'] ?? ''; ?>">
    Name:<br><input type="text" name="name" required><br>
    Course:<br>
    <select name="course_id" required>
        <option value="">Select Course</option>
        <?php 
        $course_list = $conn->query("SELECT * FROM courses");
        while($c = $course_list->fetch_assoc()) {
            echo "<option value='{$c['id']}'>{$c['title']}</option>";
        }
        ?>
    </select><br>
    Fee:<br><input type="number" name="fee" step="0.01"><br>
    Roll No:<br><input type="text" name="rollno"><br>
    Phone:<br><input type="text" name="phone"><br>
    Address:<br><input type="text" name="address"><br>
    DOB:<br><input type="date" name="dob"><br>
    Status:<br>
    <select name="status">
        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
    </select><br><br>
    <input type="submit" name="student_submit" value="Save Student">
</form>


<h3>Students List</h3>
<table>
<tr>
    <th>ID</th><th>Name</th><th>Course</th><th>Fee</th><th>Roll No</th><th>Phone</th><th>Address</th><th>DOB</th><th>Status</th><th>Created At</th><th>Updated At</th><th>Actions</th>
</tr>
<?php while($s = $students->fetch_assoc()): ?>
<tr>
    <td><?php echo $s['id']; ?></td>
    <td><?php echo $s['name']; ?></td>
    <td><?php echo $s['course_title']; ?></td>
    <td><?php echo $s['fee']; ?></td>
    <td><?php echo $s['rollno']; ?></td>
    <td><?php echo $s['phone']; ?></td>
    <td><?php echo $s['address']; ?></td>
    <td><?php echo $s['dob']; ?></td>
    <td><?php echo $s['status']; ?></td>
    <td><?php echo $s['created_at']; ?></td>
    <td><?php echo $s['updated_at']; ?></td>
    <td>
        <a href="?edit_student=<?php echo $s['id']; ?>">Edit</a> |
        <a href="?delete_student=<?php echo $s['id']; ?>" onclick="return confirm('Delete this student?');">Delete</a>
    </td>
</tr>
<?php endwhile; ?>
</table>
</body>
</html>
