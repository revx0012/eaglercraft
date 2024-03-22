<?php
if (isset($_GET['version'])) {
    $version = $_GET['version'];

    if ($version == '1.8.8' || $version == '1.5.2') {
        header("Location: /{$version}/");
        exit();
    }
}
// If version is not valid or not provided, redirect to homepage or handle error
header("Location: /index.html");
exit();
?>
