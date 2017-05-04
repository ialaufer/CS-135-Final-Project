<?php
  
  include_once("application/model/model.php");
  include_once("application/view/view.php");



   
  class Controller {
    public $model, $view;
 
    public function __construct()  {  
      echo "constructor";
      $this->model = new Model();
      $this->view = new View($this->model);
    } 
    
    public function invoke() {

      $CategoryResult = $this->model -> get_categories();
      
      if($_GET == null) {
          $this->view->renderTitle($CategoryResult);
      }

      if($_GET != null) {
        foreach ($_GET as $key => $cid) {
          $name = str_replace('_', ' ', $key);
          if (array_key_exists($name, $CategoryResult)) {
            $cid = $this->model ->get_id($name);
            $ListResult = $this->model ->get_serviceList($cid);
            $this->view->renderList($CategoryResult, $key, $ListResult);
          }
        }

      }  

      //print_r($CategoryResult);
        
      /*
      if($_POST(image.id.clicked)){
        $ServiceResult = $model -> get_services(image.id)
        include_once("../view/Categories.php")
      
      }
      
     //Need to start connecting these to title pages
    }
    */
  }}
?>