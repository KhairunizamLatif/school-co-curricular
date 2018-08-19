<?php
include "../../db.php";
$sql = "SELECT * FROM student";
$result = mysql_query($sql);
$bilang = 1;
while ($row = mysql_fetch_assoc($result)) {
    ?>
    <tr>
        <td><?php echo $bilang ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['identity_no'] ?></td>
        <td><?php echo $row['class'] ?></td>
        <td align="center">
            <a class="btn btn-default" data-toggle="modal" data-target="#myEdit"><em class="fa fa-pencil"></em></a>
            <a class="btn btn-danger" data-toggle="modal" data-target="#myDelete"><em class="fa fa-trash"></em></a>
        </td>
    </tr>
    <?php
    $bilang++;
} ?>
