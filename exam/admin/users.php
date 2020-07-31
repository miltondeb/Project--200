<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
	include_once ($filepath.'/../classes/User.php');
	$usr = new User();
?>

<div class="main">
	<div class="manageuser">
		<table class="tblone">
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Username</th>
				<th>Email</th>
				<th>Action</th>
			</tr>
<?php
	
	$userData = $usr->getAllUser();
	if($userData){
		$i = 0;
		while ($result = $userData->fetch_assoc()){
			$i++;

	
?>


			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $result['name']; ?></td>
				<td><?php echo $result['username']; ?></td>
				<td><?php echo $result['email']; ?></td>
				
				<td>

					<a onclick="return confirm('Are You Sure to Disable')" href="?dis=<?php echo $result['userid'];  ?>">Disable</a> ||
					<a onclick="return confirm('Are You Sure to Enable')" href="?ena=<?php echo $result['userid'];  ?>">Enable</a> ||
					<a onclick="return confirm('Are You Sure to Remove')" href="?del=<?php echo $result['userid'];  ?>">Remove</a>
				</td>
			</tr>

<?php } } ?>

		</table>
	</div>	
</div>
<?php include 'inc/footer.php'; ?>