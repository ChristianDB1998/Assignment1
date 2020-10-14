<?php
    class SessionClass
    {
        public static function create()
        {
            if(session_status() == PHP_SESSION_NONE)
            {
                session_start();
            }
        }

        public static function destroy()
        {
            if(session_status() == PHP_SESSION_ACTIVE)
            {
                session_destroy();
            }
        }

        public static function add($name, $value)
        {
            if(session_status() == PHP_SESSION_ACTIVE)
            {
                $_SESSION[$name] = $value;
            }
        }

        public static function remove($name)
        {
            if(session_status() == PHP_SESSION_ACTIVE)
            {
                unset($_SESSION[$name]);
            }
        }

        public static function accessible($user,$page):bool
	    {
           if (session_status() == PHP_SESSION_ACTIVE)
           {
                if (isset($_SESSION["user"]))
                {
                    if ($_SESSION["user"] == $user && $page !== "login.php" && $page !== "signup.php") 
                    {
                        return true;
                    }
                } 
                else 
                {
                    if($page !== "courses.php" && $page !== "profile.php")
                    {
                        return true;
                    }
                }
            }
            return false;
	    }
    }

?>