<?php
    include('config/db_connect.php');

	// check GET request id param
	if(isset($_GET['id'])){
		
		// escape sql chars
		$id = mysqli_real_escape_string($conn, $_GET['id']);

		// make sql
		$sql = "DELETE
                FROM pizzas 
                WHERE ID = $id";

        if( mysqli_query($conn, $sql) ) {
            header('Location: index.php');
        } else {
            echo 'QUERY ERROR ' . mysqli_error();
        }
	}
?>