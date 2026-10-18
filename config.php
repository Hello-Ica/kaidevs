<?php
// for XAMPP (localhost)
$isLocal = in_array($_SERVER['HTTP_HOST'] ?? '', ['localhost', '127.0.0.1']);
define('BASE_URL', $isLocal ? '/kaidevs-website/' : '/');

?>