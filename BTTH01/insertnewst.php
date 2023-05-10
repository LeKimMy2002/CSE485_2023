<!DOCTYPE html>
<html>
<head>
	<title >Thông tin sinh viên</title>
</head>
<body>
<style>
	body {
		background-color: #9ed7f9; 
	}
</style>
	<h1 ”>Thêm sinh viên mới:</h1>
	<form method="POST" action="insertnewst.php">
        <label for="id">ID:</label>
        <input type="text" name="id" id="id">

        <label for="name">Name:</label>
        <input type="text" name="name" id="name">

        <label for="class">Class:</label>
        <input type="text" name="class" id="class">

        <label for="address">Address:</label>
        <input type="text" name="address" id="address">
		<input type="submit" name="submit" value="Thêm"/>
	</form>
</body>
</html>
