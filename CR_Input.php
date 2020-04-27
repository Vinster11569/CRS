<?php
'$servername = "localhost";
$username = "vclark";
$password = "012f8dc3c937430abd4e0ad42aa7b416";
'$dbname = "myDBPDO";

$productID = $_POST[product_ID];
$productName = $_POST[product_Name];
$productPrice = $_POST[product_Price]; 
$productQOH = $_POST[product_QOH];

try {
    $conn = new PDO("mysql:host=127.0.0.1;dbname=vclark", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO product (Product_ID, Product_Name, Product_Price, QOH) 
    VALUES (:Product_ID, :Product_Name, :Product_Price, :QOH)");
    $stmt->bindParam(':Product_ID', $ProductID);
    $stmt->bindParam(':Product_name', $ProductName);
    $stmt->bindParam(':Product_Price', $ProductPrice);
	$stmt->bindParam(':QOH', $ProductQOH);

    // insert a row
	

	$stmt->execute();
	
    //$firstname = "John";
    //$lastname = "Doe";
    //$email = "john@example.com";
    //$stmt->execute();

    // insert another row
    //$firstname = "Mary";
    //$lastname = "Moe";
    //$email = "mary@example.com";
    //$stmt->execute();

    // insert another row
    //$firstname = "Julie";
    //$lastname = "Dooley";
    //$email = "julie@example.com";
    //$stmt->execute();

    echo "New records created successfully";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
?>