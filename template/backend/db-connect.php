<?php
$db_host = "localhost";               // Database Host
$db_user = "favrora1_site";           // Database User
$db_pass = "hCrYg9&T";                // Database Password
$db_name = "favrora1_site";           // Database Name

// Connect to Database
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Check connection
if(!$conn) {
  die("Connection failed: " . mysqli_connect_error()); // Display error if not connected
}


/* Create id for view page counter in phpmyadmin
INSERT INTO pages (total_views)
VALUES (0),(0),(0),(0),(0),(0);
*/

?>