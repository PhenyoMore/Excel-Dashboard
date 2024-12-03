<?php
// File: openFile.php

// Mock user mapping
$userFiles = [
    'PhenyoMore' => 'C:\\Users\\PhenyoMore\\Evotel\\Andrew Cohoe - MTF - Planning\\011 - Reports\\Network Planning\\MTF Schools\\00 - Summary Report\\MTF School Tracker.xlsm',
    'JohnDoe' => 'C:\\Users\\JohnDoe\\Evotel\\Andrew Cohoe - MTF - Planning\\011 - Reports\\Network Planning\\MTF Schools\\00 - Summary Report\\MTF School Tracker.xlsm'
];

$username = $_GET['user'] ?? null;

if ($username && isset($userFiles[$username])) {
    $filePath = $userFiles[$username];
    shell_exec("start excel \"$filePath\"");
    echo "File opened: $filePath";
} else {
    echo "Invalid user or file not found.";
}
?>
