<?php
// Connect to the database
$db = mysqli_connect('localhost', 'username', 'password', 'database_name');

// Check if the user is logged in
if (isset($_SESSION['username'])) {
   // Get the user level from the database
   $username = $_SESSION['username'];
   $query = "SELECT user_level FROM users WHERE username = '$username'";
   $result = mysqli_query($db, $query);
   $user_level = mysqli_fetch_assoc($result)['user_level'];
} else {
   // If the user is not logged in, set their user level to "guest"
   $user_level = "guest";
}

// Use the user level to determine what content to show the user
if ($user_level == "admin") {
   // Show admin-only content
} elseif ($user_level == "manager") {
   // Show manager-level content
} elseif ($user_level == "user") {
   // Show user-level content
} else {
   // Show guest-level content
}

?>
