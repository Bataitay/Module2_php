<?php
class StudentManager
{
    private $students;

    public function __construct()
    {
        $this->students =[];
    }

    public function insertFirst($data)
    {
        array_unshift($this->students,$data);
    }

    public function insertLast($data)
    {
        array_push($this->students,$data);
    }

    public function getStudents()
    {
        return $this->students;
    }
    // public function rsort($name){
    //     foreach ($this->students as $student) {
            
    //         echo "Name : ". $student->getName()." ; ";
    //     }
    // }

    public function showList()
    {   echo " Danh sách nhân viên <br>";
        foreach ($this->students as $student) {
            
            echo "Name : ". $student->getName()." ; ";
            echo "lương : ".$student->getluong()."<br>";
        }
    }

    public function totalStudentsFail()
    {
        $count = 0;
        foreach ($this->students as $student) {
            if ($student->getluong() >2000 ){
                echo ' '.$student->getName() ;
                $count++;
            }
        }
        return $count;
    }

    public function listStudentMaxluong($luong)
    {
        $arr=[];
        foreach ($this->students as $student) {
            if ($student->getluong() >= $luong){
                $arr[]=$student;
            }
        }
        return $arr;
    }

    public function findByName($name)
    {
        $arr=[];
        foreach ($this->students as $student) {
            if ($student->getName() == $name){
                $arr[]=$student;
            }
        }
        return $arr;
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
    /**
     * Thêm một phần tử vào cuối danh sách này.
     * @param $obj
     **/
    public function add($obj)
    {
        array_push($this->arrayList, $obj);
    }

    /**
     * Xóa tất cả các phần tử khỏi danh sách này.
     **/
    public function clear()
    {
        $this->arrayList = array();
    }

    /**
     * Trả về phần tử tại vị trí đã chỉ định trong danh sách này
     * @param $index
     **/
    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->arrayList[$index];

        } else {
            die("ERROR in ArrayList.get");
        }
    }


    /**
     * Kiểm tra nếu danh sách này không có phần tử nào.
     * @return boolean
     **/
    public function isEmpty()
    {
        if (count($this->arrayList) == 0) {
            return true;
        }
        return false;
    }

    /**
     * Loại bỏ phần tử ở vị trí đã chỉ định trong danh sách này.
     * @param $index
     **/
    public function remove($index)
    {
        if ($this->isInteger($index)) {
            $newArrayList = array();

            for ($i = 0; $i < $this->size(); $i++)
                if ($index != $i) $newArrayList[] = $this->get($i);

            $this->arrayList = $newArrayList;
        } else {
            die("ERROR in ArrayList.remove <br> Integer value required");
        }
    }

    /**
     * Trả về số phần tử trong danh sách này.
     * @return integer
     **/
    public function size()
    {
        return count($this->arrayList);
    }

    /**
     * Sắp xếp danh sách theo thứ tự bảng chữ cái.
     **/
    public function sort()
    {
        sort($this->arrayList);
    }


    /**
     * Trả về một mảng chứa tất cả các phần tử trong danh sách này theo  ng thứ tự.
     * @return array
     **/
    public function toArray()
    {
        return $this->arrayList;
    }

    /**
     * Trả về true nếu tham số chứa một giá trị số nguyên
     * @return boolean
     **/
    public function isInteger($toCheck) {
        return preg_match("/^[0-9]+$/", $toCheck);
    }

}
    

class Student
{
    private $name;
    private $luong;

    /**
     * @param $name
     * @param $luong
     */
    public function __construct($name, $luong)
    {
        $this->name = $name;
        $this->luong = $luong;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getluong()
    {
        return $this->luong;
    }

    /**
     * @param mixed $luong
     */
    public function setluong($luong): void
    {
        $this->luong = $luong;
    }

}
$student1 = new Student("Hưng",2050 .'$');
$student6 = new Student("Dương",2111 .'$');
$student2 = new Student("Nhung",1989 .'$');
$student3 = new Student("Minh",1997 .'$');
$student4 = new Student("Sang",1994 .'$');
$student5 = new Student("Trung",1995 .'$');
$studentManager = new StudentManager();
$studentManager->insertFirst($student1);
$studentManager->insertFirst($student2);
$studentManager->insertFirst($student3);
$studentManager->insertLast($student4);
$studentManager->insertLast($student5);
$studentManager->insertLast($student6);
$students = $studentManager->getStudents();
echo "<pre>";
// print_r($students);
$studentManager->showList();
echo "<br>";
echo " là ".$studentManager ->totalStudentsFail(). " là nhân viên trên 2000$";
echo "<br>";
$listStudent = $studentManager->listStudentMaxluong(10);
echo "Học sinh có điểm cao nhất";
echo "<pre>";
print_r($listStudent);
$listFindByName = $studentManager->findByName("Hung");
echo "Học sinh cần tìm: <br>";
print_r($listFindByName);
$listStudent1 = $studentManager->sort_ascending( $students );
echo "<pre>";
print_r($listStudent1);

$them=$arr->add(2);
echo $them;
// $listInteger->add(1);
// $listInteger->add(2);
// $listInteger->add(3);