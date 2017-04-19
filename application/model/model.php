
<?php
	include('dbconn.php');
?>

<!DOCTYPE html>
	<head>
		<title>Creating a drop down</title>
	</head>

	<body>
		<pre> <?php print_r($_GET);?> </pre>

		<?php

		if ( isset( $_GET['submitted'] ) )
			handle_form( $_GET['categories'] );
		
		display_category( "categories" );

		?>
	</body>
</html>



<?php
//add_item
//add_customer
//add_provider
//add_requestOrder
//get_category --> get name and imageaddress
//send_category
//handle_

function handle_form( $id ){
	echo "**********CATEOGRY************** <br><br>";
	$dbc    = connect_to_db( "serviceitems" );	
	$query  = "SELECT * FROM CATEGORY WHERE id = $id ";
	$result = perform_query( $dbc, $query );

	#$row = mysqli_fetch_array( $result, MYSQLI_ASSOC );
	
	#echo "********** <br>";
	#print_r($row);
	#echo "********** <br>";
	echo "<ul>\n";
	while ( $row = mysqli_fetch_array( $result, MYSQLI_ASSOC ) ) {
			
		$categoryname = $row['id'];
		$cateogryid  = $row['year'];
			   
		echo "<li>Title: $title, Year: $year, Director: $director </li>\n";
	}
	echo "</ul>\n";
	
	disconnect_from_db( $dbc, $result );
}

function send_category( $id ){

}



function display_category( $menuname ){
	echo '<form method = "get">';
	create_select( $menuname );
	echo '<input type="submit" name="submitted" value="Go!"></form>';
}

function get_category( $menuname ){
	echo "<select name= '$menuname'>\n";
	$dbc    = connect_to_db( "serviceitems" );	
	$query  = "SELECT * FROM CATEGORY";
	$result = perform_query( $dbc, $query );
	
	while ($row = mysqli_fetch_array( $result, MYSQLI_ASSOC )){
	
		$categoryname = $row['name'];
		$cateogryid  = $row['id'];
		$imagepath = $row['imagepath'];
	   
	   	if ( isset( $_GET[$menuname] ) && ( $_GET[$menuname]==$cateogryid ) )
			echo "<option value = '$cateogryid' selected> $categoryname  </option>\n"; 
		//how to do on-click 
		else
			echo "<option value = '$cateogryid'> $categoryname  </option>\n";
	}
		
	echo "</select>";
	disconnect_from_db( $dbc, $result );
}

