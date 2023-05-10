<?php 
    include 'classes/Student.php';
    
    class ListOfStudent{
        public $listStudent;
        public function __construct()
        {
            $this->listStudent = array();
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



