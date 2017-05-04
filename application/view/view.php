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
 
	public function renderList($CategoryResult, $CategorySelected, $ListResult)
 	{
 		echo $ListResult."here";
      include_once("list.php");
 	}

 	public function renderAdd()
 	{
      include_once("addservice.php");
 	}

 	public function renderRequest()
 	{
      include_once("requestservice.php");
 	}
 

}

?>