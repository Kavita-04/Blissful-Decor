<?php
require("includes/common.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {

    $item_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    $q= "SELECT count(*) as count  from users_items where user_id='$user_id' AND item_id='$item_id' AND status='Add to Wishlist';";

    $result=mysqli_query($con, $q)or die(mysqli_error($con));
    $row = mysqli_fetch_array($result);
    if ($row['count'] >= 1) {
    	header('Location: ' . $_SERVER['HTTP_REFERER']. "?add=1");
    }
    else{
    	$query = "INSERT INTO users_items(user_id, item_id,status) VALUES('$user_id', '$item_id', 'Add to Wishlist')";
    	mysqli_query($con, $query) or die(mysqli_error($con));
    	header('Location: ' . $_SERVER['HTTP_REFERER']. "?add=1");
	}
    
     
}
?>   