<?php
$files = scandir("/tmp/");

echo "<h2>Images dans /tmp</h2>";

foreach ($files as $file) {

    $path = "/tmp/" . $file;

    $data = @file_get_contents($path);

    if ($data) {
        $base64 = base64_encode($data);

        echo "<p>$file</p>";
        echo "<img src='data:image/jpg;base64,$base64' width='250'><br><br>";
    }
}
?>