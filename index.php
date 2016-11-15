<?php
$today = new DateTime();
echo $today->format('Y-m-d H:i:s');
echo '<br>';
echo getenv('APP_ENV');
echo '<br>';
echo $_SERVER['APP_ENV'];
echo '<br>';
echo phpinfo();
