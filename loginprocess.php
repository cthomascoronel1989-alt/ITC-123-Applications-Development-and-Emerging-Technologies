
<?php

$server_name ="localhost";
$db_username = "root";
$db_password ="";

$db_name ="eteeapuserdb2"; //database name
$conn = mysqli_connect($server_name, $db_username, $db_password, $db_name);
if(!$conn){
die("failed to connect to the server". mysqli_connect_error());
}else{
//echo "connected successfully";

}

if(isset($_POST['submit'])){
 $username = $_POST['username'];
 $password = $_POST['password'];
 $query = "SELECT * FROM eteeapusertbl2 WHERE username='$username' AND password='$password';";
 $result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {

session_start();

$resultSet = mysqli_fetch_assoc($result);
$_SESSION["username"] = $resultSet["Username"];
$_SESSION["password"] = $resultSet["Password"];
mysqli_close($conn);

?>

<script language="Javascript">
alert("LOG-IN SUCCESSFUL!!!");
window.location.href = "viewrecords.html";

</script>

<?php

exit();
} else {
?>
<script language="Javascript">
alert("Invalid Username or Password!");
window.location.href = "login.php";

</script>
<?php
}
}
else{
die("there is some error");
}
mysqli_close($conn);
?>



