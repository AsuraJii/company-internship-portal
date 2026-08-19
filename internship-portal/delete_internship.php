<?php

session_start();

include "db.php";

if (!isset($_SESSION['company_id'])) {

    header("Location: login.php");
    exit();

}

$id = $_GET['id'];

$company_id = $_SESSION['company_id'];

$sql = "DELETE FROM internships
        WHERE id = '$id'
        AND company_id = '$company_id'";

mysqli_query($conn, $sql);

header("Location: view_internships.php");

exit();

?>
