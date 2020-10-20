<?php
    require '..\framework\autoloader.php';
    use PHPUnit\Framework\TestCase;

    class SessionTest extends TestCase{

        public function testSession(){
            $session = new SessionClass();
            $this->assertInstanceOf('SessionClass', $session);
        }

        public function testCreate()
        {
            SessionClass::create();
            $this->assertEquals(PHP_SESSION_ACTIVE, true);

        }

        public function testDestroy(){
            SessionClass::create();
            SessionClass::destroy();
            $this->assertEquals(PHP_SESSION_NONE, true);
        }

        public function testAdd(){
            SessionClass::create();
            SessionClass::add('Curtis_Ya_Bend_Me_Sideways_With_This_Assignment', 12);
            $this->assertEquals($_SESSION['Curtis_Ya_Bend_Me_Sideways_With_This_Assignment'], 12);
        }

        public function testRemove(){
            SessionClass::create();
            SessionClass::add('Curtis_Ya_Bend_Me_Sideways_With_This_Assignment', 12);
            SessionClass::remove('Curtis_Ya_Bend_Me_Sideways_With_This_Assignment');
            $this->assertNotEquals(isset($_SESSION['Curtis_Ya_Bend_Me_Sideways_With_This_Assignment']), true);
        }

        public function testAccessible(){
            SessionClass::create();
            SessionClass::add('user', 12);
            $this->assertEquals(SessionClass::accessible('user', 'login.php'), false);
            $this->assertEquals(SessionClass::accessible('user', 'signup.php'), false);
            $this->assertEquals(SessionClass::accessible('user', 'courses.php'), false);
            $this->assertEquals(SessionClass::accessible('user', 'profile.php'), false);
        }
    }
?>