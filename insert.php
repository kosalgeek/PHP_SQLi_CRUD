<?PHP
    include_once("connection.php");
    $sql = "INSERT INTO tbl_product(pro_name, qty, price) VALUES (?, ?, ? )";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sid", $pro_name, $qty, $price);

    $pro_name = "bind1";
    $qty = 10;
    $price = 1.5;
    
    if ($stmt->execute()) {
        $last_id = mysqli_insert_id($conn);
        echo "ID #$last_id inserted successfully";
    }
    else{
        echo "Error Insert";   
    }
?>