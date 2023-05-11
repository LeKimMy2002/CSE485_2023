<?php
    // declare(strict_types = 1);
    class Student{
        private string $id;
        private string $name;
        private string $class;
        private string $address;

    
    public function __construct(string $id, string $name, string $class, string $address)
    {
        $this->id = $id;
        $this->name = $name;
        $this->class = $class;
        $this->address = $address;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId(string $id)
    {
        $this->id = $id;
    }
    public function getClass()
    {
        return $this->class;
    }
    public function setClass(string $class)
    {
        $this->class = $class;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function setAddress(string $address)
    {
        $this->address = $address;
    }
    }
    class ListOfStudent{
        public $listStudent;
        public function __construct()
        {
            $this->listStudent = array();
        }
        //hàm thêm sinh viên 
        public function addStudent(Student $student){
            array_push($this->listStudent, $student);
        }
        //hàm xóa các sinh viên có id
        public function deleteStudent($id){ 
            //duyệt danh sách sinh viên trong mảng listStudent
            foreach($this->listStudent as $key=>$student){
                //nếu tìm thấy id của sinh viên trùng với id cần tìm 
                if($student->id==$id){
                    //thực hiện xóa sinh viên đó tạo vị trí key khỏi listStudent
                    unset($this->listStudent[$key]);
                }
            }
        }
        //hàm tìm sinh viên
        public function findStudent($id){
            //duyệt danh sách sinh viên trong mảng listStudent
            foreach($this->listStudent as $student){
                //nếu tìm thấy sinh viên có id trùng với id cần tìm thì trả về đối tượng đó
                if($student->getId() == $id){
                    return $student;
                }
            }
            //nếu không thấy thì trả về null
            return null;
        }
        //lấy tất cả các đối tượng sinh viên trong listStudent và trả về
        public function getAllStudents(){
            return $this->listStudent;
        }

    }
?>