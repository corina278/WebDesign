<?php

 include '../config.php';


 $sql = "SELECT * FROM `order`";
 $result = mysqli_query($conn, $sql);

echo "<br>";

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "Order Number: " . $row["id_order"]. "<br>" .  " Client paid with: " . $row["payment_method"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

?>