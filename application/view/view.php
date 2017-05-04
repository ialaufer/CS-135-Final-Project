<?php

class View {

	public function __construct($model)  {  
      $this->model = $model;
  } 

	public function renderTitle($CategoryResult)
 	{
      include_once("title.php");
 	}
 
	public function renderList($CategoryResult, $CategorySelected, $ListResult)
 	{
      include_once("list.php");
 	}

 	public function renderAdd()
 	{
      include_once("addservice.php");
 	}

 	public function renderRequest($service)
 	{
      include_once("requestservice.php");
 	}
 

}

?>