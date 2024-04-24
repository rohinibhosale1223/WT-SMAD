<!DOCTYPE html>
<html>
<head>
    <title>Shopping Application</title>
</head>
<body>

<?php
// Check if form is submitted for adding an item
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root"; // Change this if your MySQL username is different
    $password = ""; // Change this if your MySQL password is different
    $dbname = "shopping_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve form data
    $item_name = $_POST['item_name'];
    $item_quantity = $_POST['item_quantity'];

    // Insert data into database
    $sql = "INSERT INTO items (name, quantity) VALUES ('$item_name', $item_quantity)";

    if ($conn->query($sql) === TRUE) {
        echo "Item added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<h2>Add Item</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="item_name">Item Name:</label>
    <input type="text" id="item_name" name="item_name"><br><br>
    <label for="item_quantity">Item Quantity:</label>
    <input type="number" id="item_quantity" name="item_quantity"><br><br>
    <input type="submit" value="Add Item">
</form>

<hr>

<h2>Items List</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Quantity</th>
    </tr>
    <?php
    $servername = "localhost";
    $username = "root"; // Change this if your MySQL username is different
    $password = ""; // Change this if your MySQL password is different
    $dbname = "shopping_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Select data from database
    $sql = "SELECT id, name, quantity FROM items";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["quantity"] . "</td></tr>";
        }
    } else {
        echo "<tr><td colspan='3'>0 results</td></tr>";
    }

    $conn->close();
    ?>
</table>

</body>
</html>
