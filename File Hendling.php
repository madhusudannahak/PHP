<?php
// File name
$filename = "php.txt";

// Writing to a file
$file = fopen($filename, "w") or die("Unable to open file!");
$txt = "Hello, PHP!\n";
fwrite($file, $txt);
fclose($file);

// Appending to a file
$file = fopen($filename, "a") or die("Unable to open file!");
$txt = "Appending to the file.\n";
fwrite($file, $txt);
fclose($file);

// Reading from a file
$file = fopen($filename, "r") or die("Unable to open file!");
echo "Content of the file:<br>";
while (!feof($file)) {
    echo fgets($file) . "<br>";
}
fclose($file);

// Checking file existence
if (file_exists($filename)) {
    echo "File '$filename' exists.<br>";
} else {
    echo "File '$filename' does not exist.<br>";
}

// Getting file size
$filesize = filesize($filename);
echo "File size of '$filename': $filesize bytes.<br>";

// Deleting a file
if (unlink($filename)) {
    echo "File '$filename' deleted successfully.<br>";
} else {
    echo "Failed to delete file '$filename'.<br>";
}
?>
