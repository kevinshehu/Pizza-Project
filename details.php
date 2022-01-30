<?php 

	include('config/db_connect.php');

	// check GET request id param
	if(isset($_GET['id'])){
		
		// escape sql chars
		$id = mysqli_real_escape_string($conn, $_GET['id']);

		// make sql
		$sql = "SELECT * 
                FROM pizzas 
                WHERE ID = $id";

		// get the query result
		$result = mysqli_query($conn, $sql);

		// fetch result in array format
		$pizza = mysqli_fetch_assoc($result);

		mysqli_free_result($result);
		mysqli_close($conn);
	}

?>

<!DOCTYPE html>
<html>

	<?php include('templates/header.php'); ?>

	<div class="container center">
		<?php if($pizza): ?>
			<h4><?php echo $pizza['Title']; ?></h4>

			<p>Created by <?php echo $pizza['Email']; ?></p>

			<p><?php echo date($pizza['Created_At']); ?></p>

			<h5>Ingredients:</h5>
			<p><?php echo $pizza['Ingredients']; ?></p>

		<?php else: ?>
			<h5>No such pizza exists.</h5>
		<?php endif ?>
	</div>

	<?php include('templates/footer.php'); ?>

</html>