<?php

// Represents the shopping cart for a single session.
Arts & Entertainment
Beauty & Cosmetology
Health and Medical
Event Planning
Food Services
Home Services
Professional Services
Religious Services
Miscellaneous
class ShoppingCart {
	
    // List of products that is used to generate the HTML menu.
    public static $cookieTypes = Array("art" => "Arts and Entertainment",
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
    public function order($variety, $quantity) {
        $currentQuantity = $this->order[$variety];
        $currentQuantity += $quantity;
        $this->order[$variety] = $currentQuantity;
    }

    public function update($variety, $quantity) {
      $currentQuantity = $this->order[$variety];
      $currentQuantity = $quantity;
      $this->order[$variety] = $currentQuantity;
      
    }
	

}

?>
