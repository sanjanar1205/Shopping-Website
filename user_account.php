<html>
    <head><title>Insert Page</title></head>
<body>
    <?php
$conn = mysqli_connect("localhost", "root", "", "project");
if($conn == false){
    die("ERROR: Could not connect. ". mysqli_error());
}
$Username = $_REQUEST['username'];
$Email = $_REQUEST['email'];
$Password = $_REQUEST['password'];

// $sql = "CREATE TABLE user (Uname varchar(100), Uemail varchar(50), Pass varchar(50))";
// $result = mysqli_query($conn, $sql);
// if (!$result) {
//     die("Table creation failed: " . mysqli_error($conn));
// } 
// else {
//     echo "Table created successfully<br>";
// }

$sql = "INSERT INTO user VALUES ('$username','$email','$password')";
$result = mysqli_query($conn, $sql);
if (!$result) {
    die("Values insertion failed: " . mysqli_error($conn));
} else {
    header("location:website2.html");
}
mysqli_close($conn);
?>
</body>
</html>