<?PHP
class ListStudent
{
    public String $name;
    public int $score;
    public $next;

    public function __construct($name, $score)
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
        $list = new ListStudent($item, $score);
        $list->next = $this->first;
        $this->first = $list;
        if ($this->last == NULL) {
            $this->last = $list;
        }
        
            $this->count++;
        
    }
    //insertLast() để thêm một nút vào cuối danh sách.
    public function insertLast($item, $score)
    {
        $link = new ListStudent($item, $score);
        if ($this->first != NULL) {
            $this->last->next = $link;
            $link->next = NULL;
            $this->last = $link;
        } else {
            $this->insertFirst($item, $score);
        }
       
            $this->count++;
        
    }

    public function showList()
    {
        $listData = [];
        $current = $this->first;

        while ($current != NULL) {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }
    public function totalStudentsFail()
    {
        return $this->count;
    }
    public function listStudentMaxScore()
    {
    }
    public function findByName($item)
    {
        $arr = [];
        // foreach ($this->students as $student) {
        //     if ($student->getScore() >= $score) {
        //         $arr[] = $student;
        //     }
        // }
        // return $arr;
    }
    public function sort_ascending( $students )
    {
        sort( $students);
        echo "mảng sau khi đã sắp xếp <br>";
        foreach($students as $student ) {
            
           print_r($student ) ;
            echo "<br>";
        }
    }
}
$object = new LinkedListStudent();
$object->insertFirst("hai nam", 9);
$object->insertFirst("nam long ", 10);
$object->insertFirst("long long ", 10);
$object->insertLast("viet", 9);
$object->insertLast("viet nam", 5);
echo "<pre>";
print_r($object);
echo " hien thi danh dach<hr>";
print_r($object->showList());
echo " trong danh sách có bao nhiêu sinh viên<hr>";
echo $object->totalStudentsFail();