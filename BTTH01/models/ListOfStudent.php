class ListOfStudent extends Student {
  private $students;

  public function __construct() {
    $this->students = array();
  }

  public function addStudent($student) {
    array_push($this->students, $student);
  }

  public function removeStudent($index) {
    unset($this->students[$index]);
  }

  public function getStudent($index) {
    return $this->students[$index];
  }

  public function getAllStudents() {
    return $this->students;
  }
}