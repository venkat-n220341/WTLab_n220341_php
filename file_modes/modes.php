<?php

echo "<h2 style=color:red>PHP File Open Modes Demo</h2>";
$fileName = "modes.txt";

echo "<h3>Mode: r (Read Only)</h3>";

if (file_exists($fileName)) {
    $file = fopen($fileName, "r");
    print_r(fread($file, filesize($fileName)));
    fclose($file);
} else {
    echo "File does not exist. r mode cannot create file.<br>";
}


echo"<hr>";
echo "<h3>Mode: w (Write Only - erase old data)</h3>";

$file = fopen($fileName, "w");
fwrite($file, "This is written using w mode.\n");
fclose($file);

echo "File written successfully using w mode.<br>";


echo"<hr>";
echo "<h3>Mode: a (Append Only)</h3>";

$file = fopen($fileName, "a");
fwrite($file, "This line is appended using a mode.\n");
fclose($file);
echo "Data appended successfully using a mode.<br>";


echo"<hr>";
echo "<h3>Mode: x (Create New File)</h3>";

$newFile = "newfile.txt";
if (!file_exists($newFile)) {
    $file = fopen($newFile, "x");
    fwrite($file, "File created using x mode.\n");
    fclose($file);
    echo "newfile.txt created successfully using x mode.<br>";
} else {
    echo "File already exists. x mode failed.<br>";
}


echo"<hr>";
echo "<h3>Mode: r+ (Read & Write)</h3>";

$file = fopen($fileName, "r+");
$data = fread($file, filesize($fileName));
echo "<b>Before Writing:</b><br>" . nl2br($data);

fwrite($file, "\nWritten using r+ mode.");
fclose($file);
echo "<br>Data written using r+ mode (at current pointer).<br>";


echo"<hr>";
echo "<h3>Mode: w+ (Read & Write - erase old data)</h3>";

$file = fopen($fileName, "w+");
fwrite($file, "Old data erased! New content using w+.\n");
rewind($file);
echo "<b>Reading After Writing:</b><br>" . nl2br(fread($file, filesize($fileName)));

fclose($file);


?>