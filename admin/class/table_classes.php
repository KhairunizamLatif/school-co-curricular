<?php

$connect = new PDO("mysql:host=localhost;dbname=school", "root", "admin123");
$query = "SELECT * FROM class";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$total_row = $statement->rowCount();
$output = '
 <table class="table table-striped table-hover">
	<tr>
        <th>Code</th>
        <th>Name</th>
        <th>Teacher</th>
        <th>Teacher Code</th>
        <th>Date</th>
        <th colspan="2" align="center"><em class="fa fa-cog"></em></th>
    </tr>
';
if ($total_row > 0) {
    foreach ($result as $row) {
        $output .= '
		<tr>
			<td>' . $row["code"] . '</td>
			<td>' . $row["name"] . '</td>
			<td>' . $row["tch_name"] . '</td>
			<td>' . $row["tch_code"] . '</td>
			<td>' . $row["date"] . '</td>
			<td>
				<button type="button" name="edit" class="btn btn-primary btn-xs edit" id="' . $row["id"] . '">Edit</button>
			</td>
			<td>
				<button type="button" name="delete_btn" data-id8="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete"><span class="fa fa-trash"></span></button>
			</td>
		</tr>
		';
    }
} else {
    $output .= '
	<tr>
		<td colspan="6" align="center">Data not found</td>
	</tr>
	';
}
$output .= '</table>';
echo $output;
?>