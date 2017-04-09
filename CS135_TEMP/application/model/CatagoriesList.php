<?php

// Represents the shopping cart for a single session.

class catagoryList {
	
    // List of products that is used to generate the HTML menu.
    public static $catagoryList = Array("art" => "Arts and Entertainment",
                                       "beauty" => "Beauty and Cosmetology",
                                       "health" => "Health and Medical",
                                       "event" => "Event Planning",
                                       "food" => "Food Services",
                                       "home" => "Home Services",
                                       "professional" => "Professional Servies",
                                       "religious" => "Religious Services",
                                       "other" => "Miscellaneous"
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
