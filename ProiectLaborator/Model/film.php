<?php

 include '../config.php';


 $sql = "SELECT film_title, producer_name FROM film";
 $result = mysqli_query($conn, $sql);

echo "<br>";

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "Film: " . $row["film_title"]. " Producer: " . $row["producer_name"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

?>