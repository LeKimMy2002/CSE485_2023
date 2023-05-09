<?php
    $file = 'ListStudent.csv';
    //mở file csv để đọc
    $handle = fopen($file,'r');
    //khởi tạo mảng để lưu danh sách sinh viên
    $students = array();
    //đọc các dòng từ file csv và lưu vào mảng
    while(($data = fgetcsv($handle,1000,','))!==FALSE){
        $student = array(
            'id' => $data[0],
            'hoten' => $data[1],
            'lop' => $data[2],
            'tinh' => $data[3],
        );
        array_push($students, $student);
    }
    fclose($handle);

    // //hiển thị danh sách sinh viên trên trang web
    // foreach ($students as $student){
    //     echo "ID: " . $student["ID"] . "<br>";
    //     echo "Ho ten: " . $student["Ho ten"] . "<br>";
    //     echo "Gioi tinh: " . $student["Gioi tinh"] . "<br>";
    // }

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
</head>
<body>
    <h1 class="text-center">QUẢN LÝ SINH VIÊN</h1>
    <button>Thêm sinh viên</button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Họ và tên</th>
      <th scope="col">Lớp</th>
      <th scope="col">Tỉnh</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach($students as $student):
    ?>
            <tr>
               <td><?php echo $student["id"];?></td>
               <td><?php echo $student["hoten"];?></td>
               <td><?php echo $student["lop"];?></td>
               <td><?php echo $student["tinh"];?></td>
            </tr>
    <?php
        endforeach
    ?>
  </tbody>
</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>