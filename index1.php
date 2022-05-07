<?php

session_start();
echo "Welcome user" ,$_SESSION['email'];
?>
<a href = "logout.php">
<button>Logout</button>
</a>