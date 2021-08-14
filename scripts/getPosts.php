<?php
require_once("dbConfig.php");

$sql = "SELECT id, author, title, comment, datetime FROM blogposts ORDER BY id DESC ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    echo "<div class='col-md-6'>";
    echo "<div class='row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative'>";
    echo "<div class='col p-4 d-flex flex-column position-static'>";
    echo "<strong class='d-inline-block mb-2 text-primary'>" . $row["author"] . "</strong>";
    echo "<h3 class='mb-0'>" . $row["title"] . "</h3>";
    echo "<div class='mb-1 text-muted'>" . $row["datetime"] . "</div>";
    echo "<p class='card-text mb-auto'>" . $row["comment"] . "</p>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
  }
} else {
  echo "0 results";
}
$conn->close();
