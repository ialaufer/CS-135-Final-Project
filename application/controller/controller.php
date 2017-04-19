<?php
  
  include_once("../model/model.php");
  include_once("../view/view.php");
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

    
     //Need to start connecting these to title pages
    }
  }
?>