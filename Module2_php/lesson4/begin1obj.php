<?php
class Application
{
    private static $instance;
    private function __construct()
    {
    }
    public static function getInstance(): Application
    {
        if (self::$instance === null) {
            self::$instance = new Application();
            echo 'alo';
        }
        return self::$instance;
    }
}
echo $app1 = Application::getInstance();
echo $app2 = Application::getInstance();
// echo $app3 = new Application();
