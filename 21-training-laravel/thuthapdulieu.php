<?php

$filePath = __DIR__ . '/links.txt';

$handle = fopen($filePath, "r");
$links = [];
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        $links[] = $line;
    }

    fclose($handle);
}

foreach ($links as $url) {
    $data = file_get_contents(trim($url)); // to get file
    $fileName = basename(trim($url));

    file_put_contents('data/' . $fileName, $data);
}

var_dump($links);
