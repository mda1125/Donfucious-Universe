<?php
header('Content-Type: application/json');

$files = array_filter(scandir('.'), function($file) {
    return preg_match('/^\d{4}-\d{2}-\d{2}-.+\.md$/', $file);
});

echo json_encode($files);
?>