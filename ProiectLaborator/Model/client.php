<?php

 include '../config.php';


$sql = "SELECT first_name, last_name FROM client";
$result = mysqli_query($conn, $sql);

echo "<br>";

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

?>