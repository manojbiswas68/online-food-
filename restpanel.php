
<?php
include('admin_panel.php');
include('db.php');



$sql = 'SELECT * 
		FROM rest_reg';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die (mysqli_error($conn));
}
?>
<html>


<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 80px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 50px 7px 50px;
		}
		.data-table caption {
			margin: 17px;

		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>



<body>
	<h1>RESTAURANTS</h1>
	<table class="data-table">
		<caption class="title">RESTAURANTS DETAILS</caption>
		<thead>
			<tr>
				<th>NAME</th>
				<th>EMAIL</th>
				<th>CONTACT NO</th>
				<th>CITY</th>
				<th>ABOUT</th>
				<th>EDIT</th>
				<th>DELETE</th>
				
				
			</tr>
		</thead>
		<tbody>
		<?php
		$total = 0;
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['fname'].'</td>
					<td>'.$row['email'].'</td>
					<td>'.$row['mobile'].'</td>
					<td>'.$row['city'].'</td>
					<td>'.$row['about'].'</td>
					<td> <a href = "update_rest.php?edit='.$row['Rest_id'].'"> Edit</a></td>
					<td> <a href = "delete_rest.php?did='.$row['Rest_id'].'" >Delete</a></td>
				</tr>';
				$total++;
	
		}?>
		</tbody>
		<tfoot>
			<tr>
				<th colspan="6">TOTAL</th>
				<th><?=number_format($total)?></th>
			</tr>
		    </tr>
		       <th colspan="7" style="text-align: center; "> <a href = "add_rest.php">ADD RESTAURANTS</a></th>
		    </tr>
		</tfoot>
	</table>
</body>
</html>
