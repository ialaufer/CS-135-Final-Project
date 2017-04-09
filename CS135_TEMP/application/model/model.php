<?php
require_once("application/model/cart.php");
if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}

class Model {

	public function __construct()  { 

    if (!isset($_SESSION['cart'])) {
      	$_SESSION['cart'] = new ShoppingCart();
 	  }
  } 

	public function updateCart($variety, $quantity)
 	{
  		
    $displayName = ShoppingCart::$cookieTypes[$variety];
       
    if ($displayName && is_numeric($quantity) && $quantity > 0) {    
        $_SESSION["cart"]->order($variety, $quantity);
        $message = "$quantity boxes of $displayName added to shopping cart";
    }
    else if (!$displayName) {
        $message = "invalid, invalid selection";
    }
    else if (!is_numeric($quantity)) {
        $message = "invalid, quantity not numeric";
    }
    else if ($quantity < 1) {
        $message = "invalid, quantity less than 1";
    }
		

		return $message;
 	}

 	public function getCart() {
 		return $_SESSION["cart"]->getOrder();
 	}

 	public function addToCart($variety, $quantity) {
 		// todo

 	}
 
}

?>