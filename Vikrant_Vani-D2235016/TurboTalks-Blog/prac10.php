<!DOCTYPE html>
<html>
<body>

<h2>Student Entry Form</h2>
<form action="prac10.php" method="post">
Years : <select name="years"> 
    <option value="2014">2014</option>
    <option value="2023">2023</option>
    <option value="2024">2024</option>
</select>
<br>
<input type="radio" name="firstclass">First Class
<br>
<input type="radio" name="secondclass">Second Class
<br>
<input type="radio" name="all">All
<br>
<input type="submit">
</form>
<?php
$servername = "localhost";
$username = "vicky";
$password = "Vikrant@GTR";
$dbname = "student";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$selectedYear = $_POST["years"]; 
$isFirstClassSelected = isset($_POST["firstclass"]);
$isSecondClassSelected = isset($_POST["secondclass"]);
$isAllSelected = isset($_POST["all"]);

$sql = "SELECT * FROM student_details "; 

if ($selectedYear != "all") {
  $sql .= "WHERE passingyear = $selectedYear ";
}

if ($isFirstClassSelected) {
  $sql .= "AND classgrades = 'FirstClass' ";
} else if ($isSecondClassSelected) {
  $sql .= "AND classgrades = 'SecondClass' ";
}
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<h2>Student List</h2>";
  echo "<table>";
    echo "<tr><th>Roll No</th><th>Student Name</th><th>Department</th><th>Passing Year</th><th>Class Grades</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["rollno"] . "</td><td>" . $row["studname"] . "</td><td>" . $row["studdept"] . "</td><td>" . $row["passingyear"] . "</td><td>" . $row["classgrades"] . "</td></tr>";
  }
  echo "</table>";
} else {
  echo "No records found based on your selection.";
}

?>

</body>
</html>


