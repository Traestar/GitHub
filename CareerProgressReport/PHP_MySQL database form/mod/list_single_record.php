<?php
$sql = "SELECT * FROM survey WHERE id = '".sql_escape($s)."'";
$row = fetchOne($sql);

if(!empty($row)){
	
	$int = array();

	$sql = "SELECT * FROM survey_interest WHERE survey = '".sql_escape($s)."'";
	$interests = fetchAll($sql);
	
	if(!empty($interests)){
		foreach($interests as $item){
			$int[] = getInterest($item['interest']);
		}
	}
?>
<h1>Submission Details</h1>
<table cellpadding="0" cellspacing="0" border="0" class="tbl_repeat">
	<tr>
		<th class="col_30">Full name:</th>
		<td><?php echo $row['first_name']." ".$row['last_name']; ?></td>
	</tr>
	<tr>
		<th>Age:</th>
		<td><?php echo $row['age']; ?></td>
	</tr>
	<tr>
		<th>Gender:</th>
		<td><?php echo $row['gender'] == 'm' ? 'Male' : 'Female'; ?></td>
	</tr>
	<tr>
		<th>Country:</th>
		<td><?php echo getCountry($row['country']); ?></td>
	</tr>
	<?php if(!empty($int)){ ?>
		<tr>
		<th>Interests:</th>
		<td><?php echo implode(", ",$int); ?></td>
	</tr>
	<?php } ?>
	<tr>
		<th>Favorite Colour:</th>
		<td><?php echo getColour($row['colour']); ?></td>
	</tr>
		<tr>
		<th>Search Engine:</th>
		<td><?php echo getSearchEngine($row['search_engine']); ?></td>
	</tr>

</table>
	
	<?php
} else {
	echo getMod(1);
}
?>