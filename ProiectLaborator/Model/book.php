<?php

 include '../config.php';


$sql = "SELECT book_title, author_name FROM book";
$result = mysqli_query($conn, $sql);

echo "<br>";

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "Book: " . $row["book_title"]. " Author: " . $row["author_name"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

?>