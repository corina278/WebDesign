<?php

 include '../config.php';


 $sql = "SELECT album_title, artist_name FROM music";
 $result = mysqli_query($conn, $sql);

echo "<br>";

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "Album: " . $row["album_title"]. " - Artist: " . $row["artist_name"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

?>