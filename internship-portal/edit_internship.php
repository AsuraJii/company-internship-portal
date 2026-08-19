<?php

session_start();

include "db.php";

if (!isset($_SESSION['company_id'])) {

    header("Location: login.php");
    exit();

}

$id = $_GET['id'];

$company_id = $_SESSION['company_id'];

$sql = "SELECT * FROM internships
        WHERE id = '$id'
        AND company_id = '$company_id'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) != 1) {

    die("Internship not found");

}

$internship = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {

    $title = $_POST['title'];
    $location = $_POST['location'];
    $duration = $_POST['duration'];
    $stipend = $_POST['stipend'];
    $last_date = $_POST['last_date'];

    $sql = "UPDATE internships SET
            title = '$title',
            location = '$location',
            duration = '$duration',
            stipend = '$stipend',
            last_date = '$last_date'
            WHERE id = '$id'
            AND company_id = '$company_id'";

    if (mysqli_query($conn, $sql)) {

        header("Location: view_internships.php");
        exit();

    }

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Internship</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-container">

    <h2>Edit Internship</h2>

    <form method="POST">

        <label>Internship Title</label>

        <input type="text"
               name="title"
               value="<?php echo $internship['title']; ?>"
               required>

        <label>Location</label>

        <input type="text"
               name="location"
               value="<?php echo $internship['location']; ?>"
               required>

        <label>Duration</label>

        <input type="text"
               name="duration"
               value="<?php echo $internship['duration']; ?>"
               required>

        <label>Stipend</label>

        <input type="text"
               name="stipend"
               value="<?php echo $internship['stipend']; ?>"
               required>

        <label>Last Date to Apply</label>

        <input type="date"
               name="last_date"
               value="<?php echo $internship['last_date']; ?>"
               required>

        <button type="submit" name="update">
            Update Internship
        </button>

    </form>

    <a href="view_internships.php">Back</a>

</div>

</body>
</html>
