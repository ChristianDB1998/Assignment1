<?php 
/*
 * Base Controller
 * Loads the models and views
 * 
 */   

 abstract class Controller
 {
     protected $model = null;
     protected $view = null;

     public function setModel(Model $m)
     {
         $this->model = $m;
     }

     public function setView(View $v)
     {
         $this->view = $v;
     }

     public function getModel()
     {
         return $this->model;
     }

     public function getView()
     {
         return $this->view;
     }

     abstract public function run(): void;
 }

}

?>