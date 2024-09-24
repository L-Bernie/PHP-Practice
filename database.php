<?php
include 'connection.php';    
?>

<?php
$sql = "SELECT Customers.Name, Orders.Product, Orders.Quantity, Orders.OrderDate
        FROM Customers
        JOIN Orders ON Customers.CustomerID = Orders.CustomerID";

// Execute the query
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    // Display the data
    echo "<table border='1'>";
    echo "<tr><th>Customer Name</th><th>Product</th><th>Quantity</th><th>Order Date</th></tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['Name']}</td>
                <td>{$row['Product']}</td>
                <td>{$row['Quantity']}</td>
                <td>{$row['OrderDate']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
