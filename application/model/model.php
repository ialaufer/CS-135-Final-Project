<?php
	include('dbconn.php');

class Model{

	public function __construct()  { 
echo "model";
	}
//add_item
//add_customer
//add_provider
//add_requestOrder
//get_category --> get name and imageaddress
//send_category
//handle_

	public function handle_form( $id ){
		echo "**********CATEGORY************** <br><br>";
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
			$categoryid  = $row['year'];
				   
			echo "<li>Title: $title, Year: $year, Director: $director </li>\n";
		}
		echo "</ul>\n";
		
		disconnect_from_db( $dbc, $result );
	}

	public function send_category( $id ){

	}



	public function display_category( $menuname ){
		echo '<form method = "get">';
		create_select( $menuname );
		echo '<input type="submit" name="submitted" value="Go!"></form>';
	}

	public function get_category( $menuname ){
		echo "<select name= '$menuname'>\n";
		$dbc    = connect_to_db( "serviceitems" );	
		$query  = "SELECT * FROM CATEGORY";
		$result = perform_query( $dbc, $query );
		
		while ($row = mysqli_fetch_array( $result, MYSQLI_ASSOC )){
		
			$categoryname = $row['name'];
			$categoryid  = $row['id'];
			$imagepath = $row['imagepath'];
		   
		   	if ( isset( $_GET[$menuname] ) && ( $_GET[$menuname]==$categoryid ) )
				echo "<option value = '$categoryid' selected> $categoryname  </option>\n"; 
			//how to do on-click 
			else
				echo "<option value = '$categoryid'> $categoryname  </option>\n";
		}
			
		echo "</select>";
		disconnect_from_db( $dbc, $result );

	}
		public function get_categories(){
		$dbc    = connect_to_db( "serviceitems" );	
		$query  = "SELECT * FROM CATEGORY";
		$result = perform_query( $dbc, $query );
		$arr = Array();
		while ($row = mysqli_fetch_array( $result, MYSQLI_ASSOC )){
		
			$categoryname = $row['name'];
			$categoryid  = $row['id'];
			$imagepath = $row['imagepath'];
		   	$arr[$categoryname] = $imagepath
		}
			
		echo "</select>";
		disconnect_from_db( $dbc, $result );
		return $arr;
	}

		public function get_services($imagecategoryID){
		$dbc    = connect_to_db( "serviceitems" );	
		$query  = "SELECT * FROM ServiceItem WHERE catagoryID == $imagecategoryID";
		$result = perform_query( $dbc, $query );
		
		while ($row = mysqli_fetch_array( $result, MYSQLI_ASSOC )){
		
			$categoryname = $row['name'];
			$categoryid  = $row['id'];
			$imagepath = $row['imagepath'];
		   
				echo "<option value = '$categoryid' selected> $categoryname  </option>\n"; 
		}
			
		echo "</select>";
		disconnect_from_db( $dbc, $result );
	}
}

?>
