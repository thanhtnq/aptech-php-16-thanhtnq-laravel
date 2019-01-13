<?php
require('./dbConnect.php');
$conn = connectDb();
$nameErr = $passErr = "";
if (isset($_POST['submit'])) {
    if (!$_POST['username']) {
        $nameErr = "Username field is required";
    } else if (!$_POST['password']) {
        $passErr = "Password field is required";
    } else {
        $sql = "SELECT * FROM users WHERE username = '{$_POST['username']}' AND password = '{$_POST['password']}'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($result);
        if ($user) {
            $_SESSION['user'] = $user;
            header("LOCATION: login.php");
        } else {
            echo "Username or password is incorrect";
        }
    }
}
echo "<a href=\"./\">BACK</a>";
?>
<h1>Login</h1>
<form action="#" method="post">
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username"/>
        <span style="color:red;"><?php echo $nameErr; ?></span>
    </div>
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password"/>
        <span style="color:red;"><?php echo $passErr; ?></span>
    </div>
    <div>
        <input type="submit" name="submit"/>
    </div>
</form>

<?php
mysqli_close($conn);
?>

