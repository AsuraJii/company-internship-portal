<?php

session_start();

include "db.php";

if (!isset($_SESSION['company_id'])) {

    header("Location: login.php");
    exit();

}

$company_id = $_SESSION['company_id'];

$sql = "SELECT * FROM internships
        WHERE company_id = '$company_id'
        ORDER BY id DESC";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>My Internships</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h2>My Internships</h2>

    <a href="dashboard.php">Dashboard</a>

    <a href="add_internship.php">Add Internship</a>

    <table>

        <tr>
            <th>Title</th>
            <th>Location</th>
            <th>Duration</th>
            <th>Stipend</th>
            <th>Last Date</th>
            <th>Action</th>
        </tr>

        <?php

        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {

        ?>

        <tr>

            <td><?php echo $row['title']; ?></td>

            <td><?php echo $row['location']; ?></td>

            <td><?php echo $row['duration']; ?></td>

            <td><?php echo $row['stipend']; ?></td>

            <td><?php echo $row['last_date']; ?></td>

            <td>
                <a href="edit_internship.php?id=<?php echo $row['id']; ?>">Edit</a>

                <a href="delete_internship.php?id=<?php echo $row['id']; ?>">Delete</a>
            </td>

        </tr>

        <?php

            }

        } else {

            echo "<tr><td colspan='6'>No internships found</td></tr>";

        }

        ?>

    </table>

</div>

</body>
</html>
