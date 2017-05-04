<?php
	include('application/dbconn.php');

class Model{

	public function __construct()  { 
	}

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



		public function get_serviceList($cid) {
			$dbc    = connect_to_db( "serviceitems" );	
			$query  = "SELECT * FROM SERVICEITEM WHERE categoryId = '$cid'";
			$result = perform_query( $dbc, $query );
			$display = Array();
			while ($row = mysqli_fetch_array( $result, MYSQLI_ASSOC )){
				$providerName = $row['providerName'];

				$providerAddress = $row['providerAddress'];
				$providerEmail = $row['providerEmail'];
				$providerPhone = $row['providerPhone'];
				
				$serviceItemName = $row['serviceItemName']; 
				$serviceDescription = $row['serviceDescription'];
				$categoryId = $row['categoryId'];
				$servicePrice= $row['servicePrice'];

				$name = str_replace(' ', '_', $serviceItemName);
				echo $name ."name";

				$display[$serviceItemName] = "<div class='list items'>
				<h3>$serviceItemName</h3>
				<h4>Provider information:</h4>
				<p class='provider information'>
					$providerName<br>
					$providerAddress<br>
					$providerEmail<br>
					$providerPhone<br>
				<p> 
				<p class='description'>$serviceDescription</p>
				<p class='price'>Price: $servicePrice</p>
				</div>
				<form method='get'>
    			<button type='submit' style='width:750px;height:50px;background-color: #4CAF50;' name='book' value =$name;>Book Service</button>
   				</form>
				\n";
				
		}
			
		
		disconnect_from_db( $dbc, $result );
		return $display;
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
	
}
?>
