<?php
echo "<h1 style=color:red>php file functions</h1>";
$fileName="demo.txt";
$fileName1="venkat_folder";

echo "<h3 style=color:blue>1) File Read/Write Functions</h3>";

// fopen() + fwrite()
$file = fopen($fileName, "w"); 
fwrite($file, "Hello Buddy!\nWelcome to PHP File Handling.\n");
fclose($file);

echo "a)File created and written using fopen() + fwrite() <br>";


// fopen() + fread()
echo "<hr>";
$file = fopen($fileName, "r");
$content = fread($file, filesize($fileName));
fclose($file);

echo "b)File read using fopen() + fread(): <br>";
print_r($content);

//file_put_contents()
echo "<hr>";
file_put_contents($fileName,"this is a new content");
echo "c)file written using file_put_contents() <br>";

//file_get_contents()
echo "<hr>";
$content = file_get_contents($fileName);
echo "d)file read using file_get_contents(): <br>";
print_r($content);

//file()
echo "<hr>";
$lines=file($fileName);
echo "e)file read using file() :<br>";
print_r($lines);

echo "<h3 style=color:blue> 2) File information functions</h3>";
//file_exists()
if(file_exists($fileName)){
    echo "a)file_exists():File exixts <br>";
}
else{
    echo "File does not exist <br>";
}

//filesize()
echo "<hr>";
echo "b)filesize():file size is: ".filesize($fileName)." bytes <br>";

//filetype()
echo "<hr>";
echo "c)filetype():file type is : ".filetype($fileName)."<br>";

//fileatime()
echo "<hr>";
echo "d)fileatime(): file last accessed time is : ".date("Y-m-d H:i:s",fileatime($fileName))."<br>";

echo "<hr>";
echo "e)filemtime(): " . date("d-m-Y H:i:s", filemtime($fileName)) . "<br>";

echo "<hr>";
echo "f)filectime(): " . date("d-m-Y H:i:s", filectime($fileName)) . "<br>";

echo "<hr>";
echo "g)fileperms(): " . substr(sprintf('%o', fileperms($fileName)), -4) . "<br>";

echo "<hr>";
echo "h)fileowner(): " . fileowner($fileName) . "<br>";

echo "<hr>";
echo "i)filegroup(): " . filegroup($fileName) . "<br>";

echo "<hr>";
echo "j)fileinode(): " . fileinode($fileName) . "<br><br>";


echo "<h3 style=color:blue>3) File & Folder Management </h3>";

// copy()
copy($fileName, "copy_demo.txt");
echo "copy(): demo.txt copied to copy_demo.txt <br>";

// rename()
echo "<hr>";
rename("copy_demo.txt", "renamed_demo.txt");
echo "rename(): copy_demo.txt renamed to renamed_demo.txt <br>";

// mkdir()
echo "<hr>";
if (!file_exists($fileName1)) {
    mkdir($fileName1);
    echo "mkdir(): Folder venkat_folder created <br><br>";
}

// is_file()
echo "<hr>";
if (is_file($fileName)) {
    echo "is_file(): demo.txt is a file  <br>";
}

// is_dir()
echo "<hr>";
if (is_dir($fileName1)) {
    echo "is_dir(): venkat_folder is a directory  <br>";
}

 // unlink()
echo "<hr>";
unlink("renamed_demo.txt");
echo "unlink(): renamed_demo.txt deleted <br>";

//rmdir()
// echo "<hr>";
// rmdir($fileName1);
// echo "rmdir(): venkat_folder deleted <br>";


echo "<h3 style=color:blue>4) Directory Handling</h3>";

// getcwd()
echo "getcwd(): Current directory = " . getcwd() . "<br><br>";

// scandir()
echo "<hr>";
echo "<b>scandir() Output:</b><br>";
print_r(scandir("."));
echo "<br><br>";

// opendir() + readdir() + closedir()
echo "<hr>";
echo "<b>opendir() + readdir() Output:</b><br>";

$dir = opendir(".");
while (($fileRead = readdir($dir)) !== false) {
    echo $fileRead . "<br>";
}
closedir($dir);

echo "<hr>";
echo "<br>Directory closed using closedir() <br><br>";

// chdir()
echo "<hr>";
chdir($fileName1);
echo "chdir(): Changed directory to venkat_folder <br>";
echo "New current directory: " . getcwd() . "<br><br>";

// return back
echo "<hr>";
chdir("..");
echo "New current directory: " . getcwd() . "<br><br>";

//flock
echo "<hr>";
$file = fopen($fileName, "r");
if (flock($file, LOCK_SH)) { 
    echo "File locked for reading <br>";
    sleep(5); 
    flock($file, LOCK_UN); 
    echo "File unlocked after reading <br>";
} else {
    echo "Couldn't acquire lock! <br>";
}

?>