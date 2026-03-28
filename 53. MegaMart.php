<?php
// Multi-dimensional associative array for products
$products = array(

    "P001" => array(
        "name" => "Rice (1kg)",
        "category" => "Grocery",
        "price" => 60,
        "stock" => 50
    ),

    "P002" => array(
        "name" => "Shampoo",
        "category" => "Personal Care",
        "price" => 120,
        "stock" => 30
    ),

    "P003" => array(
        "name" => "Notebook",
        "category" => "Stationery",
        "price" => 40,
        "stock" => 100
    ),

    "P004" => array(
        "name" => "Milk (1L)",
        "category" => "Dairy",
        "price" => 55,
        "stock" => 25
    )
);
?>

<html>
<head>
    <title>Mega Mart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
        }
        h1 {
            color: #2c3e50;
        }
        table {
            margin: auto;
            border-collapse: collapse;
            width: 80%;
            background-color: white;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        th {
            background-color: lightblue;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

<h1>Welcome to Mega Mart</h1>
<h3>Product Details</h3>

<table>
    <tr>
        <th>Product ID</th>
        <th>Name</th>
        <th>Category</th>
        <th>Price (₹)</th>
        <th>Stock</th>
    </tr>

    <?php
    foreach ($products as $id => $details) {
        echo "<tr>";
        echo "<td>" . $id . "</td>";
        echo "<td>" . $details['name'] . "</td>";
        echo "<td>" . $details['category'] . "</td>";
        echo "<td>" . $details['price'] . "</td>";
        echo "<td>" . $details['stock'] . "</td>";
        echo "</tr>";
    }
    ?>

</table>

</body>
</html>