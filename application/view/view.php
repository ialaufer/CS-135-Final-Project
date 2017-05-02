<?php

class View {

	public function __construct($model)  {  
      $this->model = $model;
  } 

	public function renderTitle($CategoryResult)
 	{
 		  //$shoppingCart = $this->model->getCart();
      
      include_once("title.php");
 	}
 
	public function renderList($CategoryResult, $CategorySelected)
 	{
 		  //$shoppingCart = $this->model->getCart();
      include_once("list.php");
 	}
 

}

?>