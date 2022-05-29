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
    {   echo " Danh sách học sinh <br>";
        foreach ($this->students as $student) {
            
            echo "Name : ". $student->getName()." ; ";
            echo "Score : ".$student->getScore()."<br>";
        }
    }

    public function totalStudentsFail()
    {
        $count = 0;
        foreach ($this->students as $student) {
            if ($student->getScore() <= 5){
                echo ' '.$student->getName() ;
                $count++;
            }
        }
        return $count;
    }

    public function listStudentMaxScore($score)
    {
        $arr=[];
        foreach ($this->students as $student) {
            if ($student->getScore() >= $score){
                $arr[]=$student;
            }
        }
        return $arr;
    }
    public function maxthen(){
        // $arr=[];
        $max=$this->students[0];
        for($i=0;$i<count($this->students);$i++){
            if($this->students[$i]>$max){
                $max=$this->students[$i];
                // $arr[]=$max;
                print_r($max);
            }
        }
        // return $max;
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
    
    
}
class Student
{
    private $name;
    private $score;

    /**
     * @param $name
     * @param $score
     */
    public function __construct($name, $score)
    {
        $this->name = $name;
        $this->score = $score;
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
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param mixed $score
     */
    public function setScore($score): void
    {
        $this->score = $score;
    }

}
$student1 = new Student("Hưng",8);
$student6 = new Student("Dương",10);
$student2 = new Student("Nhung",9);
$student3 = new Student("Minh",7);
$student4 = new Student("Sang",4);
$student5 = new Student("Trung",5);
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
echo " là ".$studentManager ->totalStudentsFail(). " học sinh dưới 5 điểm";
echo "<br>";
$listStudent = $studentManager->listStudentMaxScore(8);
echo "Học sinh có điểm cao nhất";
echo "<pre>";
print_r($listStudent);
$listFindByName = $studentManager->findByName("Hung");
echo "Học sinh cần tìm: <br>";
print_r($listFindByName);
$listStudent1 = $studentManager->sort_ascending( $students );
echo "<pre>";
print_r($listStudent1);
echo " học sinh điểm cao nhất";
print_r($studentManager->maxthen());

