
<style>
table {
	font-family: arial, sans-serif;
	border-collapse: collapse;
	width: 80%;
}

td, th {
	border: 1px solid #dddddd;
	text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<?php
include 'dbconnect.php';

$username = $_SESSION['username'];

$sql = "SELECT username, role, status 
            FROM app_user 
            WHERE username = '$username'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    ?>
    
    <h1>User Profile</h1>

    <table>
    <tr>
        <th>Username</th><td><?php echo $row["username"] ?></td>
    </tr>
    <tr>
        <th>Role</th><td><?php echo $row["role"] ?></td>
    </tr>
    <tr>
        <th>Status</th><td><?php echo $row["status"] ?></td>
    </tr>
    </table>
<?php
} else {
    echo "<p>0 results</p>";
}

mysqli_close($conn);
?>
</table>