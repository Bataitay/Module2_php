<?php
class Application{
    private string $name;
    public static int $count=0;

    public function __construct(string $name){
        $this->name = $name;
        self ::$count++;
    }
    public function __toString(): string{
        return 'Applicaton name:' .$this->name;
    }
}
echo 'total object count:'. Application ::$count.'<br>';
$app1 = new Application('App one');
echo 'Total object count:'. Application::$count.'<br>';
$app2 = new Application('App two');
echo 'Total object count:'. Application::$count.'<br>';
echo $app1 .'<br/>';
echo $app1. '<br/>';