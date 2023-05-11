<?php
require_once('../BTTH01/models/Student.php');

$isSuccess = false;
$existStudent = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST["id"];
  $name = $_POST["name"];
  $class = $_POST["class"];
  $address = $_POST["address"];

  $listOfStudent = new ListOfStudent();
  if (($handle = fopen("ListStudent.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
      $student = new Student($data[0], $data[1], $data[2], $data[3]);
      $listOfStudent->addStudent($student);
    }
    fclose($handle);
  }
  $existStudent = $listOfStudent->findStudent($id);
  if ($existStudent == null) {
    $student = new Student($id, $name, $class, $address);
    $handle = fopen("ListStudent.csv", "a");
    fputcsv($handle, array($id, $name, $class, $address));
    fclose($handle);
    $id = '';
    $name = '';
    $class = '';
    $address = '';
    $isSuccess = true;
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Thông tin sinh viên</title>
</head>

<body>
  <style>
    body {
      background-color: #9ed7f9;
    }
  </style>
  <h1 class="text-center">Thêm sinh viên mới</h1>
  <form method="POST" action="insertnewst.php">
    <label for="id">ID:</label>
    <input type="text" name="id" id="id">

    <label for="name">Họ và tên:</label>
    <input type="text" name="name" id="name">

    <label for="class">Lớp:</label>
    <input type="text" name="class" id="class">

    <label for="address">Địa chỉ:</label>
    <input type="text" name="address" id="address">
    <input type="submit" name="submit" value="Thêm" />
    <?php
        if($isSuccess === true) {
          echo "<p>Thêm sinh viên thành công!</p>";
          echo "<p> ID: " . $student->getId() . "</p>";
          echo "<p> Họ và tên: " . $student->getName() . "</p>";
          echo "<p> Lớp: " . $student->getClass() . "</p>";
          echo "<p> Địa chỉ: " . $student->getAddress() . "</p>";
        } else if ($existStudent !== null) {
          echo "Sinh viên đã tồn tại";
        } else {
          echo "Vui lòng thêm sinh viên";
        }
    ?>
  </form>
</body>

</html>