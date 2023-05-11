<?php
    //readfile
    require_once('../BTTH01/models/Student.php');

    $listOfStudent = new ListOfStudent();
    if(($handle = fopen("ListStudent.csv","r")) !==FALSE){
      while (($data = fgetcsv($handle,1000,","))!==FALSE){
        $student = new Student($data[0],$data[1],$data[2],$data[3]);
        $listOfStudent->addStudent($student);
      }
      fclose($handle);
    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTTH01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1 class="text-center">QUẢN LÝ SINH VIÊN</h1>
    <div class="container">
      <a href="insertnewst.php"><button class="insert_btn">Thêm Sinh Viên</button></a>
      <div class="table_body">
      <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Họ và tên</th>
      <th scope="col">Lớp</th>
      <th scope="col">Địa chỉ</th>
    </tr>
  </thead>

  <tbody>
      <tr>
      <?php 
        $students = array();
        $students = $listOfStudent->getAllStudents();
        foreach ($students as $student):
      ?>
          <tr>
            <td><?php echo $student->getId();?></td>
            <td><?php echo $student->getName();?></td>
            <td><?php echo $student->getClass();?></td>
            <td><?php echo $student->getAddress();?></td>
          </tr>
      </tr>
      <?php
        endforeach
      ?>
    </tbody>
  
</table>
      </div>
    
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>