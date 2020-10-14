<?php
    require '..\framework\autoloader.php';
    use PHPUnit\Framework\TestCase;

    class ModelTest extends TestCase
    {

        public function testModel()
        {
            $model = new IndexModel();
            $this->assertInstanceOf('Model', $model);

        }

        public function testAttach()
        {
            $model = new IndexModel();
            $view = new View();
            $model->attach($view);
            $this->assertEquals($view, $model->getObservers()[0]);
        }

        public function testDetach()
        {
            $model = new IndexModel();
            $view = new View();
            $model->attach($view);
            $model->detach($view);
            $this->assertEquals(array(), $model->getObservers());
        }

        public function testSetData()
        {
            $model = new IndexModel();
            $data = [1,3];
            $model->setData($data);
            $this->assertEquals($data, $model->getData());
        }

        public function testGetData()
        {
            $model = new IndexModel();
            $data = [1,3];
            $model->setData($data);
            $this->assertEquals($data, $model->getData());
        }

        public function testNotify()
        {

        }

        public function testGetObservers()
        {
            $model->attach($view)
        }
    }

?>