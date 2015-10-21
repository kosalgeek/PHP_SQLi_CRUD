<?PHP
    include_once("connection.php");
    $sql = "UPDATE tbl_product SET pro_name = ?, qty = ?, price = ? WHERE pro_id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sidi", $pro_name, $qty, $price, $pro_id);
    
    $pro_name = "bind1";
    $qty = 10;
    $price = 1.5;
    $pro_id = 2;
    
    if ($stmt->execute()) {        
        echo "updated successfully";
    }
    else{
        echo "Error Insert";   
    }
?>