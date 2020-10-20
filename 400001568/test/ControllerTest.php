<?php

    require '..\framework\autoloader.php';
    use PHPUnit\Framework\TestCase;

    class ControllerTest extends TestCase{
        public function testController()
        {
            $controller = new IndexController();
            $this->assertInstanceOf('IndexController', $controller);
        }

        public function testSetModel()
        {
            $model = new IndexModel();
            $obj = new IndexController();
            $obj->setModel($model);
            $this->assertEquals($model, $obj->getModel());
        }

        public function testSetView()
        {   
            $view = new View();
            $obj = new IndexController();
            $obj->setView($view);
            $this->assertEquals($view, $obj->getView());
        }

        public function testGetModel()
        {
            $model = new IndexModel();
            $obj = new IndexController();
            $obj->setModel($model);
            $this->assertEquals($model, $obj->getModel());
        }

        public function testGetView()
        {
            $view = new View();
            $obj = new IndexController();
            $obj->setView($view);
            $this->assertEquals($view, $obj->getView());
        }

    }



?>