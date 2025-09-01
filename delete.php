<?php
$server_name ="localhost";
$db_username = "root";
$db_password ="";
$db_name ="eteeapuserdb2";

$conn = mysqli_connect($server_name, $db_username, $db_password, $db_name);

if(!$conn){
    die("Failed to connect to the server: " . mysqli_connect_error());
}

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $delete = "DELETE FROM eteeapusertbl2 WHERE ID = '$id'";
    if (mysqli_query($conn, $delete)) {
        echo "<script>alert('Record deleted successfully!'); window.location.href='users.php';</script>";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>
