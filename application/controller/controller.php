<?php
  
  include_once("../model/model.php");


  if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
  }
   
  class Controller {
    public $model, $view;
 
    public function __construct()  {  
      $this->model = new Model();
      $this->view = new View($this->model);
    } 

    public function invoke() {

      $this->view->renderTitle();

      $CategoryResult = $model -> get_categories();
      include_once("../view/view.php");

     //Need to start connecting these to title pages
    }

  }
?>