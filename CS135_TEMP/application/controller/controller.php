<?php
  
  include_once("application/model/model.php");
  include_once("application/view/view.php");
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

      $this->view->renderOrderForm();

      
      if($_POST["update"] != null) {
      
        $quantity = $_POST["quantity"];
        $variety = $_POST["variety"];
        $result = $this->model->updateCart($variety, $quantity);  
  
        if(preg_match('/invalid/',$result)) {
          echo "$result";
        }
        else {
         $this->view->renderCart();
        }

      }
     //Need to start connecting these to title pages
    }
  }
?>