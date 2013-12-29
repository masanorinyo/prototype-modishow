<?php
	require_once("../includes/initialize.php");

	$page = $_POST['OFFSET'];

	//2. records per page ($per_page)
	$per_page = 3;
	
	//3. Total record count($total_count)
	$total_count = Photograph::count_all();


	$pagination = new Pagination($page,$per_page,$total_count);
	

	$sql = "SELECT * FROM photographs ";
	$sql .= "Limit {$per_page} ";
	$sql .= "OFFSET {$pagination->offset()} ";
	$photo_array = Photograph::find_by_sql($sql);
?>

<?php foreach($photo_array as $photo): ?>
	<a href="largesize_photo.php?id=<?php echo $photo->id; ?>">
		<img src="<?php echo $photo->image_path(); ?>" width="400"/>
		<div><?php echo $photo->caption; ?></div>
	</a>
<?php endforeach; ?>


