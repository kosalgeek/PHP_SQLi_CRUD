<?PHP
    include_once("connection.php");
    $sql = "DELETE FROM tbl_product WHERE pro_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $pro_id);

    $pro_id = 2;
    
    if ($stmt->execute()) {        
        echo "deleted successfully";
    }
    else{
        echo "Error Insert";   
    }
?>