<?php
$host = "localhost";
$user = "Jack2";
$password = "2304";
$database ="ronskitchen";

$conn = mysqli_connect($host, $user, $password, $database);

$results = $conn->query("select * from comments");

?>
<?php while ($data = $results->fetch_assoc()):?>
<tr>
    <td><?php echo $data['Id']; ?></td>
    <td><?php echo $data['Name']; ?></td>
    <td><?php echo $data['Phone']; ?></td>
    <td><?php echo $data['Comments']; ?></td>
</tr>
    <?php endwhile; ?>

