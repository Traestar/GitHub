<?php
require_once("_tmp_header.php");

if(isset($s)){
	echo getMod(9);
} else {


$sql = "SELECT * FROM survey ORDER BY date_submitted DESC";
$rows = fetchAll($sql);

echo $content;

if(!empty($rows)){	
?>

<table cellpadding="0" cellspacing="0" border="0" class="tbl_repeat">
	<tr>
		<th>Full name</th>
		<th class="ta_r">Date submitted</th>
		<th class="col_10 ta_r">View</th>
	</tr>
	<?php foreach($rows as $row){ ?>
	<tr>
		<td><?php echo $row['first_name']." ".$row['last_name']; ?></td>
		<td class="ta_r"><?php echo date("d-m-Y H:i:s", strtotime($row['date_submitted'])); ?></td>
		<td class="ta_r"><a href="?p=<?php echo $p; ?>&amp;s=<?php echo $row['$id']; ?>">View</a></td>
	</tr>
	<?php } ?>
</table>

<?php 
} else {
?>

<p>There are currently no submissions available.</p>

<?php
}
}
require_once("_tmp_footer.php");
?>