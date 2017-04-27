<?php
  
  include_once("application/model/model.php");
  include_once("application/view/view.php");
<<<<<<< HEAD

=======
>>>>>>> f59d0f85f632f4ecc9352ea20450ab6c4e6b2442


   
  class Controller {
    public $model, $view;
 
    public function __construct()  {  
      echo "constructor";
      $this->model = new Model();
      $this->view = new View($this->model);
    } 
    
    public function invoke() {

<<<<<<< HEAD
      $CategoryResult = $this->model -> get_categories();
=======
      $CategoryResult = $model -> get_categories();
>>>>>>> f59d0f85f632f4ecc9352ea20450ab6c4e6b2442
      $this->view->renderTitle();


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