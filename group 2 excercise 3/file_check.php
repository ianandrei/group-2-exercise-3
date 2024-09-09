<!DOCTYPE html>>
<html lang="en">
    <head>
        <meta chrarset="UFT-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, intitial-scale=1.0">
        <title>Function</title>
    </head>
    <body>
    <?php

$filename = 'data.txt';

if (!file_exists($filename)) {

    $initialContent = "Group 2";
    file_put_contents($filename, $initialContent);
}

if (file_exists($filename)) {
    echo "The file '$filename' exists.<br>";

    $fileContent = file_get_contents($filename);
    echo "Content of the file:<br>";
    echo "<pre>" . htmlspecialchars($fileContent) . "</pre>";

  
    $fileLines = file($filename, FILE_IGNORE_NEW_LINES);
    echo "File lines:<br>";
    foreach ($fileLines as $line) {
        echo htmlspecialchars($line) . "<br>";
    }
} else {
    echo "The file '$filename' does not exist.<br>";
}
?>


</body>
</html>