<?php

// Get the offset parameter
$offset = $_GET['offset'];

// Connect to the database
$dbc = mysqli_connect('localhost', 'root', 'nisrine2002', 'Comment_section');

// Retrieve the next four comments from the database
$query = "SELECT * FROM comments ORDER BY id DESC LIMIT 20 OFFSET $offset";
$comments = mysqli_query($dbc, $query);

// Close the database connection
mysqli_close($dbc);

// Output the comments as HTML
while ($row = mysqli_fetch_array($comments)) {
  echo  "<strong>".$row['nom'] ."</strong>"."<br>" ."<div class=\"ligne\">". $row['comment'] ."</div>"."<br>";

}
