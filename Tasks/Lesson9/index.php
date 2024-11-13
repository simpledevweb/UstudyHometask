<?php

// 1

// Create dir
if (!is_dir('files')) {
    mkdir('files');
}

// Create file and write
$path = "files/task1.txt";
$text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.";

file_put_contents($path, $text);

// Read and Show
$file = fopen($path, 'r');
$filecontent = fread($file, filesize($path));
fclose($file);

echo $filecontent;


// 2

$text = "Example text 1 2 3.";

if(file_exists("files/task1.txt")){

    $file = fopen("files/task1.txt", "a");
    fwrite($file, "\n" . $text);
    fclose($file);

    echo "Text is written in end of file.";
}else{

    if (!is_dir('files')) {
        mkdir('files');
    }

    file_put_contents("files/task1.txt", $text);

    echo "File is created and written text";
}

// 3

$file = fopen('files/task1.txt', 'r');
$i = 0;

if($file){
    // Read line by line while file ending
    while(($line = fgets($file)) !== false){
        $i++; // Count lines
    }

    fclose($file);
    echo "Number of lines :  " . $i;
}else{
    echo "Error while opening task1 file";
}

// 4

$file = 'index.html';

$htmlcontent = "
    <h1>Task 4</h1>
    <p>Bul task 4 ushin paragraf.</p>
";

file_put_contents($file, $htmlcontent);

// Get file size in bytes
$size = filesize($file);

echo "Html file's size is" . $size;

// 5

$dirname = "task5";

if(!is_dir($dirname)) {
    mkdir($dirname);
}

$filename = "example5.txt";
$text ="Line 1: Lorem pas 1. \nLine 2: Lorem pas 2. \nLine 3: Lorem pas 3. \nLine 4: Lorem pas 4.";

file_put_contents($dirname."/".$filename,$text);

echo "Directory created and written text";

// 6

$filename = "task6.txt";
$secondfile = "copy.txt";

if(file_exists($filename)){
    // Copy with function copy. Also, Copy with file_put_contents and fopen,fwrite using while loop
    if(copy($filename, $secondfile)){
        echo "File successfully copied";
    }else{
        echo "Error while copying file";
    }
}else{
    echo "File does not exist";
}

// 7

$text = "FIrst line to write";
$filename = "task7.txt";

if(filesize($filename) == 0){
    file_put_contents($filename, $text);
    echo "File is empty and text is written to $filename";
}else {

    $file = fopen($filename, "r+");

    if ($file) {
        $temp = fread($file, filesize($filename));
        if (strlen($temp) > 0) {
            // Change pointer
            fseek($file, 0);
            //Write text to beginning file
            fwrite($file, $text . "\n");
            fwrite($file, $temp);
        }
        fclose($file);
        echo "Written text to $filename";
    } else {
        echo "Error opening file";
    }
}

// 8

if(is_dir("task8")){
    if(file_exists("task8/example.txt")){
        unlink("task8/example.txt");
        rmdir("task8");
        echo "File and Dir are deleted";
    }else{
        rmdir("task8");
        echo "File is not exist and Dir is deleted.";
    }
}else{
    echo "File and Dir are not exist.";
}

// 9

$array = [
    "First line",
    "Second line",
    "Third line",
    "Fourth line"
];
print_r($array);

echo "<br>";
echo "<br>";

// Write arrays element by line
$filename = "task9.txt";
$file = fopen($filename, "w+");
foreach ($array as $line) {
    fwrite($file, $line . "\n");
}

// Show reverse lines
$lines = file($filename);
$i = 4;
while($i != 0){
    echo $lines[$i-1]. "\n";
    echo "<br>";
    $i--;
}

fclose($file);

// 10

$filename = "test.txt";
$newfilename = "Task10.txt";
$dirname1 = "olddir";
$dirname2 = "newdir";

if(file_exists($dirname1."/".$filename)) {
    //Change file name
    if (rename($dirname1."/".$filename, $dirname1."/".$newfilename)) {
        echo 'File is renamed';
        echo "<br>";

        // Renamed file Move to new dir
        if (rename($dirname1 . "/" . $newfilename, $dirname2."/".$newfilename)) {
            echo 'File is moved';
        } else {
            echo 'Error while File is moving';
        }
    } else {
        echo 'Error. File is not renamed';
    }
}
