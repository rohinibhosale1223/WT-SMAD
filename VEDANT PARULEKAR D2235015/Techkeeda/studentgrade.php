<!DOCTYPE html>
<html>
<head>
    <title>Student Grades</title>
</head>
<body>
    <h2>Add Student</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="rollNo">Roll Number:</label>
        <input type="text" id="rollNo" name="rollNo"><br><br>
        <label for="studName">Student Name:</label>
        <input type="text" id="studName" name="studName"><br><br>
        <label for="studDept">Department:</label>
        <input type="text" id="studDept" name="studDept"><br><br>
        <label for="passingYear">Passing Year:</label>
        <input type="text" id="passingYear" name="passingYear"><br><br>
        <label for="classGrades">Class Grades:</label>
        <select id="classGrades" name="classGrades">
            <option value="First Class">First Class</option>
            <option value="Second Class">Second Class</option>
            <option value="Pass">Pass</option>
        </select><br><br>
        <input type="submit" value="Add Student">
    </form>
    
    <hr>
    
    <h2>Student List</h2>
    <table border="1">
        <tr>
            <th>Roll Number</th>
            <th>Name</th>
            <th>Department</th>
            <th>Passing Year</th>
            <th>Class Grades</th>
        </tr>
        <?php
        $servername = "localhost";
        $username = "root"; // Change this if your MySQL username is different
        $password = ""; // Change this if your MySQL password is different
        $dbname = "student_db";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Check if form is submitted for adding a student
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $rollNo = $_POST['rollNo'];
            $studName = $_POST['studName'];
            $studDept = $_POST['studDept'];
            $passingYear = $_POST['passingYear'];
            $classGrades = $_POST['classGrades'];

            // Insert data into database
            $sql = "INSERT INTO students (rollNo, studName, studDept, passingYear, classGrades) VALUES ('$rollNo', '$studName', '$studDept', '$passingYear', '$classGrades')";

            if ($conn->query($sql) === TRUE) {
                echo "Student added successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        // Select data from database
        $sql = "SELECT * FROM students";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["rollNo"] . "</td><td>" . $row["studName"] . "</td><td>" . $row["studDept"] . "</td><td>" . $row["passingYear"] . "</td><td>" . $row["classGrades"] . "</td></tr>";
            }
        } else {
            echo "<tr><td colspan='5'>0 results</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>
