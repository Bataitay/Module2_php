<?php
include_once "Student.php";

class LinkedList
{
    public $firstStudent;
    public $lastStudent;
    public $count;

    public function __construct()
    {
        $this->count = 0;
        $this->lastStudent = null;
        $this->firstStudent = null;
    }

    public function insertFirst($student)
    {
        if (is_null($this->firstStudent)) {
            $this->firstStudent = $student;
        } else {
            $this->firstStudent->next = $student;
            $student->next = null;
            $this->firstStudent = $student;
        }
    }

    public function insertLast($student)
    {
        if (is_null($this->lastStudent)) {
            $this->lastStudent = $student;
        } else {
            $student->next = $this->lastStudent;
            $this->lastStudent = $student;
        }
    }

    public function showList()
    {
        $current = $this->lastStudent;
        while ($current != null){
            $current->readStudent();
            $current = $current->next;
        }
        return $current;
    }

    public function totalStudentsFall()
    {
        $current = $this->lastStudent;
        while ($current != null){
            if ($current->score <= 5){
                $this->count++;
            }
            $current = $current->next;

        }
        return $this->count;
    }

    public function listStudentMaxScore()
    {
        if (is_null($this->lastStudent)){
            $maxScoreStudent = $this->lastStudent;
        }
        return "studentMaxScore: " . $maxScoreStudent -> readStudent();
    }

    // public function findByName($name)
    // {
    //     $current = $this->lastStudent;
    //     while ($current->name === $name){
    //         $current -> readStudent();
    //         die;
    //     }
    //     $current = $current->next;

    // }
}
$student1 = new Student("Hung",8);
$student6 = new Student("Hung",10);
$student2 = new Student("Nhung",9);
$student3 = new Student("Minh",7);
$student4 = new Student("Duc",4);
$student5 = new Student("Tri",5);
$studentManager = new StudentManager();
$studentManager->insertFirst($student1);
$studentManager->insertFirst($student2);
$studentManager->insertFirst($student3);
$studentManager->insertLast($student4);
$studentManager->insertLast($student5);
$studentManager->insertLast($student6);
$students = $studentManager->getStudents();

$studentManager->showList();
echo "<br>";
echo $studentManager ->totalStudentsFail();
echo "<br>";
$listStudent = $studentManager->listStudentMaxScore(1);
echo "<pre>";
print_r($listStudent);
$listFindByName = $studentManager->findByName("Hung");
print_r($listFindByName);