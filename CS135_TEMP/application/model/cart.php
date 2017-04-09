<?php

// Represents the shopping cart for a single session.

class ShoppingCart {
	
    // List of products that is used to generate the HTML menu.
    public static $cookieTypes = Array("art" => "Arts & Entertainment",
                                       "beauty" => "Beauty & Cosmetology",
                                       "health" => "Health & Medical",
                                       "event" => "Event Planning",
                                       "food" => "Food Services",
                                       "professional" => "Professional Services",
                                       "religious" => "Religious Services",
                                       "misc" => "Miscellaneous"
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
