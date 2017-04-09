<?php

// Represents the shopping cart for a single session.

class catagoryList {
	
    // List of products that is used to generate the HTML menu.
<<<<<<< HEAD
    public static $catagoryList = Array("art" => "Arts and Entertainment",
=======
<<<<<<< HEAD:CS135_TEMP/application/model/CatagoriesList.php
    public static $cookieTypes = Array("art" => "Arts and Entertainment",
>>>>>>> 90673b6fe330e7af5c10cfc67ea93c4ca8fc0c2f
                                       "beauty" => "Beauty and Cosmetology",
                                       "health" => "Health and Medical",
                                       "event" => "Event Planning",
                                       "food" => "Food Services",
                                       "home" => "Home Services",
                                       "professional" => "Professional Servies",
                                       "religious" => "Religious Services",
                                       "other" => "Miscellaneous"
=======
    public static $cookieTypes = Array("art" => "Arts & Entertainment",
                                       "beauty" => "Beauty & Cosmetology",
                                       "health" => "Health & Medical",
                                       "event" => "Event Planning",
                                       "food" => "Food Services",
                                       "professional" => "Professional Services",
                                       "religious" => "Religious Services",
                                       "misc" => "Miscellaneous"
>>>>>>> master:CS135_TEMP/application/model/cart.php
                                       );
	
    // The array that contains the order
    private $order;
	
    // Initially, the cart is empty
    public function __construct() {
        $this->order = Array();
    }
	
    public function getOrder() {
        return $this->order;
    }
    // Adds an order to the shopping cart.  
    public function insert($catagory, $image) {
        $this->order[$catagory] = $image;
    }
	
}

?>
