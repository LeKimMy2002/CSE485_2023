<?php 
    include 'classes/Student.php';
    
    class ListOfStudent{
        public $listStudent;
        public function __construct()
        {
            $this->listStudent = array();
        }
        public function createListStudents(Student $student)
        {
            array_push($listStudent,$student);

        }
        public function deleteStudent(string $id){
            $length = sizeof($listStudent);
            for($i=0; $i<$length; $i++)
            {
                if($listStudent[$i]->getId() == $id){
                    unset($listStudent[$i]);
                }
            }
        } 
        public function readFile(){
            $fileSV = fopen('../ListStudent.csv', 'r');
            while($data = fgetcsv($fileSV, 1000, ","))
            {
                list($id, $name, $class, $address) = $data;
                echo $id .' '. $name . ' '. $class .' '.$address.'<br>';
            }
            fclose($fileSV);
        }
    }
?>



