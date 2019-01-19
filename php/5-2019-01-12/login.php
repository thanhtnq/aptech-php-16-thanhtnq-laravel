<?php
require('./dbConnect.php');
$conn = connectDb();
if (isset($_SESSION['user'])) {
    echo "<h2>Welcome ".$_SESSION['user']['fullname']."</h2>";
}
?>

<h3>Users list</h3>
<style>
  table {
    border: 1px solid;
    border-collapse: collapse;
  }
  th,
  td {
    border: 1px solid #000;
    padding: 10px 20px;
  }
</style>
<table>
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Fullname</th>
        <th>Role</th>
    </tr>
    <?php
    $sql = "SELECT users.id, users.username, users.fullname, roles.role FROM users INNER JOIN roles WHERE users.role = roles.id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($user = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
        <td><?php echo $user['id']; ?></td>
        <td><?php echo $user['username']; ?></td>
        <td><?php echo $user['fullname']; ?></td>
        <td><?php echo $user['role']; ?></td>
    </tr>
    <?php
        } 
    } else {
        echo "0 results";
    }
    ?> 
</table>

<?php
echo "<a href=\"logout.php\">Logout</a>";
mysqli_close($conn);
?>