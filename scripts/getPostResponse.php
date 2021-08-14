<?php
require_once("dbConfig.php");
if ((isset($_POST['authorSelf']) && $_POST['authorSelf'] != '') &&
  (isset($_POST['titleSelf']) && $_POST['titleSelf'] != '') &&
  (isset($_POST['commentSelf']) && $_POST['commentSelf'] != '')
) {

  $authorSelf = $conn->real_escape_string($_POST['authorSelf']);
  $titleSelf = $conn->real_escape_string($_POST['titleSelf']);
  $commentSelf = $conn->real_escape_string($_POST['commentSelf']);
  $datetime = date("Y-m-d h:i:sa");
  $sql = "INSERT INTO blogposts (author, title, comment, datetime) VALUES ('" . $authorSelf . "','" . $titleSelf . "', '" . $commentSelf . "', '" . $datetime . "')";
  if (!$result = $conn->query($sql)) {
    die('There was an error running the query [' . $conn->error . ']');
  } else {
    echo "Post succesful!";
  }
} else {
  echo "Please fill Author, Title, and Comment.";
}
