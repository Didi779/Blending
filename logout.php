<?php
session_start(); // Start a new session or resume the existing session to access session variables

session_destroy(); // Destroy all data registered to the session, effectively logging the user out

header("Location: index.php"); // Redirect the user to the index page after logging out
exit(); // Stop further script execution after the redirect
?>
