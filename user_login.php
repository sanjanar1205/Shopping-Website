<html>
    <head><title>Insert Page</title></head>
<body>
    <?php
$conn = mysqli_connect("localhost", "root", "", "project");
if($conn == false){
    die("ERROR: Could not connect. ". mysqli_error());
}


$email = $_POST['email']; // Assuming the form uses POST method
$username = $_POST['username'];
$password = $_POST['password'];

// Prepare SQL statement to fetch user details
$query = mysqli_prepare($conn, "SELECT Uemail, Uname, Pass FROM user WHERE Uemail = ? AND Uname = ? AND Pass = ?");
mysqli_stmt_bind_param($query, "sss", $email, $username, $password);
mysqli_stmt_execute($query);
mysqli_stmt_bind_result($query, $resultEmail, $resultUsername, $resultPassword);
mysqli_stmt_fetch($query);
mysqli_stmt_close($query);

// Check if a matching record was found
if ($email === $resultEmail && $username === $resultUsername && $password === $resultPassword) {
 header("location:website2.html");
} 
else {
header("location:website5.html");
}

mysqli_close($conn);
?>
</body>
</html>