<?php
class ListScores
{
    public string $name;
    public int $score;
    public $next;

    public function __construct($name,$score)
    {
        $this->name = $name;
        $this->score = $score;
        $this->next = null;
    }
    function readNode()
    {
        return $this->name . $this->score;
    }
}
    class LinkedListStudent
{
    //luu lai gia tri
    public $first;
    public $last;
    public $count;
    function __construct()
    {
        $this->first;
        $this->last;
        $this->count = 0;
    }
    //insertFirst() để thêm một nút vào đầu danh sách.
    public function insertFirst($item, $score)
    {
        $list = new ListScores($item, $score);
        $list->next = $this->first;
        $this->first = $list;
        if ($this->last == NULL) {
            $this->last = $list;
        }
        
    }
    //insertLast() để thêm một nút vào cuối danh sách.
    public function insertLast($item, $score)
    {
        $link = new ListScores($item, $score);
        if ($this->first != NULL) {
            $this->last->next = $link;
            $link->next = NULL;
            $this->last = $link;
        } else {
            $this->insertFirst($item, $score);
        }
        
    }
}

$object = new LinkedListStudent();
$student1 = new Student("Hung",8);
$student6 = new Student("Hung",10);
$student2 = new Student("Nhung",9);
$student3 = new Student("Minh",7);
$student4 = new Student("Duc",4);
$student5 = new Student("Tri",5);
echo "<pre>";
print_r($object);
echo " hien thi danh dach<hr>";
print_r($object->showList());
echo " trong danh sách có bao nhiêu sinh viên<hr>";
echo $object->totalStudentsFail();