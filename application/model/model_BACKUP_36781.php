<?php
	include('application/dbconn.php');

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
/*
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
	*/
		public function get_categories() {
			$dbc    = connect_to_db( "serviceitems" );	
			$query  = "SELECT * FROM CATEGORY";
			$result = perform_query( $dbc, $query );
			$arr = Array();
			while ($row = mysqli_fetch_array( $result, MYSQLI_ASSOC )){
			
				$categoryname = $row['name'];
				$categoryid  = $row['id'];
				$imagepath = $row['imagepath'];
			   	$arr[$categoryname] = $imagepath;

		}
			
		echo "</select>";
		disconnect_from_db( $dbc, $result );
		return $arr;
	}
		public function get_ProviderEmail(){
			$dbc    = connect_to_db( "serviceitems" );	
			$query  = "SELECT * FROM SERVICEITEM";
			$result = perform_query( $dbc, $query );
			$arr = Array();
			while ($row = mysqli_fetch_array( $result, MYSQLI_ASSOC )){
				$serviceItemName = $row['serviceItemName'];
				$providerEmail = $row['providerEmail'];
				$arr[$serviceItemName] = $providerEmail;
			return $arr;
		}
		}


		public function get_selectedCategory() {
			$selectedCategory=$_POST["categoryname"];
			disconnect_from_db( $dbc, $result );
			return $selectedCategory;
	}
<<<<<<< HEAD



		public function get_serviceList($cid) {
			$dbc    = connect_to_db( "serviceitems" );	
			$query  = "SELECT * FROM SERVICEITEM WHERE categoryId = '$cid'";
			$result = perform_query( $dbc, $query );
			$arr = Array();
			while ($row = mysqli_fetch_array( $result, MYSQLI_ASSOC )){
			
				$providerName = $row['providerName'];
				$providerAddress = $row['providerAddress'];
				$providerEmail = $row['providerEmail'];
				$providerPhone = $row['providerPhone'];
				
				$serviceItemName = $row['serviceItemName']; 
				$serviceDescription = $row['serviceDescription'];
				$categoryId = $row['categoryId'];
				$servicePrice= $row['servicePrice'];

				$dispaly = "<div class='list items'>
				<h3>$servicename</h3>, 
				<h4>Provider information:</h4>
				<p class='provider information'>
					$providerName<br>
					$providerAddress<br>
					providerEmail<br>
					ProviderPhone<br>
				<p> 
				<p class='description'>$serviceDescription</p>
				<p class='price'>$servicePrice</p>
				</div>\n";
		}
			
		
		disconnect_from_db( $dbc, $result );
		return $dispaly;
	}

	public function get_id($cname){
		//given a cateogry name, return a category id
		$dbc    = connect_to_db( "serviceitems" );	
		$query  = "SELECT id FROM CATEGORY WHERE name = '$cname'";
		$result = perform_query( $dbc, $query );
		$row = mysqli_fetch_row($result);
		return $row[0];
	}


		public function get_email(){
			$dbc    = connect_to_db( "serviceitems" );	
			$query  = "SELECT * FROM PROVIDER";
			$result = perform_query( $dbc, $query );
			
			while ($row = mysqli_fetch_array( $result, MYSQLI_ASSOC )){
			
				$providername = $row['name'];
				$providerid  = $row['id'];
				$provideremail = $row['email'];
			   
			   	echo "<option value = '$providerid' selected> $provideremail  </option>\n"; 
		}
			
		echo "</select>";
		disconnect_from_db( $dbc, $result );
	}
	/*
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
	}*/
=======
>>>>>>> 0970a45108362741609f2022cd4de749fd200fa9
}

?>
