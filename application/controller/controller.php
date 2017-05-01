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
      $this->view->renderTitle($CategoryResult);


      // if statment to check the size of $_GET array 
      // if size of array > 1, then call renderList ...

      /*foreach ($_GET as $key => value) {
        if ($key in $CategoryResult ) {

          $this->view->renderList($CategoryResult, $key);

        }

      }*/


        
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