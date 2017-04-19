<?php

class View {

	public function __construct($model)  {  
      $this->model = $model;
  } 

	public function renderTitle()
 	{
 		  //$shoppingCart = $this->model->getCart();
      
      include_once("title.php");
 	}
 
}

?>