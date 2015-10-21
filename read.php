<?PHP
    include_once("connection.php");
    $sql = "SELECT * FROM tbl_product WHERE pro_id < ?";

    $stmt = $conn->prepare($sql);
    
    $stmt->bind_param("i", $pro_id);
    $pro_id = 5;
    
    $stmt->execute();

    $stmt->bind_result($pro_id, $pro_name, $qty, $price);
    
    while($stmt->fetch()){
        echo "<br/>pro_name: $pro_name";    
        echo "<br/>qty: $qty";    
        echo "<br/>price: $price";    
    }
?>