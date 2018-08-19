<?php
include "../../db.php";
$sql = "SELECT * FROM user WHERE status='teacher'";
$result = mysql_query($sql);
$bilang = 1;
while ($row = mysql_fetch_assoc($result)) {
    ?>
    <tr>
        <td><?php echo $bilang ?></td>
        <td><?php echo $row['code'] ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['username'] ?></td>
        <td><?php echo $row['classes'] ?></td>
        <td><?php echo $row['status'] ?></td>
    </tr>
    <?php
    $bilang++;
} ?>
