<?php
class MyDB extends SQLite3 {
    function __construct() {
       $this->open('../test.db');
    }
 }

 // 2. Open Database
 $db = new MyDB();
 if(!$db) {
    echo $db->lastErrorMsg();
 } else {
    echo "Opened database successfully<br>";
 }


$orderId = $_POST['orderId'];
$deliveryId = $_POST['deliveryId'];

// Fetch menu statuses for the given orderId
$sql = "SELECT COUNT(*) AS totalMenus, SUM(CASE WHEN menuStatus = 'เสร็จสิ้นเมนู' THEN 1 ELSE 0 END) AS completedMenus
        FROM orderDetail
        WHERE orderId = $orderId";

$result = $db->query($sql);

if ($result) {
    $row = $ret->fetchArray(SQLITE3_ASSOC);

    // Check if all menus are completed
    if ($row['totalMenus'] == $row['completedMenus']) {
        // Update order status
        $updateSql = "UPDATE orders SET orderStatus = 'เสร็จสิ้นออเดอร์' WHERE orderId = '$orderId'";

        if ($deliveryId !== 0) {
            $deliverySQL = "UPDATE delivery SET deliveryStatus = 'กำลังจัดส่ง' WHERE deliveryId = '$deliveryId'";
            $db->query($deliverySQL);
        }
        

        if ($db->query($updateSql) === TRUE) {
            echo "true";
        } else {
            echo "Error updating order status: " . $db->error;
        }
    } else {
        echo "false";
    }
} else {
    echo "Error executing query: " . $db->error;
}

// Close the database connection
$db->close();
?>
